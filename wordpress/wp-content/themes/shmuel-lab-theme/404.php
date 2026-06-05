<?php
get_header();
?>

<section class="section">
    <div class="container content-narrow">
        <h1><?php esc_html_e( 'Page not found', 'shmuel-lab' ); ?></h1>
        <p><?php esc_html_e( 'The page you requested could not be found.', 'shmuel-lab' ); ?></p>
        <p><a class="btn" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Return Home', 'shmuel-lab' ); ?></a></p>
    </div>
</section>

<?php
get_footer();
