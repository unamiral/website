<?php
/**
 * PubMed publication synchronization.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'SHMUEL_PUBMED_QUERY', '("Amir Shmuel"[Author] OR "Shmuel A"[Author]) AND (McGill[Affiliation] OR "Montreal Neurological"[Affiliation] OR "McConnell Brain Imaging"[Affiliation]) AND (fMRI OR MRI OR Brain OR Neuron OR Visual OR cortex OR imaging OR Neurophysiology)' );
define( 'SHMUEL_PUBMED_BATCH_SIZE', 100 );

/**
 * Helper to get all text from a SimpleXML element, including children.
 */
function shmuel_get_xml_text( $element ) {
    if ( ! $element ) {
        return '';
    }
    // dom_import_simplexml + textContent is the most reliable way to get all text nodes
    $dom = dom_import_simplexml( $element );
    return trim( $dom->textContent );
}

function shmuel_schedule_publication_sync() {
    if ( ! wp_next_scheduled( 'shmuel_pubmed_daily_sync' ) ) {
        wp_schedule_event( time() + HOUR_IN_SECONDS, 'daily', 'shmuel_pubmed_daily_sync' );
    }
}
add_action( 'after_switch_theme', 'shmuel_schedule_publication_sync' );

function shmuel_clear_publication_sync() {
    wp_clear_scheduled_hook( 'shmuel_pubmed_daily_sync' );
}
add_action( 'switch_theme', 'shmuel_clear_publication_sync' );
add_action( 'shmuel_pubmed_daily_sync', 'shmuel_sync_publications' );

function shmuel_pubmed_request( $endpoint, $args ) {
    $defaults = array(
        'db'      => 'pubmed',
        'retmode' => 'xml',
        'tool'    => 'shmuel_lab_theme',
        'email'   => get_option( 'admin_email' ),
    );

    $url = add_query_arg(
        array_merge( $defaults, $args ),
        'https://eutils.ncbi.nlm.nih.gov/entrez/eutils/' . $endpoint
    );

    $response = wp_remote_get(
        $url,
        array(
            'timeout' => 20,
            'headers' => array(
                'Accept' => 'application/xml',
            ),
        )
    );

    if ( is_wp_error( $response ) ) {
        return $response;
    }

    $code = wp_remote_retrieve_response_code( $response );
    if ( 200 !== $code ) {
        return new WP_Error( 'pubmed_http_error', sprintf( 'PubMed returned HTTP %d.', $code ) );
    }

    return wp_remote_retrieve_body( $response );
}

function shmuel_sync_publications( $limit = 0 ) {
    if ( get_transient( 'shmuel_pubmed_sync_lock' ) ) {
        return new WP_Error( 'sync_locked', __( 'A publication sync is already running.', 'shmuel-lab' ) );
    }

    set_transient( 'shmuel_pubmed_sync_lock', 1, 10 * MINUTE_IN_SECONDS );

    $result = shmuel_do_sync_publications( absint( $limit ) );
    delete_transient( 'shmuel_pubmed_sync_lock' );

    if ( is_wp_error( $result ) ) {
        update_option( 'shmuel_pubmed_last_error', $result->get_error_message(), false );
        return $result;
    }

    update_option( 'shmuel_pubmed_last_sync', current_time( 'mysql' ), false );
    update_option( 'shmuel_pubmed_last_count', (int) $result, false );
    delete_option( 'shmuel_pubmed_last_error' );

    return $result;
}

function shmuel_do_sync_publications( $limit = 0 ) {
    $search_body = shmuel_pubmed_request(
        'esearch.fcgi',
        array(
            'term'    => SHMUEL_PUBMED_QUERY,
            'retmax'  => $limit > 0 ? $limit : 500,
            'sort'    => 'pub date',
            'retmode' => 'xml',
        )
    );

    if ( is_wp_error( $search_body ) ) {
        return $search_body;
    }

    $search_xml = simplexml_load_string( $search_body );
    if ( false === $search_xml ) {
        return new WP_Error( 'pubmed_search_parse', __( 'Could not parse PubMed search results.', 'shmuel-lab' ) );
    }

    $pmids = array();
    foreach ( $search_xml->IdList->Id as $id ) {
        $pmids[] = (string) $id;
    }

    if ( empty( $pmids ) ) {
        return 0;
    }

    $changed = 0;
    foreach ( array_chunk( $pmids, SHMUEL_PUBMED_BATCH_SIZE ) as $chunk ) {
        $fetch_body = shmuel_pubmed_request(
            'efetch.fcgi',
            array(
                'id'      => implode( ',', $chunk ),
                'rettype' => 'abstract',
                'retmode' => 'xml',
            )
        );

        if ( is_wp_error( $fetch_body ) ) {
            return $fetch_body;
        }

        $fetch_xml = simplexml_load_string( $fetch_body );
        if ( false === $fetch_xml ) {
            return new WP_Error( 'pubmed_fetch_parse', __( 'Could not parse PubMed article details.', 'shmuel-lab' ) );
        }

        foreach ( $fetch_xml->PubmedArticle as $article ) {
            $saved = shmuel_save_pubmed_article( $article );
            if ( ! is_wp_error( $saved ) && $saved ) {
                $changed++;
            }
        }
    }

    return $changed;
}

