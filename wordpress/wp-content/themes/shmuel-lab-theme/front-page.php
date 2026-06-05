<?php
/**
 * Main Front Page Template
 * 
 * Logic:
 * 1. Defensive variable instantiation to prevent PHP notices.
 * 2. Implementation of full-bleed Video Hero background.
 * 3. Responsive auto-fit grid for team/research themes.
 */
get_header();

// --- Defensive Variable Instantiation (Null-Coalescing Logic) ---
$hero_title    = shmuel_get_theme_var( 'hero_title', __( 'Visual Systems Neuroscience & Brain Imaging Signals', 'shmuel-lab' ) );
$hero_subtitle = shmuel_get_theme_var( 'hero_subtitle', __( 'Dr. Amir Shmuel Lab | McGill University', 'shmuel-lab' ) );
$hero_video    = shmuel_get_theme_var( 'hero_video', get_template_directory_uri() . '/assets/videos/hero-mri-brain.webm' );
$pi_bio_short  = shmuel_get_theme_var( 'pi_bio_short', __( 'Dr. Amir Shmuel is a Professor of Neurology and Neurosurgery at McGill University, focusing on the neuronal basis of functional brain imaging.', 'shmuel-lab' ) );
?>

<!-- --- Video Hero Background Component --- -->
<section class="hero-block video-hero-wrap">
    <div class="video-background-container">
        <video class="hero-video-element" autoplay muted loop playsinline preload="auto">
            <?php if ( strpos( $hero_video, '.webm' ) !== false ) : ?>
                <source src="<?php echo esc_url( $hero_video ); ?>" type="video/webm">
            <?php else : ?>
                <source src="<?php echo esc_url( $hero_video ); ?>" type="video/mp4">
            <?php endif; ?>
        </video>
        <div class="video-mask-overlay"></div>
    </div>
    
    <div class="container hero-inner-content">
        <div class="hero-typography">
            <p class="eyebrow McGill-red-text"><?php esc_html_e( 'Brain Imaging Signals Lab', 'shmuel-lab' ); ?></p>
            <h1 class="hero-main-title"><?php echo esc_html( $hero_title ); ?></h1>
            <p class="hero-tagline"><?php echo esc_html( $hero_subtitle ); ?></p>
            <div class="hero-cta-group">
                <a href="<?php echo esc_url( home_url( '/our-research/' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Research Philosophy', 'shmuel-lab' ); ?></a>
                <a href="<?php echo esc_url( home_url( '/publications/' ) ); ?>" class="btn btn-outline-white"><?php esc_html_e( 'Recent Publications', 'shmuel-lab' ); ?></a>
            </div>
        </div>
    </div>
</section>

<!-- --- Principal Investigator Feature --- -->
<section class="section section-pi-feature">
    <div class="container split-feature-grid">
        <div class="feature-media">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/amir-shmuel.jpg" alt="Dr. Amir Shmuel" class="profile-img-large">
        </div>
        <div class="feature-text">
            <p class="eyebrow"><?php esc_html_e( 'Principal Investigator', 'shmuel-lab' ); ?></p>
            <h2 class="branding-title"><?php esc_html_e( 'Dr. Amir Shmuel', 'shmuel-lab' ); ?></h2>
            <p class="pi-bio-text"><?php echo esc_html( $pi_bio_short ); ?></p>
            <a href="<?php echo esc_url( home_url( '/team/' ) ); ?>" class="text-link-arrow"><?php esc_html_e( 'Meet the Team', 'shmuel-lab' ); ?> &rarr;</a>
        </div>
    </div>
</section>

<!-- --- Responsive Dynamic Content Grid (Team Preview) --- -->
<section class="section section-team-preview">
    <div class="container">
        <div class="section-header centered">
            <p class="eyebrow"><?php esc_html_e( 'Collaboration', 'shmuel-lab' ); ?></p>
            <h2 class="section-title"><?php esc_html_e( 'Members & Researchers', 'shmuel-lab' ); ?></h2>
        </div>
        
        <div class="auto-fit-grid">
            <?php
            $team_args = array(
                'post_type'      => 'team_member',
                'posts_per_page' => 4,
                'orderby'        => 'rand'
            );
            $team_preview = new WP_Query( $team_args );
            
            if ( $team_preview->have_posts() ) :
                while ( $team_preview->have_posts() ) : $team_preview->the_post();
                    $role = get_post_meta( get_the_ID(), 'member_role', true );
                    ?>
                    <article class="member-card-v2">
                        <div class="member-thumb">
                            <?php 
                            $photo_url = get_post_meta( get_the_ID(), 'member_photo_url', true );
                            if ( has_post_thumbnail() ) : 
                                the_post_thumbnail( 'medium' ); 
                            elseif ( ! empty( $photo_url ) ) :
                                echo '<img src="' . esc_url( $photo_url ) . '" alt="' . esc_attr( get_the_title() ) . '">';
                            else : 
                                ?>
                                <div class="thumb-placeholder"><?php echo strtoupper( substr( get_the_title(), 0, 1 ) ); ?></div>
                            <?php endif; ?>
                        </div>
                        <h3 class="member-name"><?php the_title(); ?></h3>
                        <p class="member-role-tag"><?php echo esc_html( $role ); ?></p>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        
        <div class="centered-cta-box">
            <a href="<?php echo esc_url( home_url( '/team/' ) ); ?>" class="btn btn-secondary"><?php esc_html_e( 'View All Members', 'shmuel-lab' ); ?></a>
        </div>
    </div>
</section>

<?php
get_footer();
