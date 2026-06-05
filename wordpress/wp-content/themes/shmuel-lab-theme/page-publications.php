<?php
/**
 * Template Name: Publications
 */

get_header();
?>

<section class="page-hero compact-hero">
    <div class="container">
        <p class="eyebrow"><?php esc_html_e( 'Research Output', 'shmuel-lab' ); ?></p>
        <h1><?php esc_html_e( 'Publications', 'shmuel-lab' ); ?></h1>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php
        $publications = new WP_Query(
            array(
                'post_type'      => 'publication',
                'posts_per_page' => -1,
                'meta_key'       => 'pub_year',
                'orderby'        => 'meta_value_num date',
                'order'          => 'DESC',
            )
        );

        $current_year = null;
        if ( $publications->have_posts() ) :
            while ( $publications->have_posts() ) :
                $publications->the_post();
                $year = (int) get_post_meta( get_the_ID(), 'pub_year', true );
                if ( $year !== $current_year ) :
                    if ( null !== $current_year ) {
                        echo '</div>';
                    }
                    $current_year = $year;
                    echo '<h2 class="publication-year">' . esc_html( $year ? $year : __( 'Undated', 'shmuel-lab' ) ) . '</h2>';
                    echo '<div class="publication-list">';
                endif;
                get_template_part( 'template-parts/publication-card', null, array( 'show_abstract' => true ) );
            endwhile;
            echo '</div>';
            wp_reset_postdata();
        else :
            ?>
            <p class="empty-state"><?php esc_html_e( 'No publications have been synced yet.', 'shmuel-lab' ); ?></p>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