function shmuel_save_pubmed_article( $article ) {
    $medline = $article->MedlineCitation;
    $pmid    = trim( (string) $medline->PMID );

    if ( '' === $pmid ) {
        return new WP_Error( 'missing_pmid', __( 'Publication is missing a PMID.', 'shmuel-lab' ) );
    }

    $title    = shmuel_get_xml_text( $medline->Article->ArticleTitle );
    $journal  = shmuel_get_xml_text( $medline->Article->Journal->Title );
    $year     = shmuel_extract_pubmed_year( $medline->Article->Journal->JournalIssue->PubDate );
    $authors  = shmuel_extract_pubmed_authors( $medline->Article->AuthorList );
    $abstract = shmuel_extract_pubmed_abstract( $medline->Article->Abstract );
    $doi      = shmuel_extract_pubmed_doi( $article );
    $url      = $doi ? 'https://doi.org/' . rawurlencode( $doi ) : 'https://pubmed.ncbi.nlm.nih.gov/' . rawurlencode( $pmid ) . '/';

    $existing = get_posts(
        array(
            'post_type'      => 'publication',
            'post_status'    => 'any',
            'posts_per_page' => 1,
            'fields'         => 'ids',
            'meta_query'     => array(
                array(
                    'key'   => 'pub_pmid',
                    'value' => $pmid,
                ),
            ),
        )
    );

    $post_data = array(
        'post_type'    => 'publication',
        'post_title'   => $title ? $title : sprintf( __( 'PubMed publication %s', 'shmuel-lab' ), $pmid ),
        'post_status'  => 'publish',
        'post_content' => $abstract,
    );

    if ( $existing ) {
        $post_data['ID'] = (int) $existing[0];
        $post_id = wp_update_post( wp_slash( $post_data ), true );
        $changed = ! is_wp_error( $post_id );
    } else {
        $post_id = wp_insert_post( wp_slash( $post_data ), true );
        $changed = ! is_wp_error( $post_id );
    }

    if ( is_wp_error( $post_id ) ) {
        return $post_id;
    }

    update_post_meta( $post_id, 'pub_pmid', $pmid );
    update_post_meta( $post_id, 'pub_authors', $authors );
    update_post_meta( $post_id, 'pub_journal', $journal );
    update_post_meta( $post_id, 'pub_year', $year );
    update_post_meta( $post_id, 'pub_doi', $doi );
    update_post_meta( $post_id, 'pub_url', esc_url_raw( $url ) );
    update_post_meta( $post_id, 'pub_abstract', $abstract );

    return $changed;
}

function shmuel_extract_pubmed_authors( $author_list ) {
    $names = array();

    if ( ! $author_list || ! isset( $author_list->Author ) ) {
        return '';
    }

    foreach ( $author_list->Author as $author ) {
        $last_name = trim( (string) $author->LastName );
        $initials  = trim( (string) $author->Initials );
        $collective = trim( (string) $author->CollectiveName );

        if ( $last_name ) {
            $names[] = trim( $last_name . ' ' . $initials );
        } elseif ( $collective ) {
            $names[] = $collective;
        }
    }

    return implode( ', ', $names );
}

function shmuel_extract_pubmed_abstract( $abstract ) {
    $parts = array();

    if ( ! $abstract || ! isset( $abstract->AbstractText ) ) {
        return '';
    }

    foreach ( $abstract->AbstractText as $text ) {
        $label = isset( $text['Label'] ) ? trim( (string) $text['Label'] ) : '';
        $value = shmuel_get_xml_text( $text );

        if ( $value ) {
            $parts[] = $label ? $label . ': ' . $value : $value;
        }
    }

    return implode( "\n\n", $parts );
}

function shmuel_extract_pubmed_year( $pub_date ) {
    if ( isset( $pub_date->Year ) && (string) $pub_date->Year ) {
        return (int) $pub_date->Year;
    }

    if ( isset( $pub_date->MedlineDate ) && preg_match( '/\b(19|20)\d{2}\b/', (string) $pub_date->MedlineDate, $matches ) ) {
        return (int) $matches[0];
    }

    return 0;
}

function shmuel_extract_pubmed_doi( $article ) {
    foreach ( $article->PubmedData->ArticleIdList->ArticleId as $id ) {
        $type = isset( $id['IdType'] ) ? (string) $id['IdType'] : '';
        if ( 'doi' === strtolower( $type ) ) {
            return trim( (string) $id );
        }
    }

    return '';
}

