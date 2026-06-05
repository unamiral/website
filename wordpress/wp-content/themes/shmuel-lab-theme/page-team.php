<?php
/**
 * Template Name: Team
 * 
 * Logic:
 * 1. Implement high-legibility typography for academic profiles.
 * 2. Standardized auto-fit responsive grid.
 * 3. Defensive variable checks for meta lookups.
 */

get_header();

$roles = array(
    'Principal Investigator',
    'PhD Candidate',
    'Research Assistant',
    'Collaborating Faculty',
    'Postdoctoral Fellow',
    'Master Student',
    'Alumni'
);
?>

<section class="page-hero compact-hero institutional-header-accent">
    <div class="container">
        <p class="eyebrow McGill-red-text"><?php esc_html_e( 'Our People', 'shmuel-lab' ); ?></p>
        <h1 class="academic-title"><?php esc_html_e( 'Lab Team', 'shmuel-lab' ); ?></h1>
    </div>
</section>

<section class="section section-team-listing">
    <div class="container">
        <?php foreach ( $roles as $role ) : ?>
            <?php
            $team = new WP_Query(
                array(
                    'post_type'      => 'team_member',
                    'posts_per_page' => -1,
                    'meta_key'       => 'member_order',
                    'orderby'        => 'meta_value_num title',
                    'order'          => 'ASC',
                    'meta_query'     => array(
                        array(
                            'key'     => 'member_role',
                            'value'   => $role,
                            'compare' => 'LIKE', // Use LIKE for more flexible matching
                        ),
                    ),
                )
            );
            ?>
            <?php if ( $team->have_posts() ) : ?>
                <div class="team-group-wrap">
                    <h2 class="role-heading McGill-red-border"><?php echo esc_html( $role ); ?></h2>
                    <div class="auto-fit-grid">
                        <?php
                        while ( $team->have_posts() ) :
                            $team->the_post();
                            // Defensive meta lookups
                            $email       = get_post_meta( get_the_ID(), 'member_email', true );
                            $scholar     = get_post_meta( get_the_ID(), 'member_scholar', true );
                            $orcid       = get_post_meta( get_the_ID(), 'member_orcid', true );
                            $bio         = get_post_meta( get_the_ID(), 'member_bio', true );
                            $photo_url   = get_post_meta( get_the_ID(), 'member_photo_url', true );
                            $profile_url = get_post_meta( get_the_ID(), 'member_profile_url', true );
                            
                            // If photo_url is relative, prefix it with site_url
                            if ( ! empty( $photo_url ) && strpos( $photo_url, 'http' ) !== 0 ) {
                                $photo_url = site_url( $photo_url );
                            }
                            // If photo_url is missing, use amir-shmuel.jpg as default for testing
                            if ( empty( $photo_url ) ) {
                                $photo_url = get_template_directory_uri() . '/assets/images/amir-shmuel.jpg';
                            }
                            
                            $initials = '';
                            $words = preg_split( '/\s+/', trim( get_the_title() ) );
                            foreach ( array_slice( $words, 0, 2 ) as $word ) {
                                $initials .= strtoupper( substr( $word, 0, 1 ) );
                            }
                            ?>
                            <article class="member-card-v2 academic-profile">
                                <div class="member-thumb">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail( 'medium' ); ?>
                                    <?php elseif ( ! empty( $photo_url ) ) : ?>
                                        <img src="<?php echo esc_url( $photo_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                                    <?php else : ?>
                                        <div class="thumb-placeholder" aria-hidden="true"><?php echo esc_html( $initials ); ?></div>
                                    <?php endif; ?>
                                </div>
                                
                                <h3 class="member-name"><?php the_title(); ?></h3>
                                <p class="member-role-tag"><?php echo esc_html( $role ); ?></p>
                                
                                <?php if ( ! empty( $bio ) ) : ?>
                                    <div class="member-bio-short">
                                        <p><?php echo esc_html( $bio ); ?></p>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="member-links horizontal-flex">
                                    <?php if ( ! empty( $email ) ) : ?>
                                        <a href="<?php echo esc_url( 'mailto:' . antispambot( $email ) ); ?>" class="icon-link email-link" title="<?php esc_attr_e( 'Email', 'shmuel-lab' ); ?>">@</a>
                                    <?php endif; ?>
                                    <?php if ( ! empty( $scholar ) ) : ?>
                                        <a href="<?php echo esc_url( $scholar ); ?>" target="_blank" rel="noopener" class="text-link-sm"><?php esc_html_e( 'Scholar', 'shmuel-lab' ); ?></a>
                                    <?php endif; ?>
                                    <?php if ( ! empty( $orcid ) ) : ?>
                                        <a href="<?php echo esc_url( 'https://orcid.org/' . $orcid ); ?>" target="_blank" rel="noopener" class="text-link-sm"><?php esc_html_e( 'ORCID', 'shmuel-lab' ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>

<?php
get_footer();
