<?php
/**
 * Single Publication Template
 * 
 * Logic:
 * 1. Maintain technical aesthetic with high contrast legibility.
 * 2. Defensive variable handling for PubMed metadata.
 * 3. Unified Lab Branding integration.
 */

get_header();

while ( have_posts() ) :
    the_post();
    
    // Defensive variable lookups (Preventing Undefined Variable Warnings)
    $authors  = get_post_meta( get_the_ID(), 'pub_authors', true );
    $journal  = get_post_meta( get_the_ID(), 'pub_journal', true );
    $year     = get_post_meta( get_the_ID(), 'pub_year', true );
    $doi      = get_post_meta( get_the_ID(), 'pub_doi', true );
    $url      = get_post_meta( get_the_ID(), 'pub_url', true );
    $pmid     = get_post_meta( get_the_ID(), 'pub_pmid', true );
    $abstract = get_post_meta( get_the_ID(), 'pub_abstract', true );
    ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class( 'publication-single-wrap' ); ?>>
        <header class="page-hero high-contrast-technical-hero">
            <div class="container">
                <p class="eyebrow McGill-red-text"><?php esc_html_e( 'Research Output', 'shmuel-lab' ); ?></p>
                <h1 class="publication-main-title"><?php the_title(); ?></h1>
                
                <?php if ( ! empty( $authors ) ) : ?>
                    <p class="publication-author-string">
                        <?php echo wp_kses_post( shmuel_highlight_lab_author( $authors ) ); ?>
                    </p>
                <?php endif; ?>
            </div>
        </header>

        <section class="section section-publication-body">
            <div class="container split-feature-grid">
                <div class="publication-main-content">
                    <?php if ( ! empty( $abstract ) ) : ?>
                        <h2 class="section-subtitle"><?php esc_html_e( 'Abstract', 'shmuel-lab' ); ?></h2>
                        <div class="abstract-text-legible">
                            <?php echo wp_kses_post( wpautop( $abstract ) ); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <aside class="publication-sidebar">
                    <div class="technical-meta-box high-contrast-border">
                        <h3 class="meta-box-title"><?php esc_html_e( 'Metadata', 'shmuel-lab' ); ?></h3>
                        <ul class="meta-list">
                            <?php if ( ! empty( $journal ) ) : ?>
                                <li><strong><?php esc_html_e( 'Journal:', 'shmuel-lab' ); ?></strong> <?php echo esc_html( $journal ); ?></li>
                            <?php endif; ?>
                            <?php if ( ! empty( $year ) ) : ?>
                                <li><strong><?php esc_html_e( 'Year:', 'shmuel-lab' ); ?></strong> <?php echo esc_html( $year ); ?></li>
                            <?php endif; ?>
                            <?php if ( ! empty( $pmid ) ) : ?>
                                <li><strong><?php esc_html_e( 'PMID:', 'shmuel-lab' ); ?></strong> <?php echo esc_html( $pmid ); ?></li>
                            <?php endif; ?>
                            <?php if ( ! empty( $doi ) ) : ?>
                                <li><strong><?php esc_html_e( 'DOI:', 'shmuel-lab' ); ?></strong> <span class="doi-string"><?php echo esc_html( $doi ); ?></span></li>
                            <?php endif; ?>
                        </ul>
                        
                        <?php if ( ! empty( $url ) ) : ?>
                            <div class="meta-actions">
                                <a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener" class="btn btn-primary">
                                    <?php esc_html_e( 'Access Full Text', 'shmuel-lab' ); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </aside>
            </div>
        </section>
    </article>

<?php endwhile; ?>

<?php
get_footer();
