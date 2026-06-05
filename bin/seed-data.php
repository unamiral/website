<?php
/**
 * Seed initial Shmuel Lab content.
 *
 * Run with:
 * php wp-cli.phar --path=wordpress eval-file bin/seed-data.php
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function shmuel_seed_page( $title, $slug, $template = '' ) {
    $existing = get_page_by_path( $slug, OBJECT, 'page' );

    if ( $existing ) {
        $page_id = $existing->ID;
    } else {
        $page_id = wp_insert_post(
            array(
                'post_type'    => 'page',
                'post_status'  => 'publish',
                'post_title'   => $title,
                'post_name'    => $slug,
                'post_content' => '',
            )
        );
    }

    if ( $template && ! is_wp_error( $page_id ) ) {
        update_post_meta( $page_id, '_wp_page_template', $template );
    }

    return $page_id;
}

function shmuel_seed_post_by_slug( $post_type, $title, $slug, $content, $meta = array() ) {
    $existing = get_page_by_path( $slug, OBJECT, $post_type );

    $post_data = array(
        'post_type'    => $post_type,
        'post_status'  => 'publish',
        'post_title'   => $title,
        'post_name'    => $slug,
        'post_content' => $content,
        'post_excerpt' => wp_trim_words( wp_strip_all_tags( $content ), 28 ),
    );

    if ( $existing ) {
        $post_data['ID'] = $existing->ID;
        $post_id = wp_update_post( $post_data );
    } else {
        $post_id = wp_insert_post( $post_data );
    }

    if ( ! is_wp_error( $post_id ) ) {
        foreach ( $meta as $key => $value ) {
            update_post_meta( $post_id, $key, $value );
        }
    }

    return $post_id;
}

$theme = wp_get_theme( 'shmuel-lab-theme' );
if ( $theme->exists() ) {
    switch_theme( 'shmuel-lab-theme' );
}

$home_id = shmuel_seed_page( 'Home', 'home' );
$team_id = shmuel_seed_page( 'Team', 'team', 'page-team.php' );
$publications_id = shmuel_seed_page( 'Publications', 'publications', 'page-publications.php' );

update_option( 'blogname', 'Brain Imaging Signals Lab' );
update_option( 'blogdescription', 'Visual Systems Neuroscience & Brain Imaging Signals' );
update_option( 'show_on_front', 'page' );
update_option( 'page_on_front', $home_id );

update_post_meta( $home_id, 'hero_title', 'Visual Systems Neuroscience & Brain Imaging Signals' );
update_post_meta( $home_id, 'hero_subtitle', 'Brain Imaging Signals Lab | McGill University' );
update_post_meta(
    $home_id,
    'about_lab',
    'The Brain Imaging Signals Lab studies the neural basis of visual perception and the physiological origins of brain imaging signals. The lab combines brain imaging, electrophysiology, computation, and visual neuroscience to connect measured signals with underlying neural mechanisms.'
);

$research_items = array(
    array(
        'title'   => 'Neuronal Basis of fMRI',
        'slug'    => 'neuronal-basis-of-fmri',
        'content' => 'We investigate how neuronal activity, hemodynamics, and vascular physiology contribute to functional magnetic resonance imaging signals.',
    ),
    array(
        'title'   => 'Visual Perception',
        'slug'    => 'visual-perception',
        'content' => 'We study how visual stimuli are represented, transformed, and interpreted across brain systems involved in perception.',
    ),
    array(
        'title'   => 'Computational and AI Models',
        'slug'    => 'computational-ai-models',
        'content' => 'We use computational models to interpret brain activity, imaging signals, and the relationship between measurements and neural mechanisms.',
    ),
);

foreach ( $research_items as $item ) {
    shmuel_seed_post_by_slug( 'research_area', $item['title'], $item['slug'], $item['content'] );
}

shmuel_seed_post_by_slug(
    'team_member',
    'Amir Shmuel',
    'amir-shmuel',
    '',
    array(
        'member_role'    => 'Principal Investigator',
        'member_email'   => '',
        'member_scholar' => '',
        'member_bio'     => 'Principal Investigator, Visual Systems Neuroscience & Brain Imaging Signals Lab.',
        'member_order'   => 1,
    )
);

$menu_name = 'Main Menu';
$menu = wp_get_nav_menu_object( $menu_name );
$menu_id = $menu ? $menu->term_id : wp_create_nav_menu( $menu_name );

if ( ! is_wp_error( $menu_id ) ) {
    $menu_items = wp_get_nav_menu_items( $menu_id );
    if ( ! empty( $menu_items ) ) {
        foreach ( $menu_items as $menu_item ) {
            wp_delete_post( $menu_item->ID, true );
        }
    }

    wp_update_nav_menu_item( $menu_id, 0, array( 'menu-item-title' => 'Home', 'menu-item-object-id' => $home_id, 'menu-item-object' => 'page', 'menu-item-type' => 'post_type', 'menu-item-status' => 'publish' ) );
    wp_update_nav_menu_item( $menu_id, 0, array( 'menu-item-title' => 'Team', 'menu-item-object-id' => $team_id, 'menu-item-object' => 'page', 'menu-item-type' => 'post_type', 'menu-item-status' => 'publish' ) );
    wp_update_nav_menu_item( $menu_id, 0, array( 'menu-item-title' => 'Publications', 'menu-item-object-id' => $publications_id, 'menu-item-object' => 'page', 'menu-item-type' => 'post_type', 'menu-item-status' => 'publish' ) );
    wp_update_nav_menu_item( $menu_id, 0, array( 'menu-item-title' => 'Research', 'menu-item-url' => home_url( '/research/' ), 'menu-item-status' => 'publish' ) );

    set_theme_mod(
        'nav_menu_locations',
        array(
            'primary-desktop' => $menu_id,
            'primary-mobile'  => $menu_id,
            'footer-links'    => $menu_id,
        )
    );
}

if ( function_exists( 'shmuel_sync_publications' ) ) {
    $sync_result = shmuel_sync_publications();
    if ( is_wp_error( $sync_result ) ) {
        WP_CLI::warning( 'PubMed sync skipped or failed: ' . $sync_result->get_error_message() );
    } else {
        WP_CLI::success( 'PubMed sync added or updated ' . (int) $sync_result . ' publications.' );
    }
}

flush_rewrite_rules();
WP_CLI::success( 'Brain Imaging Signals Lab seed content is ready.' );
