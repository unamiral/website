<?php
get_header();
?>

<main class="page-wrapper">
    <section class="section-blog-archive" style="padding: 100px 0;">
        <div class="w-container">
            <h1 class="font-large-5" style="margin-bottom: 50px;">
                <?php
                if ( is_category() ) {
                    single_cat_title();
                } else {
                    echo 'Blog & News';
                }
                ?>
            </h1>

            <div class="row">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="col-lg-4 col-md-6" style="margin-bottom: 40px;">
                            <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: inherit; display: block; border: 1px solid #333; height: 100%; border-radius: 8px; overflow: hidden; background: #111;">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div style="height: 200px; background-image: url('<?php echo get_the_post_thumbnail_url(null, 'large'); ?>'); background-size: cover; background-position: center;"></div>
                                <?php else : ?>
                                    <div style="height: 200px; background: #222; display: flex; align-items: center; justify-content: center; color: #555;">No Image</div>
                                <?php endif; ?>
                                <div style="padding: 20px;">
                                    <h3 class="font-body text-weight-bold" style="margin-bottom: 10px;"><?php the_title(); ?></h3>
                                    <p style="font-size: 14px; color: #aaa; margin-bottom: 15px;"><?php echo get_the_date(); ?></p>
                                    <div style="font-size: 14px; color: #ccc;">
                                        <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <div class="col-12">
                        <p>No posts found.</p>
                    </div>
                <?php endif; ?>
            </div>

            <div class="pagination" style="margin-top: 40px; display: flex; justify-content: center; gap: 20px;">
                <?php
                echo paginate_links( array(
                    'prev_text' => '&laquo; Previous',
                    'next_text' => 'Next &raquo;',
                ) );
                ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
