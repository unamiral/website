<?php
/**
 * Publication card.
 *
 * @var array $args Template arguments.
 */

$show_abstract = isset( $args['show_abstract'] ) ? (bool) $args['show_abstract'] : false;
$authors = get_post_meta( get_the_ID(), 'pub_authors', true );
$journal = get_post_meta( get_the_ID(), 'pub_journal', true );
$year = get_post_meta( get_the_ID(), 'pub_year', true );
$doi = get_post_meta( get_the_ID(), 'pub_doi', true );
$url = get_post_meta( get_the_ID(), 'pub_url', true );
$pmid = get_post_meta( get_the_ID(), 'pub_pmid', true );
$abstract = get_post_meta( get_the_ID(), 'pub_abstract', true );
?>

<article <?php post_class( 'publication-item' ); ?>>
    <h3 class="publication-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

    <?php if ( $authors ) : ?>
        <p class="publication-authors"><?php echo wp_kses_post( shmuel_highlight_lab_author( $authors ) ); ?></p>
    <?php endif; ?>

    <div class="publication-meta">
        <?php if ( $journal ) : ?>
            <span class="publication-journal"><?php echo esc_html( $journal ); ?></span>
        <?php endif; ?>
        <?php if ( $year ) : ?>
            <span><?php echo esc_html( $year ); ?></span>
        <?php endif; ?>
        <?php if ( $doi ) : ?>
            <span><?php echo esc_html( 'DOI: ' . $doi ); ?></span>
        <?php elseif ( $pmid ) : ?>
            <span><?php echo esc_html( 'PMID: ' . $pmid ); ?></span>
        <?php endif; ?>
        <?php if ( $url ) : ?>
            <a class="publication-link" href="<?php echo esc_url( $url ); ?>"><?php esc_html_e( 'Publisher link', 'shmuel-lab' ); ?></a>
        <?php endif; ?>
    </div>

    <?php if ( $show_abstract && $abstract ) : ?>
        <details class="publication-abstract">
            <summary><?php esc_html_e( 'Abstract', 'shmuel-lab' ); ?></summary>
            <p><?php echo nl2br( esc_html( $abstract ) ); ?></p>
        </details>
    <?php endif; ?>
</article>
