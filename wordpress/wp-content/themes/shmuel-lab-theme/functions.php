<?php
/**
 * Shmuel Lab Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// ==========================================================================
// 1. Theme Setup
// ==========================================================================
function shmuel_lab_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'custom-logo' );

    // Register navigation menus
    register_nav_menus( array(
        'primary-desktop' => esc_html__( 'Primary Desktop Menu', 'shmuel-lab' ),
        'primary-mobile'  => esc_html__( 'Primary Mobile Menu', 'shmuel-lab' ),
        'footer-links'    => esc_html__( 'Footer Links Menu', 'shmuel-lab' ),
    ) );
}
add_action( 'after_setup_theme', 'shmuel_lab_setup' );

// ==========================================================================
// 2. Enqueue Styles & Scripts
// ==========================================================================
function shmuel_lab_scripts() {
    // Google Fonts
    wp_enqueue_style( 'shmuel-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Outfit:wght@400;600;700;800&display=swap', false );
    
    // Theme Stylesheet
    wp_enqueue_style( 'shmuel-lab-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'shmuel_lab_scripts' );

// ==========================================================================
// 3. Includes (CPTs, ACF, PubMed Tracker)
// ==========================================================================
// Include Custom Post Types
require_once get_template_directory() . '/inc/post-types.php';

// Include ACF Fields Programmatically
require_once get_template_directory() . '/inc/acf-fields.php';

// Include PubMed Tracker
require_once get_template_directory() . '/inc/publication-tracker.php';


// ==========================================================================
// 4. Admin UX & Clean Up
// ==========================================================================
function shmuel_remove_dashboard_widgets() {
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );
    remove_action( 'welcome_panel', 'wp_welcome_panel' );
}
add_action( 'wp_dashboard_setup', 'shmuel_remove_dashboard_widgets' );

function shmuel_welcome_dashboard_widget() {
    wp_add_dashboard_widget(
        'shmuel_welcome_widget',
        '👋 Welcome to the Shmuel Lab Website Manager',
        'shmuel_welcome_widget_content'
    );
}
function shmuel_welcome_widget_content() {
    echo '<div style="font-size: 14px; line-height: 1.8;">';
    echo '<p>Manage your lab website content quickly:</p>';
    echo '<ul style="list-style: none; padding: 0; margin: 0;">';
    echo '<li style="margin-bottom: 8px;">🔬 <a href="' . admin_url( 'edit.php?post_type=research_area' ) . '">Manage Research Areas</a></li>';
    echo '<li style="margin-bottom: 8px;">👥 <a href="' . admin_url( 'edit.php?post_type=team_member' ) . '">Manage Team Members</a></li>';
    echo '<li style="margin-bottom: 8px;">📄 <a href="' . admin_url( 'edit.php?post_type=publication' ) . '">Manage Publications</a></li>';
    echo '<li style="margin-bottom: 8px;">⚙️ <a href="' . admin_url( 'post.php?post=' . get_option('page_on_front') . '&action=edit' ) . '">Edit Homepage Settings</a></li>';
    echo '</ul>';
    
    // PubMed Sync Button Form
    echo '<hr style="margin: 15px 0;">';
    echo '<form method="post" action="' . admin_url('admin-post.php') . '">';
    echo '<input type="hidden" name="action" value="shmuel_sync_pubmed">';
    wp_nonce_field( 'shmuel_sync_pubmed_nonce', 'shmuel_nonce' );
    echo '<p><strong>PubMed Synchronization:</strong> The site automatically syncs publications nightly. You can also trigger a manual sync now.</p>';
    echo '<button type="submit" class="button button-primary">Sync Publications from PubMed</button>';
    echo '</form>';
    echo '</div>';
}
add_action( 'wp_dashboard_setup', 'shmuel_welcome_dashboard_widget' );

// Restrict Gutenberg Blocks
function shmuel_allowed_block_types( $allowed_blocks, $editor_context ) {
    return array(
        'core/paragraph',
        'core/heading',
        'core/image',
        'core/list',
        'core/list-item',
        'core/quote',
        'core/shortcode',
        'core/separator',
    );
}
add_filter( 'allowed_block_types_all', 'shmuel_allowed_block_types', 10, 2 );

// Disable Comments entirely
function shmuel_disable_comments_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
    remove_post_type_support( 'publication', 'comments' );
}
add_action( 'init', 'shmuel_disable_comments_support', 100 );
add_filter( 'comments_open', '__return_false', 20, 2 );
add_filter( 'pings_open', '__return_false', 20, 2 );
add_filter( 'comments_array', '__return_empty_array', 10, 2 );

// Handle PubMed Admin Post Action
function shmuel_handle_manual_sync() {
    if ( ! isset( $_POST['shmuel_nonce'] ) || ! wp_verify_nonce( $_POST['shmuel_nonce'], 'shmuel_sync_pubmed_nonce' ) ) {
        wp_die( 'Security check failed.' );
    }
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_die( 'Permission denied.' );
    }
    
    // Call the sync function (defined in inc/publication-tracker.php)
    if ( function_exists( 'shmuel_sync_publications' ) ) {
        $count = shmuel_sync_publications();
        wp_redirect( admin_url( 'index.php?shmuel_sync=success&count=' . $count ) );
        exit;
    }
    
    wp_redirect( admin_url( 'index.php?shmuel_sync=error' ) );
    exit;
}
add_action( 'admin_post_shmuel_sync_pubmed', 'shmuel_handle_manual_sync' );

function shmuel_sync_admin_notice() {
    if ( isset( $_GET['shmuel_sync'] ) && $_GET['shmuel_sync'] == 'success' ) {
        $count = isset( $_GET['count'] ) ? intval( $_GET['count'] ) : 0;
        echo '<div class="notice notice-success is-dismissible"><p>Successfully synced PubMed! Added/Updated <strong>' . $count . '</strong> publications.</p></div>';
    } elseif ( isset( $_GET['shmuel_sync'] ) && $_GET['shmuel_sync'] == 'error' ) {
        echo '<div class="notice notice-error is-dismissible"><p>Error syncing publications.</p></div>';
    }
}
add_action( 'admin_notices', 'shmuel_sync_admin_notice' );

// ==========================================================================
// 5. Customizer (Footer Settings)
// ==========================================================================
function shmuel_lab_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'shmuel_footer_section' , array(
        'title'      => __( 'Footer Settings', 'shmuel-lab' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'footer_address', array(
        'default'   => "Montreal Neurological Institute\nMcGill University\n3801 University Street\nMontreal, QC H3A 2B4",
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'footer_address', array(
        'label'    => __( 'Footer Address/Contact Info', 'shmuel-lab' ),
        'section'  => 'shmuel_footer_section',
        'type'     => 'textarea',
    ) );
}
add_action( 'customize_register', 'shmuel_lab_customize_register' );
