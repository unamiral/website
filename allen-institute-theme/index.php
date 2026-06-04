<?php
/**
 * The main template file
 */

get_header(); ?>

<main id="primary" class="site-main color-background-black color-text-white" style="padding: 100px 0; min-height: 60vh;">
    <div class="w-layout-blockcontainer w-container">
        <div class="row">
            <div class="col-lg-8">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom: 40px;">
                            <header class="entry-header">
                                <h2 class="entry-title font-large-4"><a href="<?php the_permalink(); ?>" class="color-text-green"><?php the_title(); ?></a></h2>
                                <div class="entry-meta font-caption opacity-66" style="margin-bottom: 15px;">
                                    <?php echo get_the_date(); ?>
                                </div>
                            </header>

                            <div class="entry-content font-body">
                                <?php the_excerpt(); ?>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    the_posts_navigation();
                else :
                    ?>
                    <p><?php esc_html_e( 'No posts found.', 'allen-institute' ); ?></p>
                    <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
