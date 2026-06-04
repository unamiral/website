<?php
/**
 * Template Part: News Slider Block (slider__029)
 * Already dynamic — uses 'slides' CPT with static fallback
 */
?>
      <section class="slider__029">
        <div class="swiper--parent">
          <div class="swiper swiper-click">
            <div gntc-nested-sort-direction="reverse" gntc-nested-sort="list" gntc-nested-sort-id="carousel029" class="swiper-wrapper">
<?php
              $slides_query = new WP_Query( array(
                  'post_type'      => 'slides',
                  'posts_per_page' => -1,
                  'orderby'        => 'date',
                  'order'          => 'DESC'
              ) );
              if ( $slides_query->have_posts() ) :
                  while ( $slides_query->have_posts() ) : $slides_query->the_post();
                      $slide_type = get_post_meta( get_the_ID(), 'slide_type', true );
                      $slide_link = get_post_meta( get_the_ID(), 'slide_link', true );
                      if ( empty( $slide_link ) ) {
                          $slide_link = get_permalink();
                      }
                      $slide_img = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                      if ( empty( $slide_img ) ) {
                          $slide_img = esc_url( get_template_directory_uri() ) . '/assets/images/69f27d8317689239a2df41c5_asset-alleninstitute-placeholder-16x9-03.jpg';
                      }
                      
                      $icon_name = '69d5850cd602e7b0f1310c42_asset-icon-news.svg';
                      if ( $slide_type === 'podcasts' || $slide_type === 'podcast' ) {
                          $icon_name = '69d588502fe5f9b301aa5e03_asset-icon-podcast.svg';
                      }
                      ?>
                      <div data-debug-publish-date="<?php echo esc_attr( get_the_date('F j, Y') ); ?>" gntc-nested-sort="item" role="listitem" class="swiper-slide w-dyn-item">
                        <div class="slide__029--slide-wrapper">
                          <div class="slider__029--content">
                            <div class="section-half--wrapper color-background-off-white _029">
                              <div class="section-half-left full-height _029">
                                <div class="slider_029--content">
                                  <div class="atom__content-block">
                                    <div data-wf--atom---label--variant="base" class="atom-content-label font-caption text-transform-lowercase">
                                      <div class="atom-content-label-wrap">
                                        <div class="icon-sm u-full-width"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/<?php echo esc_attr( $icon_name ); ?>" loading="lazy" alt="" class="u-full-width" /></div>
                                      </div><span><span fs-list-field="Left Label" class="text-weight-bold"><?php echo esc_html( $slide_type ? $slide_type : 'news' ); ?></span></span>
                                    </div>
                                    <div>
                                      <div id="w-node-b299aee7-fd0a-328a-bf50-aa4da6171964-a6171964" data-wf--spacer--variant="xs" class="u-spacer w-variant-642865a4-fbc2-23d0-b0ce-6921dfde0a7c"></div>
                                      <h2 data-gntc="" data-wf--atom---title--variant="font-large-5" class="heading-variants w-variant-7d833646-497f-6fe0-4061-6414fb69f22a"><?php the_title(); ?></h2>
                                    </div>
                                    <div>
                                      <div id="w-node-b299aee7-fd0a-328a-bf50-aa4da6171964-a6171964" data-wf--spacer--variant="s" class="u-spacer w-variant-9fc0629f-b22c-102e-3a81-993ecc70349b"></div>
                                      <div class="font-body"><?php the_excerpt(); ?></div>
                                    </div>
                                  </div>
                                  <div class="slot-add-arrow-links u-margin-top--sm"><a href="<?php echo esc_url( $slide_link ); ?>" class="arrow-link w-inline-block">
                                      <div focusable="false" aria-hidden="true" class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 32 32" fill="none" class="icon-arrow">
                                          <path d="M26.7158 15.8135L15.8984 26.6309L14.2158 24.9795L21.8457 17.3506L22.2012 16.9941L4.99707 16.9941V14.6338L22.2012 14.6338L14.2158 6.64746L15.8984 4.99609L26.7158 15.8135Z" fill="currentColor"></path>
                                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 32 32" fill="none" class="icon-arrow-download">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1865 24.7158L5.36914 13.8984L7.02051 12.2158L14.6494 19.8457L15.0059 20.2012L15.0059 3.99707L17.3662 3.99707L17.3662 20.2012L25.3525 12.2158L27.0039 13.8984L16.1865 24.7158Z" fill="currentColor"></path>
                                          <rect x="4.99951" y="29.5" width="2" height="23" transform="rotate(-90 4.99951 29.5)" fill="currentColor"></rect>
                                        </svg></div>
                                      <div class="font-large-6">read more</div>
                                    </a></div>
                                </div>
                              </div>
                              <div class="section-half-right _029">
                                <div class="u-full-height u-full-width"><img src="<?php echo esc_url( $slide_img ); ?>" loading="lazy" alt="" class="u-image-cover" /></div>
                              </div>
                            </div>
                          </div>
                          <div class="slider__029--background"><img src="<?php echo esc_url( $slide_img ); ?>" loading="lazy" alt="" class="u-image-cover" />
                            <div class="slider__029--scrim"></div>
                          </div>
                          <div gntc-nested-sort="value" class="d-none"><?php echo esc_html( get_the_date('Y-m-d') ); ?></div>
                        </div>
                      </div>
                  <?php endwhile;
                  wp_reset_postdata();
              else :
                  ?>
                  <!-- Static fallback: No slides CPT posts found -->
                  <div class="swiper-slide w-dyn-item">
                    <div class="slide__029--slide-wrapper">
                      <div class="slider__029--content">
                        <div class="section-half--wrapper color-background-off-white _029">
                          <div class="section-half-left full-height _029">
                            <div class="slider_029--content">
                              <div class="atom__content-block">
                                <div data-wf--atom---label--variant="base" class="atom-content-label font-caption text-transform-lowercase">
                                  <div class="atom-content-label-wrap">
                                    <div class="icon-sm u-full-width"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/69d5850cd602e7b0f1310c42_asset-icon-news.svg" loading="lazy" alt="" class="u-full-width" /></div>
                                  </div><span><span fs-list-field="Left Label" class="text-weight-bold">news</span></span>
                                </div>
                                <div>
                                  <div data-wf--spacer--variant="xs" class="u-spacer w-variant-642865a4-fbc2-23d0-b0ce-6921dfde0a7c"></div>
                                  <h2 data-gntc="" data-wf--atom---title--variant="font-large-5" class="heading-variants w-variant-7d833646-497f-6fe0-4061-6414fb69f22a">No slides have been added yet</h2>
                                </div>
                                <div>
                                  <div data-wf--spacer--variant="s" class="u-spacer w-variant-9fc0629f-b22c-102e-3a81-993ecc70349b"></div>
                                  <div class="font-body">Add Carousel Slides in the WordPress admin to populate this section.</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="section-half-right _029">
                            <div class="u-full-height u-full-width"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/69f27d8317689239a2df41c5_asset-alleninstitute-placeholder-16x9-03.jpg" loading="lazy" alt="" class="u-image-cover" /></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php endif; ?></div>
          </div>
          <div class="swipper-pagination--wrapper"><a href="#" class="swiper-prev w-inline-block"></a><a href="#" class="swiper-next w-inline-block"></a></div>
        </div>
      </section>
