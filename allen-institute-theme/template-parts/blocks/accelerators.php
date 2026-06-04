<?php
/**
 * Template Part: Accelerators Block
 */

$accelerators_heading = get_field('accelerators_heading') ?: 'science done differently. shared openly.';
$accelerators_subheading = get_field('accelerators_subheading') ?: 'We take on some of the biggest questions in biology at a scale designed to generate knowledge the world can use';
$accelerators_description = get_field('accelerators_description') ?: '<p>The Allen Institute advances discovery through large-scale research initiatives we call <strong>accelerators</strong>, bringing together multidisciplinary teams to understand our brain, our cells, and our immune system.</p><p>Everything we create is built to be shared. By openly releasing our data, tools, and models, we enable scientists around the world to build on our work—speeding discovery and improving human health.</p>';
?>
      <section class="index__036 color-background-black">
        <div class="index__036--wrapper">
          <div class="w-layout-blockcontainer w-container">
            <div class="index__036--logo"><svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 474 470" fill="none" class="index__036--logo-overlay">
                <path d="M354.02 417.003L465.145 174.195C456.71 143.13 442.005 114.607 422.428 90.0625L272.807 417.003H354.028H354.02Z" fill="currentColor"></path>
                <path d="M8.52936 172.685C2.98175 192.569 0 213.512 0 235.153C0 287.349 17.247 335.559 46.3897 374.502C78.8672 367.927 105.946 350.389 125.602 323.287C138.016 357.13 171.686 377.767 219.472 377.767C245.539 377.767 267.094 371.277 282.607 361.43L264.614 293.132C257.788 296.208 251.581 298.052 244.754 298.052C231.101 298.052 223.655 290.668 223.655 277.745V141.149C223.655 81.5693 187.073 41.4098 123.46 29.3259C85.7095 49.7195 54.1972 80.0078 32.454 116.66C46.6094 111.41 60.655 108.538 73.4844 108.538C103.89 108.538 116.924 126.382 116.924 136.229C116.924 144.225 113.197 148.533 100.171 150.997L69.1451 157.149C46.3897 161.48 26.2237 166.628 8.54506 172.669M119.403 269.757C99.5433 289.444 77.8314 299.292 54.2442 299.292C30.6571 299.292 16.3918 288.832 16.3918 268.533C16.3918 243.305 38.7313 229.15 87.7575 219.922C103.89 216.846 115.064 211.307 119.403 207.007V269.765V269.757Z" fill="currentColor"></path>
              </svg>
              <div id="w-node-_1208932d-2e76-741b-34fd-c6a1541a260a-541a260a" data-wf--atom---all-media-types--variant="image-cover" class="atom__media-all--wrapper w-variant-9da8478a-375e-ea1a-2220-9882987384be"><video preload="metadata" autoplay="autoplay" loop="" muted="" playsinline="playsinline" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/background_video_6.mp4" poster="" class="u-full-width w-variant-9da8478a-375e-ea1a-2220-9882987384be"></video></div>
            </div>
            <div class="row">
              <div class="col-lg-8 flex--center flex--vertical">
                <div class="atom-breadcrumb"><span id=""><span class="font-body text-weight-bold">we </span><span class="font-body text-weight-bold text-animation-group"><span data-gntc="add-slash" class="color-text-orange text-animation-item">accelerate</span><span data-gntc="add-slash" class="color-text-purple text-animation-item">develop</span><span data-gntc="add-slash" class="color-text-magenta text-animation-item">catalyze</span><span data-gntc="add-slash" class="color-text-yellow text-animation-item">impact</span></span></span></div>
                <div class="index__036--margin-top1">
                  <h1 class="font-large-3"><?php echo wp_kses_post( str_replace('differently', '<span class="color-text-green">differently</span>', $accelerators_heading) ); ?></h1>
                </div>
                <div class="index__036--margin-top2">
                  <div class="font-large-6"><?php echo esc_html( $accelerators_subheading ); ?></div>
                </div>
                <div class="index__036--margin-top3">
                  <div class="text-rich-text font-body w-richtext">
                    <?php echo wp_kses_post( $accelerators_description ); ?>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="index__036--spacer"></div>
              </div>
            </div>
            <div id="w-node-b299aee7-fd0a-328a-bf50-aa4da6171964-a6171964" data-wf--spacer--variant="xl" class="u-spacer w-variant-a221750b-19b1-3687-41f8-9fba098e6051"></div>
            <div class="row">
              <div class="col-lg-11 col-md-12">
                <h3 data-gntc="add-slash" class="font-large-4 color-text-green">explore our accelerators</h3>
                <div class="w-dyn-list">
                  <div role="list" class="accelerators--collection-list w-dyn-items">
                  <?php
                  $accel_query = new WP_Query(array(
                      'post_type' => 'accelerators',
                      'posts_per_page' => -1,
                      'orderby' => 'menu_order',
                      'order' => 'ASC'
                  ));
                  
                  if ($accel_query->have_posts()) :
                      while ($accel_query->have_posts()) : $accel_query->the_post();
                          $accel_link = get_field('accelerator_link') ?: get_permalink();
                          $accel_icon = get_the_post_thumbnail_url(get_the_ID(), 'full');
                          if (!$accel_icon) {
                              $accel_icon = esc_url( get_template_directory_uri() ) . '/assets/images/69e676da2fc1992ca7a566c6_Allen Web Accelerator Icons-8-brain science.jpg'; // fallback
                          }
                  ?>
                    <div role="listitem" class="w-dyn-item"><a href="<?php echo esc_url($accel_link); ?>" class="atom--icon-card with-link w-inline-block">
                        <div class="atom--icon-card--icon">
                          <div id="w-node-ad5ebde1-5461-c38d-1791-4c195672685f-5672685f" class="image__full-width--wrapper"><img src="<?php echo esc_url($accel_icon); ?>" loading="lazy" alt="" class="u-full-width" /></div>
                        </div>
                        <div>
                          <div class="arrow-link--sm">
                            <div class="hidden-lg visible-sm-block">
                              <div class="arrow-link arrow-only">
                                <div class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 32 32" fill="none" class="icon-arrow">
                                    <path d="M26.7158 15.8135L15.8984 26.6309L14.2158 24.9795L21.8457 17.3506L22.2012 16.9941L4.99707 16.9941V14.6338L22.2012 14.6338L14.2158 6.64746L15.8984 4.99609L26.7158 15.8135Z" fill="currentColor"></path>
                                  </svg><svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 32 32" fill="none" class="icon-arrow-download">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1865 24.7158L5.36914 13.8984L7.02051 12.2158L14.6494 19.8457L15.0059 20.2012L15.0059 3.99707L17.3662 3.99707L17.3662 20.2012L25.3525 12.2158L27.0039 13.8984L16.1865 24.7158Z" fill="currentColor"></path>
                                    <rect x="4.99951" y="29.5" width="2" height="23" transform="rotate(-90 4.99951 29.5)" fill="currentColor"></rect>
                                  </svg></div>
                              </div>
                            </div>
                            <h3 data-gntc="add-slash" class="font-large-5 text-transform-lowercase"><?php the_title(); ?></h3>
                          </div>
                          <div class="u-margin-top--micro">
                            <div><?php echo get_the_excerpt(); ?></div>
                          </div>
                        </div>
                      </a></div>
                  <?php 
                      endwhile; 
                      wp_reset_postdata();
                  else :
                  ?>
                  <!-- STATIC FALLBACK if no CPTs exist yet -->
                    <div role="listitem" class="w-dyn-item"><a href="/brain-science" class="atom--icon-card with-link w-inline-block">
                        <div class="atom--icon-card--icon">
                          <div id="w-node-ad5ebde1-5461-c38d-1791-4c195672685f-5672685f" class="image__full-width--wrapper"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/69e676da2fc1992ca7a566c6_Allen Web Accelerator Icons-8-brain science.jpg" loading="lazy" alt="" class="u-full-width" /></div>
                        </div>
                        <div>
                          <div class="arrow-link--sm">
                            <div class="hidden-lg visible-sm-block">
                              <div class="arrow-link arrow-only">
                                <div class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 32 32" fill="none" class="icon-arrow">
                                    <path d="M26.7158 15.8135L15.8984 26.6309L14.2158 24.9795L21.8457 17.3506L22.2012 16.9941L4.99707 16.9941V14.6338L22.2012 14.6338L14.2158 6.64746L15.8984 4.99609L26.7158 15.8135Z" fill="currentColor"></path>
                                  </svg></div>
                              </div>
                            </div>
                            <h3 data-gntc="add-slash" class="font-large-5 text-transform-lowercase">brain science</h3>
                          </div>
                          <div class="u-margin-top--micro">
                            <div>Mapping every cell, connection, and circuit in the brain—openly shared with the world.</div>
                          </div>
                        </div>
                      </a></div>
                  <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
