<?php
/**
 * Shmuel Lab Theme Functions
 * 
 * Logic:
 * 1. Global architecture setup with McGill branding support.
 * 2. Elimination of PHP warnings through defensive instantiation.
 * 3. Menu registration and cleanup.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// --- 1. Global Variable Safety Handler ---
function shmuel_get_theme_var( $key, $default = '' ) {
    // Standardizing variable lookup to prevent Undefined Variable warnings
    if ( function_exists( 'get_field' ) ) {
        $value = get_field( $key );
        return ( ! empty( $value ) ) ? $value : $default;
    }
    return $default;
}

// --- 2. Theme Setup & Institutional Branding ---
function shmuel_lab_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'custom-logo' );

    // Register strictly horizontal site navigation
    register_nav_menus( array(
        'primary-desktop' => esc_html__( 'Primary Desktop Menu', 'shmuel-lab' ),
        'footer-links'    => esc_html__( 'Footer Links Menu', 'shmuel-lab' ),
    ) );
}
add_action( 'after_setup_theme', 'shmuel_lab_setup' );

// --- 3. Refactor Global Navigation & Structural Arrays ---

function shmuel_default_menu() {
    // Standardizing on horizontal grid structure for menus
    $links = array(
        __( 'Home', 'shmuel-lab' ) => home_url( '/' ),
        __( 'Team', 'shmuel-lab' ) => home_url( '/team/' ),
        __( 'Publications', 'shmuel-lab' ) => home_url( '/publications/' ),
        __( 'Our Research', 'shmuel-lab' ) => home_url( '/our-research/' ),
        __( 'Contact', 'shmuel-lab' ) => home_url( '/contact/' ),
    );

    echo '<ul class="primary-menu-list horizontal-flex" role="menubar">';
    foreach ( $links as $label => $url ) {
        echo '<li role="none"><a role="menuitem" href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></li>';
    }
    echo '</ul>';
}

// --- 4. Enqueue Typography & Institutional Styles ---
function shmuel_lab_scripts() {
    // High-legibility Google Fonts for Academic Standards
    wp_enqueue_style( 'shmuel-academic-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Crimson+Pro:wght@400;600&display=swap', false );
    
    // Theme Stylesheet (Standardized CSS Grids)
    wp_enqueue_style( 'shmuel-lab-style', get_stylesheet_uri(), array(), '1.1.0' );
}
add_action( 'wp_enqueue_scripts', 'shmuel_lab_scripts' );

// --- 5. Global Metadata Support for PubMed/ORCID ---
function shmuel_highlight_lab_author( $author_string ) {
    // Pattern matching to highlight Dr. Shmuel in author lists
    $patterns = array( '/\b(Shmuel A)\b/u', '/\b(Amir Shmuel)\b/u' );
    return preg_replace( $patterns, '<strong class="lab-pi-highlight">$1</strong>', esc_html( $author_string ) );
}

// --- 6. Include Core Dependencies ---
require_once get_template_directory() . '/inc/post-types.php';
require_once get_template_directory() . '/inc/acf-fields.php';
require_once get_template_directory() . '/inc/publication-tracker.php';

// --- 7. Admin Notice Cleanup ---
add_filter( 'update_footer', '__return_empty_string', 11 );
add_filter( 'admin_footer_text', '__return_empty_string', 11 );
