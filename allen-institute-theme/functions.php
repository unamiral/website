<?php
/**
 * Allen Institute Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Set up theme features
function allen_institute_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'custom-logo' );

    // Register navigation menus
    register_nav_menus( array(
        'primary-desktop' => esc_html__( 'Primary Desktop Menu', 'allen-institute' ),
        'primary-mobile'  => esc_html__( 'Primary Mobile Menu', 'allen-institute' ),
        'footer-links'    => esc_html__( 'Footer Links Menu', 'allen-institute' ),
    ) );
}
add_action( 'after_setup_theme', 'allen_institute_setup' );

// Customizer Settings
function allen_institute_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'allen_footer_section' , array(
        'title'      => __( 'Footer Settings', 'allen-institute' ),
        'priority'   => 30,
    ) );

    // Footer Address/Contact
    $wp_customize->add_setting( 'footer_address', array(
        'default'   => 'allen institute, 615 Westlake Ave North, Seattle, WA 98109 +12065487055',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'footer_address', array(
        'label'    => __( 'Footer Address/Contact Info', 'allen-institute' ),
        'section'  => 'allen_footer_section',
        'type'     => 'textarea',
    ) );

    // Copyright Text
    $wp_customize->add_setting( 'footer_copyright', array(
        'default'   => '© 2026 allen institute. all rights reserved.',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'footer_copyright', array(
        'label'    => __( 'Copyright Text', 'allen-institute' ),
        'section'  => 'allen_footer_section',
        'type'     => 'text',
    ) );

    // Social Links
    $socials = array('linkedin', 'facebook', 'instagram', 'twitter', 'youtube', 'bluesky');
    foreach($socials as $social) {
        $wp_customize->add_setting( 'social_' . $social, array(
            'default'   => '',
            'transport' => 'refresh',
        ) );
        $wp_customize->add_control( 'social_' . $social, array(
            'label'    => sprintf( __( '%s URL', 'allen-institute' ), ucfirst($social) ),
            'section'  => 'allen_footer_section',
            'type'     => 'url',
        ) );
    }
}
add_action( 'customize_register', 'allen_institute_customize_register' );

// Enqueue styles and scripts
function allen_institute_scripts() {
    // Theme Stylesheet
    wp_enqueue_style( 'allen-institute-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Swiper CSS
    wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '9.0.0' );

    // Main layout styling (cloned from Webflow staging CDN)
    wp_enqueue_style( 'allen-institute-staging-css', get_template_directory_uri() . '/assets/css/allen-institute-staging.shared.92730c820.min.css', array(), '1.0.0' );

    // Enqueue JS scripts (with correct dependencies)
    wp_enqueue_script( 'gsap-js', get_template_directory_uri() . '/assets/js/gsap.min.js', array(), '3.15.0', true );
    wp_enqueue_script( 'scrolltrigger-js', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', array('gsap-js'), '3.15.0', true );
    wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '9.0.0', true );
    wp_enqueue_script( 'finsweet-js', get_template_directory_uri() . '/assets/js/finsweet-attributes.js', array(), '2.0.0', true );

    // Webflow layout animations script chunks
    wp_enqueue_script( 'allen-institute-staging-chunk', get_template_directory_uri() . '/assets/js/allen-institute-staging.schunk.36b8fb49256177c8.js', array('swiper-js', 'gsap-js'), '1.0.0', true );
    wp_enqueue_script( 'allen-institute-staging-main', get_template_directory_uri() . '/assets/js/allen-institute-staging.c4c75d20.ccb4755a299ac631.js', array('allen-institute-staging-chunk'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'allen_institute_scripts' );

// Include Custom Post Types registration
require get_template_directory() . '/inc/post-types.php';

// Include ACF Fields (Free Version)
require get_template_directory() . '/inc/acf-fields.php';

// Custom Walker for Desktop Menu
class Allen_Desktop_Walker extends Walker_Nav_Menu {
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $output .= '<div class="nav--dropdown w-dropdown">';
        $output .= '<div class="nav--dropdown-toggle w-dropdown-toggle">';
        $output .= '<a href="' . esc_url($item->url) . '" class="nav--link">' . esc_html($item->title) . '</a>';
        $output .= '</div>';
    }
    function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= '</div>';
    }
    function start_lvl( &$output, $depth = 0, $args = null ) {}
    function end_lvl( &$output, $depth = 0, $args = null ) {}
}

// Custom Walker for Mobile Menu
class Allen_Mobile_Walker extends Walker_Nav_Menu {
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $output .= '<a href="' . esc_url($item->url) . '" class="nav--sm-link" style="display:block; padding: 20px; color: white; border-bottom: 1px solid #333;">' . esc_html($item->title) . '</a>';
    }
    function end_el( &$output, $item, $depth = 0, $args = null ) {}
    function start_lvl( &$output, $depth = 0, $args = null ) {}
    function end_lvl( &$output, $depth = 0, $args = null ) {}
}

// ============================================================================
// ADMIN UX: Make WordPress smooth for non-technical users
// ============================================================================

// --- 1. Clean up Dashboard Widgets ---
function allen_remove_dashboard_widgets() {
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );      // Quick Draft
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );          // WordPress News
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );        // More WordPress News
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );       // Activity
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );      // At a Glance
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' ); // Incoming Links
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );        // Plugins
    remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal' );    // Site Health
    remove_action( 'welcome_panel', 'wp_welcome_panel' );                 // Welcome Panel
}
add_action( 'wp_dashboard_setup', 'allen_remove_dashboard_widgets' );

// --- 2. Custom Welcome Dashboard Widget ---
function allen_welcome_dashboard_widget() {
    wp_add_dashboard_widget(
        'allen_welcome_widget',
        '👋 Welcome to the Allen Institute Website Manager',
        'allen_welcome_widget_content'
    );

    // Move our widget to the top
    global $wp_meta_boxes;
    $widget = $wp_meta_boxes['dashboard']['normal']['core']['allen_welcome_widget'];
    unset( $wp_meta_boxes['dashboard']['normal']['core']['allen_welcome_widget'] );
    $wp_meta_boxes['dashboard']['normal']['high']['allen_welcome_widget'] = $widget;
}
function allen_welcome_widget_content() {
    $edit_pages_url = admin_url( 'edit.php?post_type=page' );
    $new_post_url   = admin_url( 'post-new.php' );
    $media_url      = admin_url( 'upload.php' );
    $customize_url  = admin_url( 'customize.php' );
    $menus_url      = admin_url( 'nav-menus.php' );

    echo '<div style="font-size: 14px; line-height: 1.8;">';
    echo '<p>Use the links below to manage your website content:</p>';
    echo '<ul style="list-style: none; padding: 0; margin: 0;">';
    echo '<li style="margin-bottom: 8px;">✏️ <a href="' . esc_url($new_post_url) . '" style="font-weight: 600;">Write a New Blog Post</a></li>';
    echo '<li style="margin-bottom: 8px;">📄 <a href="' . esc_url($edit_pages_url) . '" style="font-weight: 600;">Edit Pages</a> (About, Research, etc.)</li>';
    echo '<li style="margin-bottom: 8px;">🖼️ <a href="' . esc_url($media_url) . '" style="font-weight: 600;">Upload Images & Media</a></li>';
    echo '<li style="margin-bottom: 8px;">🔗 <a href="' . esc_url($menus_url) . '" style="font-weight: 600;">Edit Navigation Menus</a></li>';
    echo '<li style="margin-bottom: 8px;">🎨 <a href="' . esc_url($customize_url) . '" style="font-weight: 600;">Customize Logo, Footer & Socials</a></li>';
    echo '</ul>';
    echo '<hr style="margin: 12px 0;">';
    echo '<p style="color: #666; font-size: 12px;">Need help? Contact your web administrator.</p>';
    echo '</div>';
}
add_action( 'wp_dashboard_setup', 'allen_welcome_dashboard_widget' );

// --- 3. Hide Confusing Admin Menu Items ---
function allen_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );         // Comments
    remove_menu_page( 'tools.php' );                 // Tools
    remove_submenu_page( 'options-general.php', 'options-discussion.php' ); // Discussion settings
}
add_action( 'admin_menu', 'allen_remove_admin_menus', 999 );

// --- 4. Clean Up Admin Bar ---
function allen_clean_admin_bar( $wp_admin_bar ) {
    $wp_admin_bar->remove_node( 'wp-logo' );         // WordPress logo
    $wp_admin_bar->remove_node( 'comments' );         // Comments icon
    $wp_admin_bar->remove_node( 'new-user' );         // New User shortcut
    $wp_admin_bar->remove_node( 'search' );            // Search
}
add_action( 'admin_bar_menu', 'allen_clean_admin_bar', 999 );

// --- 5. Restrict Block Editor to Safe Blocks Only ---
function allen_allowed_block_types( $allowed_blocks, $editor_context ) {
    return array(
        'core/paragraph',
        'core/heading',
        'core/image',
        'core/gallery',
        'core/list',
        'core/list-item',
        'core/quote',
        'core/video',
        'core/buttons',
        'core/button',
        'core/separator',
        'core/spacer',
        'core/embed',
    );
}
add_filter( 'allowed_block_types_all', 'allen_allowed_block_types', 10, 2 );

// --- 6. Disable Comments Entirely ---
function allen_disable_comments_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
    remove_post_type_support( 'post', 'trackbacks' );
    remove_post_type_support( 'page', 'trackbacks' );
}
add_action( 'init', 'allen_disable_comments_support', 100 );

// Close comments on the front-end
add_filter( 'comments_open', '__return_false', 20, 2 );
add_filter( 'pings_open', '__return_false', 20, 2 );

// Hide existing comments
add_filter( 'comments_array', '__return_empty_array', 10, 2 );

// --- 7. Disable XML-RPC (security) ---
add_filter( 'xmlrpc_enabled', '__return_false' );

// --- 8. Limit Post Revisions ---
if ( ! defined( 'WP_POST_REVISIONS' ) ) {
    define( 'WP_POST_REVISIONS', 5 );
}

// --- 9. Remove Tags from Posts (keep Categories only) ---
function allen_remove_tags_taxonomy() {
    unregister_taxonomy_for_object_type( 'post_tag', 'post' );
}
add_action( 'init', 'allen_remove_tags_taxonomy' );

// --- 10. Brand the Login Page ---
function allen_login_styles() {
    $logo_url = esc_url( get_template_directory_uri() . '/assets/images/69c6ccc145cb32aa22a59194_allen-logo-main-reverse.svg' );
    ?>
    <style>
        body.login {
            background-color: #0a0a0a !important;
        }
        #login h1 a {
            background-image: url('<?php echo $logo_url; ?>') !important;
            background-size: contain !important;
            background-repeat: no-repeat !important;
            background-position: center !important;
            width: 100% !important;
            height: 80px !important;
            margin-bottom: 20px !important;
        }
        .login form {
            background: #1a1a1a !important;
            border: 1px solid #333 !important;
            border-radius: 8px !important;
        }
        .login form label {
            color: #ccc !important;
        }
        .login form .input,
        .login form input[type="text"],
        .login form input[type="password"] {
            background: #222 !important;
            border: 1px solid #444 !important;
            color: #fff !important;
            border-radius: 4px !important;
        }
        .login .button-primary {
            background: #00c853 !important;
            border-color: #00c853 !important;
            color: #000 !important;
            border-radius: 4px !important;
            font-weight: 600 !important;
        }
        .login .button-primary:hover {
            background: #00e676 !important;
            border-color: #00e676 !important;
        }
        .login #nav a,
        .login #backtoblog a {
            color: #888 !important;
        }
        .login #nav a:hover,
        .login #backtoblog a:hover {
            color: #00c853 !important;
        }
        .login .privacy-policy-page-link a {
            color: #666 !important;
        }
    </style>
    <?php
}
add_action( 'login_enqueue_scripts', 'allen_login_styles' );

// Change login logo URL to point to site home
function allen_login_url() {
    return home_url( '/' );
}
add_filter( 'login_headerurl', 'allen_login_url' );

// Change login logo hover text
function allen_login_title() {
    return get_bloginfo( 'name' );
}
add_filter( 'login_headertext', 'allen_login_title' );

// --- 11. Hide Screen Options & Help tabs for non-admins ---
function allen_remove_screen_options() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return false;
    }
    return true;
}
add_filter( 'screen_options_show_screen', 'allen_remove_screen_options' );

function allen_remove_help_tabs() {
    $screen = get_current_screen();
    if ( $screen && ! current_user_can( 'manage_options' ) ) {
        $screen->remove_help_tabs();
    }
}
add_action( 'admin_head', 'allen_remove_help_tabs' );

// --- 12. Add helpful admin footer text ---
function allen_admin_footer_text() {
    return '<span style="color: #666;">Allen Institute Website Manager &mdash; Need help? Contact your web administrator.</span>';
}
add_filter( 'admin_footer_text', 'allen_admin_footer_text' );

// Remove WordPress version from footer
add_filter( 'update_footer', '__return_empty_string', 11 );
