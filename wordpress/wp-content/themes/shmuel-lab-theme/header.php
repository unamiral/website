<?php
/**
 * Site header with Unified Lab Branding.
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header institutional-header">
    <div class="container header-inner">
        <div class="site-branding">
            <div class="institutional-logos">
                <a href="https://www.mcgill.ca" target="_blank" rel="noopener" class="logo-mcgill">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mcgill-logo.png" alt="McGill University">
                </a>
                <span class="logo-divider"></span>
                <a href="https://www.mcgill.ca/neuro" target="_blank" rel="noopener" class="logo-neuro">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/neuro-logo.png" alt="The Neuro">
                </a>
            </div>
            <div class="branding-lab">
                <p class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <span class="lab-name"><?php esc_html_e( 'Brain Imaging Signals Lab', 'shmuel-lab' ); ?></span>
                    </a>
                </p>
            </div>
        </div>

        <nav class="main-navigation horizontal-grid-nav" aria-label="<?php esc_attr_e( 'Primary menu', 'shmuel-lab' ); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary-desktop',
                    'menu_class'     => 'primary-menu-list horizontal-flex',
                    'container'      => false,
                    'fallback_cb'    => 'shmuel_default_menu',
                    'depth'          => 1,
                )
            );
            ?>
        </nav>
    </div>
</header>

<main id="main" class="site-main">
