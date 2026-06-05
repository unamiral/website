<?php
/**
 * Template Name: Our Research Page
 * 
 * Logic:
 * 1. Custom technical layout for research philosophy.
 * 2. Pulling research_area CPT posts into a technical grid.
 */
get_header();
?>

<section class="page-hero high-contrast-technical-hero">
    <div class="container hero-technical-grid">
        <div class="hero-text-block">
            <p class="eyebrow McGill-red-text"><?php esc_html_e( 'Research Philosophy', 'shmuel-lab' ); ?></p>
            <h1 class="academic-title McGill-white"><?php esc_html_e( 'Bridging neurophysiology and functional imaging signals.', 'shmuel-lab' ); ?></h1>
            <p class="academic-description McGill-white-dim"><?php esc_html_e( 'The Brain Imaging Signals Lab investigates the neuronal and vascular mechanisms that underlie functional brain imaging signals. Our multi-scale approach integrates ultra-high-field MRI with direct neurophysiological recordings.', 'shmuel-lab' ); ?></p>
        </div>
        <div class="hero-decorative-accent" aria-hidden="true">
            <div class="scan-line"></div>
        </div>
    </div>
</section>

<section class="section section-technical-map section-charcoal">
    <div class="container">
        <div class="map-inner-wrap high-contrast-border">
            <div class="section-kicker">
                <p class="eyebrow McGill-red-text"><?php esc_html_e( 'Investigation Workflow', 'shmuel-lab' ); ?></p>
                <h2 class="McGill-white"><?php esc_html_e( 'The Signal Processing Chain', 'shmuel-lab' ); ?></h2>
            </div>
            
            <div class="workflow-grid-v2">
                <div class="workflow-step">
                    <span class="step-counter">01</span>
                    <h3 class="step-title McGill-white"><?php esc_html_e( 'Neural Circuits', 'shmuel-lab' ); ?></h3>
                </div>
                <div class="workflow-step">
                    <span class="step-counter">02</span>
                    <h3 class="step-title McGill-white"><?php esc_html_e( 'Hemodynamic Coupling', 'shmuel-lab' ); ?></h3>
                </div>
                <div class="workflow-step">
                    <span class="step-counter">03</span>
                    <h3 class="step-title McGill-white"><?php esc_html_e( 'BOLD Signals', 'shmuel-lab' ); ?></h3>
                </div>
                <div class="workflow-step">
                    <span class="step-counter">04</span>
                    <h3 class="step-title McGill-white"><?php esc_html_e( 'Computational Analysis', 'shmuel-lab' ); ?></h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-header centered">
            <p class="eyebrow"><?php esc_html_e( 'Specializations', 'shmuel-lab' ); ?></p>
            <h2 class="section-title"><?php esc_html_e( 'Research Themes', 'shmuel-lab' ); ?></h2>
        </div>
        
        <div class="auto-fit-grid">
            <?php
            $themes = new WP_Query(array('post_type' => 'research_area', 'posts_per_page' => -1));
            if ( $themes->have_posts() ) : while ( $themes->have_posts() ) : $themes->the_post(); ?>
                <article class="research-theme-card-v2">
                    <div class="card-media">
                        <?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'large' ); else : ?>
                            <div class="pattern-placeholder"></div>
                        <?php endif; ?>
                    </div>
                    <div class="card-content-wrap">
                        <h3 class="theme-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="theme-excerpt-legible">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn-text-link"><?php esc_html_e( 'Read Details', 'shmuel-lab' ); ?> &rarr;</a>
                    </div>
                </article>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </div>
</section>

<?php
get_footer();
