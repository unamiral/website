<?php
/**
 * Template Part: Explore Updates Block
 * Uses the 'updates' CPT
 */

$updates_heading = get_field('updates_heading') ?: 'explore updates';
?>
      <section>
        <div class="w-layout-blockcontainer w-container">
          <div class="row">
            <div class="col-lg-8 col-md-12">
              <h2 data-gntc="add-slash" class="font-large-4"><?php echo esc_html( $updates_heading ); ?></h2>
              <div id="w-node-b299aee7-fd0a-328a-bf50-aa4da6171964-a6171964" data-wf--spacer--variant="m" class="u-spacer w-variant-5a29cea2-3a5b-06c8-d73b-fcd36bc26601"></div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="resource--button desktop-btn"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div gntc-nested-sort-direction="reverse" gntc-nested-sort="list" gntc-nested-sort-id="everything" class="combined-grid six">
<?php
              $updates_query = new WP_Query( array(
                  'post_type'      => 'updates',
                  'posts_per_page' => 6,
                  'orderby'        => 'date',
                  'order'          => 'DESC'
              ) );
              if ( $updates_query->have_posts() ) :
                  while ( $updates_query->have_posts() ) : $updates_query->the_post();
                      $update_link = get_post_meta( get_the_ID(), 'update_link', true );
                      if ( empty( $update_link ) ) {
                          $update_link = get_permalink();
                      }
                      $update_img = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
                      if ( empty( $update_img ) ) {
                          $update_img = esc_url( get_template_directory_uri() ) . '/assets/images/69f27d8317689239a2df41c5_asset-alleninstitute-placeholder-16x9-03.jpg';
                      }
                      
                      // Get update type term details
                      $types = wp_get_post_terms( get_the_ID(), 'update_type' );
                      $type_name = 'news';
                      if ( ! empty( $types ) && ! is_wp_error( $types ) ) {
                          $type_name = $types[0]->slug;
                      }
                      
                      // Map update type to corresponding icon file
                      $icon_file = '69d5850cd602e7b0f1310c42_asset-icon-news.svg';
                      if ( $type_name === 'video' ) {
                          $icon_file = '69e662d3a60383698aa09583_allen-icon-video-dark.svg';
                      } elseif ( $type_name === 'podcasts' || $type_name === 'podcast' || $type_name === 'podcasts' ) {
                          $icon_file = '69d588502fe5f9b301aa5e03_asset-icon-podcast.svg';
                      } elseif ( $type_name === 'science-images' || $type_name === 'science images' ) {
                          $icon_file = '69e662dbdcd1c8e63fac64d7_allen-icon-science-images-dark.svg';
                      } elseif ( $type_name === 'events' || $type_name === 'event' ) {
                          $icon_file = '69e7d8e1f2d7c1d77be2e8cf_6b4db3547ce1dcf300969c5b751d59ca_allen-icon-ticket-dark-free-event.svg';
                      } elseif ( $type_name === 'media' ) {
                          $icon_file = '69dea84a8e792e41b6472cb5_asset-icon-earned-media-black.svg';
                      }
                      ?>
                      <div gntc-nested-sort="item" data-debug-published="<?php echo esc_attr( get_the_date('F j, Y') ); ?>" role="listitem" class="resource-item__collection-item w-dyn-item">
                        <div data-wf--atom---resource-card--variant="16-9-image" class="atom--resource-card">
                          <div class="atom--resource-card--image w-variant-c4bc9341-227e-654d-1f07-03add85b4d0d"><img src="<?php echo esc_url( $update_img ); ?>" loading="lazy" alt="" class="u-image-cover" /></div>
                          <div class="atom--resource-card-content">
                            <div data-wf--atom---label--variant="base" class="atom-content-label font-caption text-transform-lowercase">
                              <div class="atom-content-label-wrap">
                                <div class="icon-sm u-full-width"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/<?php echo esc_attr( $icon_file ); ?>" loading="lazy" alt="" class="u-full-width" /></div>
                              </div><span><span fs-list-field="type" class="text-weight-bold"><?php echo esc_html( $type_name ); ?></span></span>
                            </div>
                            <div fs-list-field="title" class="font-large-6 text-wrap-pretty"><?php the_title(); ?></div>
                            <div>
                              <div fs-list-field="description" class="line-clamp--3-lines"><?php the_excerpt(); ?></div>
                            </div>
                          </div><a href="<?php echo esc_url( $update_link ); ?>" class="link-overlay d-block w-inline-block"></a>
                          <div gntc-nested-sort="value" class="d-none"><?php echo esc_html( get_the_date('Y-m-d') ); ?></div>
                        </div>
                      </div>
                  <?php endwhile;
                  wp_reset_postdata();
              else :
                  // Static Fallback
                  ?>
                <div class="resource-item__collection w-dyn-list">
                  <div role="list" class="collection-list-2 w-dyn-items">
                    <div gntc-nested-sort="item" data-debug-published="June 2, 2026" id="w-node-_5ca89d70-4cc1-1bdf-26fd-523e8919adf9-8919adeb" role="listitem" class="resource-item__collection-item w-dyn-item">
                      <div data-wf--atom---resource-card--variant="16-9-image" class="atom--resource-card">
                        <div class="atom--resource-card--image w-variant-c4bc9341-227e-654d-1f07-03add85b4d0d"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/6a171d7c2ba04773f2c5042f_Brain Health Launch Video Title Card.jpeg" loading="lazy" alt="" class="u-image-cover" /></div>
                        <div class="atom--resource-card-content">
                          <div data-wf--atom---label--variant="base" class="atom-content-label font-caption text-transform-lowercase">
                            <div class="atom-content-label-wrap">
                              <div class="icon-sm u-full-width"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/69e662d3a60383698aa09583_allen-icon-video-dark.svg" loading="lazy" alt="" class="u-full-width" /></div>
                            </div><span><span fs-list-field="type" class="text-weight-bold">video</span></span>
                          </div>
                          <div fs-list-field="title" class="font-large-6 text-wrap-pretty">Brain Health accelerator: a new way to study brain disease to find new treatments for it</div>
                          <div>
                            <div fs-list-field="description" class="line-clamp--3-lines">understanding is hope—a new global research initiative to understanding the cells and circuits that drive brain disease so researchers can find new ways to rescue them. </div>
                          </div>
                        </div><a href="/news/brain-health-accelerator-a-new-way-to-study-brain-disease-to-find-new-treatments-for-it" class="link-overlay d-block w-inline-block"></a>
                        <div gntc-nested-sort="value" class="d-none">2026-06-02</div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?></div>
            </div>
          </div>
        </div>
      </section>
