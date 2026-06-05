<?php
get_header();
?>

<section class="section">
    <div class="container content-narrow">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class( 'entry-content' ); ?>>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <h1><?php esc_html_e( 'Nothing found', 'shmuel-lab' ); ?></h1>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
