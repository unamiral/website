<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

<main id="primary" class="site-main color-background-black color-text-white" style="padding: 100px 0; min-height: 60vh;">
    <div class="w-layout-blockcontainer w-container">
        <div class="row">
            <div class="col-lg-10">
                <?php
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h1 class="entry-title font-large-3 color-text-green" style="margin-bottom: 20px;"><?php the_title(); ?></h1>
                            <div class="entry-meta font-caption opacity-66" style="margin-bottom: 40px;">
                                <?php echo get_the_date(); ?> | <?php the_author(); ?>
                            </div>
                        </header>

                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="post-thumbnail" style="margin-bottom: 40px;">
                                <?php the_post_thumbnail('large', ['class' => 'u-full-width']); ?>
                            </div>
                        <?php endif; ?>

                        <div class="entry-content font-body text-rich-text w-richtext">
                            <?php
                            the_content();
                            
                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'allen-institute' ),
                                'after'  => '</div>',
                            ) );
                            ?>
                        </div>
                    </article>
                    <?php
                endwhile;
                ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
