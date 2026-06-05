<?php
get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
    <section class="page-hero compact-hero">
        <div class="container content-narrow">
            <p class="eyebrow"><?php esc_html_e( 'Research Area', 'shmuel-lab' ); ?></p>
            <h1><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="section">
        <article class="container content-narrow entry-content">
            <?php if ( has_post_thumbnail() ) : ?>
                <figure class="featured-media"><?php the_post_thumbnail( 'large' ); ?></figure>
            <?php endif; ?>
            <?php the_content(); ?>
        </article>
    </section>
<?php endwhile; ?>

<?php
get_footer();
