<?php
/**
 * Template Name: Contact
 */

get_header();
?>

<section class="page-hero compact-hero">
    <div class="container">
        <p class="eyebrow"><?php esc_html_e( 'Contact', 'shmuel-lab' ); ?></p>
        <h1><?php esc_html_e( 'Visit or contact the lab.', 'shmuel-lab' ); ?></h1>
    </div>
</section>

<section class="section">
    <div class="container contact-grid">
        <section class="contact-card">
            <p class="eyebrow"><?php esc_html_e( 'Brain Imaging Signals Lab', 'shmuel-lab' ); ?></p>
            <h2><?php esc_html_e( 'Montreal Neurological Institute', 'shmuel-lab' ); ?></h2>
            <p><?php esc_html_e( '3801 University Street, Montreal, QC H3A 2B4, Canada', 'shmuel-lab' ); ?></p>
            <p><strong><?php esc_html_e( 'Principal Investigator:', 'shmuel-lab' ); ?></strong> <?php esc_html_e( 'Amir Shmuel, PhD', 'shmuel-lab' ); ?></p>
            <p><strong><?php esc_html_e( 'Email:', 'shmuel-lab' ); ?></strong> <a href="mailto:amir.shmuel@mcgill.ca">amir.shmuel@mcgill.ca</a></p>
            <p><strong><?php esc_html_e( 'Phone:', 'shmuel-lab' ); ?></strong> <a href="tel:+15143982192">514-398-2192</a></p>
            <p><a class="btn" href="https://www.mcgill.ca/neuro/about/contact"><?php esc_html_e( 'The Neuro Contact Page', 'shmuel-lab' ); ?></a></p>
        </section>

        <aside class="location-panel">
            <div class="map-panel" aria-hidden="true">
                <span></span>
                <strong><?php esc_html_e( 'MNI', 'shmuel-lab' ); ?></strong>
            </div>
            <h2><?php esc_html_e( 'Location', 'shmuel-lab' ); ?></h2>
            <p><?php esc_html_e( 'The lab is part of The Neuro and the McConnell Brain Imaging Centre at McGill University.', 'shmuel-lab' ); ?></p>
            <a class="text-link" href="https://www.google.com/maps/search/?api=1&query=3801%20University%20Street%20Montreal%20QC%20H3A%202B4"><?php esc_html_e( 'Open map', 'shmuel-lab' ); ?></a>
        </aside>
    </div>
</section>

<?php
get_footer();
