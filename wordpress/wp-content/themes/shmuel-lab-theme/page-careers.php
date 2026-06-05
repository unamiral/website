<?php
/**
 * Template Name: Careers
 */

get_header();
?>

<section class="page-hero compact-hero">
    <div class="container">
        <p class="eyebrow"><?php esc_html_e( 'Opportunities', 'shmuel-lab' ); ?></p>
        <h1><?php esc_html_e( 'Join our Team', 'shmuel-lab' ); ?></h1>
    </div>
</section>

<section class="section">
    <div class="container content-narrow">
        <div class="entry-content">
            <p><?php esc_html_e( 'The Brain Imaging Signals Lab is always looking for motivated PhD students, postdocs, and research assistants. If you are interested in functional MRI, neurophysiology, or computational neuroscience, please explore our open positions below.', 'shmuel-lab' ); ?></p>
        </div>

        <div class="positions-list" style="margin-top: var(--spacing-xl);">
            <?php
            $positions = new WP_Query(
                array(
                    'post_type'      => 'career',
                    'posts_per_page' => -1,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                )
            );

            if ( $positions->have_posts() ) :
                while ( $positions->have_posts() ) :
                    $positions->the_post();
                    ?>
                    <article class="career-card">
                        <h3><?php the_title(); ?></h3>
                        <div class="career-meta">
                            <?php echo get_the_date(); ?>
                        </div>
                        <div class="career-description">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-sm" style="padding: 8px 20px; font-size: 0.8rem;"><?php esc_html_e( 'Read Details', 'shmuel-lab' ); ?></a>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p class="empty-state"><?php esc_html_e( 'There are no open positions at this time. However, we are always happy to hear from talented individuals. Feel free to reach out!', 'shmuel-lab' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
get_footer();
