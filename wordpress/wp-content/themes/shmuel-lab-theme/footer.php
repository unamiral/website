<?php
/**
 * Site footer with McGill University branding and professional navigation.
 */
?>
</main><!-- #main -->

<footer class="site-footer branding-footer">
    <div class="container footer-content-grid">
        <div class="footer-info">
            <div class="footer-logos">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mcgill-logo.png" alt="McGill University" class="footer-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/neuro-logo.png" alt="The Neuro" class="footer-logo">
            </div>
            <p class="footer-lab-name"><?php esc_html_e( 'Brain Imaging Signals Lab', 'shmuel-lab' ); ?></p>
            <address class="footer-address">
                <?php esc_html_e( 'Montreal Neurological Institute (The Neuro)', 'shmuel-lab' ); ?><br>
                <?php esc_html_e( '3801 University Street', 'shmuel-lab' ); ?><br>
                <?php esc_html_e( 'Montreal, QC H3A 2B4, Canada', 'shmuel-lab' ); ?>
            </address>
        </div>
        
        <nav class="footer-nav-block">
            <h4 class="footer-nav-title"><?php esc_html_e( 'Explore', 'shmuel-lab' ); ?></h4>
            <?php
            // Horizontal footer navigation
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-links',
                    'menu_class'     => 'footer-menu-list horizontal-flex',
                    'container'      => false,
                    'depth'          => 1,
                )
            );
            ?>
        </nav>

        <div class="footer-affiliations">
            <h4 class="footer-nav-title"><?php esc_html_e( 'Affiliations', 'shmuel-lab' ); ?></h4>
            <ul class="affiliation-list">
                <li><a href="https://www.mcgill.ca/bic/"><?php esc_html_e( 'McConnell Brain Imaging Centre', 'shmuel-lab' ); ?></a></li>
                <li><a href="https://www.mcgill.ca/neuro/"><?php esc_html_e( 'The Neuro', 'shmuel-lab' ); ?></a></li>
            </ul>
        </div>
    </div>

    <div class="footer-legal container">
        <div class="legal-flex">
            <p class="copyright">&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php esc_html_e( 'Brain Imaging Signals Lab', 'shmuel-lab' ); ?></p>
            <p class="credits"><?php esc_html_e( 'MRI Imagery by Andrew Keith (CC BY-SA 4.0)', 'shmuel-lab' ); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
