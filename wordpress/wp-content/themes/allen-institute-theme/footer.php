    </main>
    <footer class="component-footer color-background-black">
      <div class="footer--newsletter">
        <div class="row">
          <div class="col-lg-7 color-background-orange">
            <div class="footer--newsletter-tagline">
              <div class="font-large-5">advancing science through open, collaborative research</div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="footer--newsletter-cta"><a href="/newsletter" class="arrow-link w-inline-block">
                <div focusable="false" aria-hidden="true" class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 32 32" fill="none" class="icon-arrow">
                    <path d="M26.7158 15.8135L15.8984 26.6309L14.2158 24.9795L21.8457 17.3506L22.2012 16.9941L4.99707 16.9941V14.6338L22.2012 14.6338L14.2158 6.64746L15.8984 4.99609L26.7158 15.8135Z" fill="currentColor"></path>
                  </svg><svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 32 32" fill="none" class="icon-arrow-download">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1865 24.7158L5.36914 13.8984L7.02051 12.2158L14.6494 19.8457L15.0059 20.2012L15.0059 3.99707L17.3662 3.99707L17.3662 20.2012L25.3525 12.2158L27.0039 13.8984L16.1865 24.7158Z" fill="currentColor"></path>
                    <rect x="4.99951" y="29.5" width="2" height="23" transform="rotate(-90 4.99951 29.5)" fill="currentColor"></rect>
                  </svg></div>
                <div class="font-large-6"><strong>Get the allen institute newsletter</strong></div>
              </a>
              <div>Stay informed on the latest breakthroughs in neuroscience, bioscience, and AI-driven research. </div>
            </div>
          </div>
        </div>
      </div>
      <div class="w-container">
        <div class="row">
          <div class="col-lg-2 col-md-3"><a aria-label="Go Home" href="/" aria-current="page" class="footer--logo-link w-inline-block w--current">
              <div class="footer--logo">
                <div class="d-sm-none">
                  <div id="w-node-ad5ebde1-5461-c38d-1791-4c195672685f-5672685f" class="image__full-width--wrapper"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/69c1a5cda07583bb63f52daf_5f502bc8d2ac0e3528cc992f69572582_asset-logo-footer-vertical.svg" loading="lazy" alt="" class="u-full-width" /></div>
                </div>
                <div class="d-lg-none d-sm-block">
                  <div id="w-node-ad5ebde1-5461-c38d-1791-4c195672685f-5672685f" class="image__full-width--wrapper"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/69d6b009efcafa851c807e29_asset-footer-logo.svg" loading="lazy" alt="" class="u-full-width" /></div>
                </div>
              </div>
            </a></div>
          <div class="col-lg-9 col-md-9">
            <div class="footer-links-col">
              <?php
              wp_nav_menu( array(
                  'theme_location' => 'footer-links',
                  'container'      => false,
                  'menu_class'     => 'footer-links-wrapper',
                  'fallback_cb'    => false,
              ) );
              ?>
            </div>
          </div>
        </div>
        <div class="footer--social-contact-container">
          <div class="w-container">
            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="footer--social-media">
                  <div class="font-body text-weight-bold">follow us/</div>
                  <div class="footer--social-wrapper">
                    <?php if ( get_theme_mod('social_linkedin') ) : ?><a aria-label="Follow Allen Institute on LinkedIn." href="<?php echo esc_url(get_theme_mod('social_linkedin')); ?>" target="_blank" class="sprite-social linkedin light w-inline-block"></a><?php endif; ?>
                    <?php if ( get_theme_mod('social_facebook') ) : ?><a aria-label="Follow Allen Institute on Facebook." href="<?php echo esc_url(get_theme_mod('social_facebook')); ?>" target="_blank" class="sprite-social facebook light w-inline-block"></a><?php endif; ?>
                    <?php if ( get_theme_mod('social_instagram') ) : ?><a aria-label="Follow Allen Institute on Instagram." href="<?php echo esc_url(get_theme_mod('social_instagram')); ?>" target="_blank" class="sprite-social instagram light w-inline-block"></a><?php endif; ?>
                    <?php if ( get_theme_mod('social_twitter') ) : ?><a aria-label="Follow Allen Institute on X." href="<?php echo esc_url(get_theme_mod('social_twitter')); ?>" target="_blank" class="sprite-social x-fka-twitter light w-inline-block"></a><?php endif; ?>
                    <?php if ( get_theme_mod('social_youtube') ) : ?><a aria-label="Follow Allen Institute on Youtube." href="<?php echo esc_url(get_theme_mod('social_youtube')); ?>" target="_blank" class="sprite-social youtube light w-inline-block"></a><?php endif; ?>
                    <?php if ( get_theme_mod('social_bluesky') ) : ?><a aria-label="Follow Allen Institute on Bluesky." href="<?php echo esc_url(get_theme_mod('social_bluesky')); ?>" target="_blank" class="sprite-social bluesky light w-inline-block"></a><?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="footer-allen-address w-richtext">
                  <p><?php echo nl2br( esc_html( get_theme_mod('footer_address', 'allen institute, 615 Westlake Ave North, Seattle, WA 98109 +12065487055') ) ); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="legal--wrapper">
        <div class="w-container">
          <div class="row">
            <div class="col-lg-4 col-md-12">
              <div class="legal--flex">
                <div><?php echo esc_html( get_theme_mod('footer_copyright', '© ' . date('Y') . ' allen institute. all rights reserved.') ); ?></div>
              </div>
            </div>
            <div class="col-lg-8 col-md-12">
              <div class="legal--links-wrapper"><a href="/legal/privacy" data-gntc="add-space-slash" class="footer--link">privacy policy</a><a href="/legal/terms-of-use" data-gntc="add-space-slash" class="footer--link">terms of use</a><a href="/legal/citation-policy" data-gntc="add-space-slash" class="footer--link">citation policy</a><a href="https://alleninstitute.sharepoint.com/" data-gntc="add-space-slash" target="_blank" class="footer--link">employee portal</a><a href="/legal/policy-and-compliance" data-gntc="add-space-slash" class="footer--link">policy &amp; compliance</a><a href="#" id="ot-sdk-btn" data-gntc="add-space-slash" class="footer--link ot-sdk-show-settings text-transform-lowercase">cookie settings</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="gntc-custom-code-wrapper">
        <div class="gntc-style-1 w-embed">
          <style>
            :root {
              /* All color and font variables set in the webflow variables panel */
              --ease-out-quad: cubic-bezier(0.25, 0.46, 0.45, 0.94);
              --ease-in-out-quad: cubic-bezier(0.455, 0.03, 0.515, 0.955);

              /*
       * Custom Grid Settings
       */
              --gutter-sm: 4.69dvw;

              --gutter-lg: 0.625rem;
              --margin-lg: calc(var(--gutter-lg) * -1);
              --container-padding-sm: 3.75dvw;

              --margin-sm: calc(var(--container-padding-sm) * -1);

              /*
       * Custom Breakpoints
       */
              --breakpoint-xs: 0rem;
              /* Bootstrap 5 = 0px    (phone portrait)  */
              --breakpoint-sm: 36rem;
              /* Bootstrap 5 = 576px  (phone landscape) */
              --breakpoint-md: 47.9375rem;
              /* Bootstrap 5 = 767px  (tablet)          */
              --breakpoint-lg: 61.9375rem;
              /* Bootstrap 5 = 991px  (desktop)         */
              --breakpoint-xl: 75rem;
              /* 1200px                                 */
              --breakpoint-xxl: 90rem;
              /* Bootstrap 5 = 1440px (even larger)     */

              /*
       * Custom Container Sizes
       */
              --container-xs: 100%;
              /* Bootstrap 5 = 100%  */
              --container-sm: 100%;
              /* Bootstrap 5 = 540px */
              --container-md: 45rem;
              /* Bootstrap 5 = 720px */
              --container-lg: 60rem;
              /* Bootstrap 5 = 960px */
              --container-xl: 71.25rem;
              /* Bootstrap 5 = 1140px */
              --container-xxl: 86.25rem;
              /* Bootstrap 5 = 1380px */

              /*
       * Spacing between rich text components
       */
              --rich-text-margin-top-xs: 7.5dvw;
              --rich-text-margin-top-md: 1.25rem;
              --rich-text-margin-top-lg: 3rem;
            }

            /******************************************************************************
   * Webflow overrides, DO NOT MESS WITH THIS
   *
   * Go ahead and edit anything under "GNTC_WF_OVERRIDES_END" down below.
   *****************************************************************************/

            .w-container {
              max-width: var(--container-lg);
            }

            .grid {
              /* choosing not to override .w-layout-grid */
              margin-left: calc(var(--margin-lg) + var(--gutter-lg));
              margin-right: calc(var(--margin-lg) + var(--gutter-lg));
            }

            .w-form {
              margin-bottom: 0;
            }

            .w-input {
              height: auto;
            }

            /* ============================================
   * 12-Column Grid System
   * Desktop-first: lg is the default (no media query)
   * Cascades DOWN from lg for md
   * Resets to 100% at sm and xs unless explicitly set
   * Cascades UP from lg for xl
   * ============================================ */

            /* Row — custom and Webflow built-in */
            .w-container .w-row,
            .row {
              margin-left: var(--margin-lg);
              margin-right: var(--margin-lg);
            }

            .row {
              display: flex;
              flex-wrap: wrap;
            }

            /* Column base — custom and Webflow built-in */
            .w-col,
            .w-col .w-col,
            .col,
            [class^='col-'],
            [class*=' col-'] {
              padding-left: var(--gutter-lg);
              padding-right: var(--gutter-lg);
            }

            .col,
            [class^='col-'],
            [class*=' col-'] {
              position: relative;
              width: 100%;
              box-sizing: border-box;
            }

            /* Auto-sizing column */
            .col {
              flex: 1 0 0%;
              max-width: 100%;
            }

            /* lg — default, no media query */
            .col-lg-1 {
              flex: 0 0 8.333333%;
              max-width: 8.333333%;
            }

            .col-lg-2 {
              flex: 0 0 16.666667%;
              max-width: 16.666667%;
            }

            .col-lg-3 {
              flex: 0 0 25%;
              max-width: 25%;
            }

            .col-lg-4 {
              flex: 0 0 33.333333%;
              max-width: 33.333333%;
            }

            .col-lg-5 {
              flex: 0 0 41.666667%;
              max-width: 41.666667%;
            }

            .col-lg-6 {
              flex: 0 0 50%;
              max-width: 50%;
            }

            .col-lg-7 {
              flex: 0 0 58.333333%;
              max-width: 58.333333%;
            }

            .col-lg-8 {
              flex: 0 0 66.666667%;
              max-width: 66.666667%;
            }

            .col-lg-9 {
              flex: 0 0 75%;
              max-width: 75%;
            }

            .col-lg-10 {
              flex: 0 0 83.333333%;
              max-width: 83.333333%;
            }

            .col-lg-11 {
              flex: 0 0 91.666667%;
              max-width: 91.666667%;
            }

            .col-lg-12 {
              flex: 0 0 100%;
              max-width: 100%;
            }

            .col-lg-offset-0 {
              margin-left: 0;
            }

            .col-lg-offset-1 {
              margin-left: 8.333333%;
            }

            .col-lg-offset-2 {
              margin-left: 16.666667%;
            }

            .col-lg-offset-3 {
              margin-left: 25%;
            }

            .col-lg-offset-4 {
              margin-left: 33.333333%;
            }

            .col-lg-offset-5 {
              margin-left: 41.666667%;
            }

            .col-lg-offset-6 {
              margin-left: 50%;
            }

            .col-lg-offset-7 {
              margin-left: 58.333333%;
            }

            .col-lg-offset-8 {
              margin-left: 66.666667%;
            }

            .col-lg-offset-9 {
              margin-left: 75%;
            }

            .col-lg-offset-10 {
              margin-left: 83.333333%;
            }

            .col-lg-offset-11 {
              margin-left: 91.666667%;
            }

            /* end lg */

            /*
   *
   * Above Webflow's "desktop" — smallest to largest
   *
   */

            /* xl — 75rem / 1200px */
            @media (min-width: 75rem) {
              .w-container {
                max-width: var(--container-xl);
              }

              .col-xl-1 {
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
              }

              .col-xl-2 {
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
              }

              .col-xl-3 {
                flex: 0 0 25%;
                max-width: 25%;
              }

              .col-xl-4 {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
              }

              .col-xl-5 {
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
              }

              .col-xl-6 {
                flex: 0 0 50%;
                max-width: 50%;
              }

              .col-xl-7 {
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
              }

              .col-xl-8 {
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
              }

              .col-xl-9 {
                flex: 0 0 75%;
                max-width: 75%;
              }

              .col-xl-10 {
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
              }

              .col-xl-11 {
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
              }

              .col-xl-12 {
                flex: 0 0 100%;
                max-width: 100%;
              }

              .col-xl-offset-0 {
                margin-left: 0;
              }

              .col-xl-offset-1 {
                margin-left: 8.333333%;
              }

              .col-xl-offset-2 {
                margin-left: 16.666667%;
              }

              .col-xl-offset-3 {
                margin-left: 25%;
              }

              .col-xl-offset-4 {
                margin-left: 33.333333%;
              }

              .col-xl-offset-5 {
                margin-left: 41.666667%;
              }

              .col-xl-offset-6 {
                margin-left: 50%;
              }

              .col-xl-offset-7 {
                margin-left: 58.333333%;
              }

              .col-xl-offset-8 {
                margin-left: 66.666667%;
              }

              .col-xl-offset-9 {
                margin-left: 75%;
              }

              .col-xl-offset-10 {
                margin-left: 83.333333%;
              }

              .col-xl-offset-11 {
                margin-left: 91.666667%;
              }
            }

            /* end xl */

            /* xxl — --breakpoint-xxl */
            @media screen and (min-width: 90rem) {
              .w-container {
                max-width: var(--container-xxl);
              }
            }

            /* end xxl */

            /* xxxl (commented out for now) */
            /*
  @media screen and (min-width: 125rem) {
      .w-container {
          max-width: var(--container-xxxl);
      }
  }
  */
            /* end xxxl */

            /*
   *
   * Below Webflow's "desktop" — largest to smallest
   *
   */

            /* md — iPad portrait, --breakpoint-lg */
            @media screen and (max-width: 61.9375rem) {
              .w-container {
                max-width: var(--container-md);
              }

              .col-md-1 {
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
              }

              .col-md-2 {
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
              }

              .col-md-3 {
                flex: 0 0 25%;
                max-width: 25%;
              }

              .col-md-4 {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
              }

              .col-md-5 {
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
              }

              .col-md-6 {
                flex: 0 0 50%;
                max-width: 50%;
              }

              .col-md-7 {
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
              }

              .col-md-8 {
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
              }

              .col-md-9 {
                flex: 0 0 75%;
                max-width: 75%;
              }

              .col-md-10 {
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
              }

              .col-md-11 {
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
              }

              .col-md-12 {
                flex: 0 0 100%;
                max-width: 100%;
              }

              .col-md-offset-0 {
                margin-left: 0;
              }

              .col-md-offset-1 {
                margin-left: 8.333333%;
              }

              .col-md-offset-2 {
                margin-left: 16.666667%;
              }

              .col-md-offset-3 {
                margin-left: 25%;
              }

              .col-md-offset-4 {
                margin-left: 33.333333%;
              }

              .col-md-offset-5 {
                margin-left: 41.666667%;
              }

              .col-md-offset-6 {
                margin-left: 50%;
              }

              .col-md-offset-7 {
                margin-left: 58.333333%;
              }

              .col-md-offset-8 {
                margin-left: 66.666667%;
              }

              .col-md-offset-9 {
                margin-left: 75%;
              }

              .col-md-offset-10 {
                margin-left: 83.333333%;
              }

              .col-md-offset-11 {
                margin-left: 91.666667%;
              }
            }

            /* end md */

            /* sm — phone, --breakpoint-md, switches to responsive gutters */
            @media screen and (max-width: 47.9375rem) {
              .w-container {
                max-width: var(--container-sm);
                padding-left: var(--container-padding-sm);
                padding-right: var(--container-padding-sm);
              }

              .grid {
                margin-left: calc(var(--margin-sm) + var(--gutter-sm));
                margin-right: calc(var(--margin-sm) + var(--gutter-sm));
              }

              .w-row,
              .w-container .w-row,
              .row {
                margin-left: var(--margin-sm);
                margin-right: var(--margin-sm);
              }

              .w-col,
              .w-col .w-col,
              .col,
              [class^='col-'],
              [class*=' col-'] {
                padding-left: var(--gutter-sm);
                padding-right: var(--gutter-sm);
              }

              /* Reset lg, xl, md columns to full width at mobile */
              .col,
              .col-lg-1,
              .col-lg-2,
              .col-lg-3,
              .col-lg-4,
              .col-lg-5,
              .col-lg-6,
              .col-lg-7,
              .col-lg-8,
              .col-lg-9,
              .col-lg-10,
              .col-lg-11,
              .col-lg-12,
              .col-xl-1,
              .col-xl-2,
              .col-xl-3,
              .col-xl-4,
              .col-xl-5,
              .col-xl-6,
              .col-xl-7,
              .col-xl-8,
              .col-xl-9,
              .col-xl-10,
              .col-xl-11,
              .col-xl-12,
              .col-md-1,
              .col-md-2,
              .col-md-3,
              .col-md-4,
              .col-md-5,
              .col-md-6,
              .col-md-7,
              .col-md-8,
              .col-md-9,
              .col-md-10,
              .col-md-11,
              .col-md-12 {
                flex: 0 0 100%;
                max-width: 100%;
              }

              /* Reset lg, xl, md offsets at mobile */
              .col-lg-offset-1,
              .col-lg-offset-2,
              .col-lg-offset-3,
              .col-lg-offset-4,
              .col-lg-offset-5,
              .col-lg-offset-6,
              .col-lg-offset-7,
              .col-lg-offset-8,
              .col-lg-offset-9,
              .col-lg-offset-10,
              .col-lg-offset-11,
              .col-xl-offset-1,
              .col-xl-offset-2,
              .col-xl-offset-3,
              .col-xl-offset-4,
              .col-xl-offset-5,
              .col-xl-offset-6,
              .col-xl-offset-7,
              .col-xl-offset-8,
              .col-xl-offset-9,
              .col-xl-offset-10,
              .col-xl-offset-11,
              .col-md-offset-1,
              .col-md-offset-2,
              .col-md-offset-3,
              .col-md-offset-4,
              .col-md-offset-5,
              .col-md-offset-6,
              .col-md-offset-7,
              .col-md-offset-8,
              .col-md-offset-9,
              .col-md-offset-10,
              .col-md-offset-11 {
                margin-left: 0;
              }

              .col-sm-1 {
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
              }

              .col-sm-2 {
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
              }

              .col-sm-3 {
                flex: 0 0 25%;
                max-width: 25%;
              }

              .col-sm-4 {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
              }

              .col-sm-5 {
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
              }

              .col-sm-6 {
                flex: 0 0 50%;
                max-width: 50%;
              }

              .col-sm-7 {
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
              }

              .col-sm-8 {
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
              }

              .col-sm-9 {
                flex: 0 0 75%;
                max-width: 75%;
              }

              .col-sm-10 {
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
              }

              .col-sm-11 {
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
              }

              .col-sm-12 {
                flex: 0 0 100%;
                max-width: 100%;
              }

              .col-sm-offset-0 {
                margin-left: 0;
              }

              .col-sm-offset-1 {
                margin-left: 8.333333%;
              }

              .col-sm-offset-2 {
                margin-left: 16.666667%;
              }

              .col-sm-offset-3 {
                margin-left: 25%;
              }

              .col-sm-offset-4 {
                margin-left: 33.333333%;
              }

              .col-sm-offset-5 {
                margin-left: 41.666667%;
              }

              .col-sm-offset-6 {
                margin-left: 50%;
              }

              .col-sm-offset-7 {
                margin-left: 58.333333%;
              }

              .col-sm-offset-8 {
                margin-left: 66.666667%;
              }

              .col-sm-offset-9 {
                margin-left: 75%;
              }

              .col-sm-offset-10 {
                margin-left: 83.333333%;
              }

              .col-sm-offset-11 {
                margin-left: 91.666667%;
              }
            }

            /* end sm */

            /* xs — small phone */
            @media (max-width: 479px) {
              .col-xs-1 {
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
              }

              .col-xs-2 {
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
              }

              .col-xs-3 {
                flex: 0 0 25%;
                max-width: 25%;
              }

              .col-xs-4 {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
              }

              .col-xs-5 {
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
              }

              .col-xs-6 {
                flex: 0 0 50%;
                max-width: 50%;
              }

              .col-xs-7 {
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
              }

              .col-xs-8 {
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
              }

              .col-xs-9 {
                flex: 0 0 75%;
                max-width: 75%;
              }

              .col-xs-10 {
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
              }

              .col-xs-11 {
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
              }

              .col-xs-12 {
                flex: 0 0 100%;
                max-width: 100%;
              }

              .col-xs-offset-0 {
                margin-left: 0;
              }

              .col-xs-offset-1 {
                margin-left: 8.333333%;
              }

              .col-xs-offset-2 {
                margin-left: 16.666667%;
              }

              .col-xs-offset-3 {
                margin-left: 25%;
              }

              .col-xs-offset-4 {
                margin-left: 33.333333%;
              }

              .col-xs-offset-5 {
                margin-left: 41.666667%;
              }

              .col-xs-offset-6 {
                margin-left: 50%;
              }

              .col-xs-offset-7 {
                margin-left: 58.333333%;
              }

              .col-xs-offset-8 {
                margin-left: 66.666667%;
              }

              .col-xs-offset-9 {
                margin-left: 75%;
              }

              .col-xs-offset-10 {
                margin-left: 83.333333%;
              }

              .col-xs-offset-11 {
                margin-left: 91.666667%;
              }
            }

            /* end xs */

            /* ============================================
   * End 12-Column Grid System
   * ============================================ */

            /******************************************************************************
   * End of Webflow overrides
   *
   * It's safe to edit below. GNTC_WF_OVERRIDES_END
   *****************************************************************************/

            /*
   * Color Combination Rules
   * Innermost ancestor with a color-background wins via inheritance.
   */

            /* Default — text: black, arrow: orange */

            .arrow-link .arrow {
              background-color: var(--_styling---orange);
            }

            /* End Default */

            /* Black — text: white, arrow: orange */

            [data-wf--section--variant^='bla' i] {
              background-color: var(--_styling---black);
            }

            [class*='color-background-black'],
            [data-color-background='black'],
            [data-wf--section--variant^='bla' i] {
              color: var(--_styling---white);
            }

            [class*='color-background-black'] .arrow-link .arrow,
            [data-color-background='black'] .arrow-link .arrow,
            [data-wf--section--variant^='bla' i] .arrow-link .arrow {
              background-color: var(--_styling---orange);
            }

            [class*='color-background-black'] p a,
            [data-color-background='black'] p a,
            [data-wf--section--variant^='bla' i] p a {
              color: var(--_styling---green);
              text-decoration: underline;
            }

            /* End Black */

            /* White — text: black, arrow: orange */
            [class*='color-background-white'],
            [data-color-background='white'] {
              color: var(--_styling---black);
            }

            [class*='color-background-white'] .arrow-link .arrow,
            [data-color-background='white'] .arrow-link .arrow {
              background-color: var(--_styling---orange);
            }

            [class*='color-background-white'] p a,
            [data-color-background='white'] p a {
              color: var(--_styling---purple);
              text-decoration: underline;
            }

            /* End White */

            /* Off White — text: black, arrow: orange */
            [class*='color-background-off-white'],
            [data-color-background='off-white'] {
              color: var(--_styling---black);
            }

            [class*='color-background-off-white'] .arrow-link .arrow,
            [data-color-background='off-white'] .arrow-link .arrow {
              background-color: var(--_styling---orange);
            }

            [class*='color-background-off-white'] p a,
            [data-color-background='off-white'] p a {
              color: var(--_styling---purple);
              text-decoration: underline;
            }

            /* End Off White */

            /* Blue — text: white, arrow: orange */
            [class*='color-background-blue'],
            [data-color-background='blue'] {
              color: var(--_styling---white);
            }

            [class*='color-background-blue'] .arrow-link .arrow,
            [data-color-background='blue'] .arrow-link .arrow {
              background-color: var(--_styling---orange);
            }

            [class*='color-background-blue'] p a,
            [data-color-background='blue'] p a {
              color: currentColor;
              text-decoration: underline;
            }

            /* End Blue */

            /* Purple — text: white, arrow: orange */
            [data-wf--section--variant^='pu' i] {
              background-color: var(--_styling---purple);
            }

            [class*='color-background-purple'],
            [data-color-background='purple'],
            [data-wf--section--variant^='pu' i] {
              color: var(--_styling---white);
            }

            [class*='color-background-purple'] .arrow-link .arrow,
            [data-color-background='purple'] .arrow-link .arrow,
            [data-wf--section--variant^='pu' i] .arrow-link .arrow {
              background-color: var(--_styling---orange);
            }

            [class*='color-background-purple'] p a,
            [data-color-background='purple'] p a,
            [data-wf--section--variant^='pu' i] p a {
              color: currentColor;
              text-decoration: underline;
            }

            /* End Purple */

            /* Teal — text: black, arrow: orange */
            [data-wf--section--variant^='t' i] {
              background-color: var(--_styling---teal);
            }

            [class*='color-background-teal'],
            [data-color-background='teal'],
            [data-wf--section--variant^='t' i] {
              color: var(--_styling---black);
            }

            [class*='color-background-teal'] .arrow-link .arrow,
            [data-color-background='teal'] .arrow-link .arrow,
            [data-wf--section--variant^='t' i] .arrow-link .arrow {
              background-color: var(--_styling---orange);
            }

            [class*='color-background-teal'] p a,
            [data-color-background='teal'] p a,
            [data-wf--section--variant^='t' i] p a {
              color: currentColor;
              text-decoration: underline;
            }

            /* End Teal */

            /* Green — text: black, arrow: orange */
            [data-wf--section--variant^='gr' i] {
              background-color: var(--_styling---green);
            }

            [class*='color-background-green'],
            [data-color-background='green'],
            [data-wf--section--variant^='gr' i] {
              color: var(--_styling---black);
            }

            [class*='color-background-green'] .arrow-link .arrow,
            [data-color-background='green'] .arrow-link .arrow,
            [data-wf--section--variant^='gr' i] .arrow-link .arrow {
              background-color: var(--_styling---orange);
            }

            [class*='color-background-green'] p a,
            [data-color-background='green'] p a,
            [data-wf--section--variant^='gr' i] p a {
              color: currentColor;
              text-decoration: underline;
            }

            /* End Green */

            /* Yellow — text: black, arrow: orange */
            [data-wf--section--variant^='y' i] {
              background-color: var(--_styling---yellow);
            }

            [class*='color-background-yellow'],
            [data-color-background='yellow'],
            [data-wf--section--variant^='y' i] {
              color: var(--_styling---black);
            }

            [class*='color-background-yellow'] .arrow-link .arrow,
            [data-color-background='yellow'] .arrow-link .arrow,
            [data-wf--section--variant^='y' i] .arrow-link .arrow {
              background-color: var(--_styling---orange);
            }

            [class*='color-background-yellow'] p a,
            [data-color-background='yellow'] p a,
            [data-wf--section--variant^='y' i] p a {
              color: currentColor;
              text-decoration: underline;
            }

            /* End Yellow */

            /* Gold — text: black, arrow: white */
            [data-wf--section--variant^='go' i] {
              background-color: var(--_styling---gold);
            }

            [class*='color-background-gold'],
            [data-color-background='gold'],
            [data-wf--section--variant^='go' i] {
              color: var(--_styling---black);
            }

            [class*='color-background-gold'] .arrow-link .arrow,
            [data-color-background='gold'] .arrow-link .arrow,
            [data-wf--section--variant^='go' i] .arrow-link .arrow {
              background-color: var(--_styling---white);
            }

            [class*='color-background-gold'] p a,
            [data-color-background='gold'] p a,
            [data-wf--section--variant^='go' i] p a {
              color: currentColor;
              text-decoration: underline;
            }

            /* End Gold */

            /* Orange — text: black, arrow: white */
            [data-wf--section--variant^='or' i] {
              background-color: var(--_styling---orange);
            }

            [class*='color-background-orange'],
            [data-color-background='orange'],
            [data-wf--section--variant^='or' i] {
              color: var(--_styling---black);
            }

            [class*='color-background-orange'] .arrow-link .arrow,
            [data-color-background='orange'] .arrow-link .arrow,
            [data-wf--section--variant^='or' i] .arrow-link .arrow {
              background-color: var(--_styling---white);
            }

            [class*='color-background-orange'] p a,
            [data-color-background='orange'] p a,
            [data-wf--section--variant^='or' i] p a {
              color: currentColor;
              text-decoration: underline;
            }

            /* End Orange */

            /* Magenta — text: black, arrow: white */
            [data-wf--section--variant^='m' i] {
              background-color: var(--_styling---magenta);
            }

            [class*='color-background-magenta'],
            [data-color-background='magenta'],
            [data-wf--section--variant^='m' i] {
              color: var(--_styling---black);
            }

            [class*='color-background-magenta'] .arrow-link .arrow,
            [data-color-background='magenta'] .arrow-link .arrow,
            [data-wf--section--variant^='m' i] .arrow-link .arrow {
              background-color: var(--_styling---white);
            }

            [class*='color-background-magenta'] p a,
            [data-color-background='magenta'] p a,
            [data-wf--section--variant^='m' i] p a {
              color: currentColor;
              text-decoration: underline;
            }

            /* End Magenta */

            /* Crimson — text: white, arrow: orange */
            [data-wf--section--variant^='cri' i] {
              background-color: var(--_styling---crimson);
            }

            [class*='color-background-crimson'],
            [data-color-background='crimson'],
            [data-wf--section--variant^='cri'] {
              color: var(--_styling---white);
            }

            [class*='color-background-crimson'] .arrow-link .arrow,
            [data-color-background='crimson'] .arrow-link .arrow,
            [data-wf--section--variant^='cri'] .arrow-link .arrow {
              background-color: var(--_styling---orange);
            }

            [class*='color-background-crimson'] p a,
            [data-color-background='crimson'] p a,
            [data-wf--section--variant^='cri'] p a {
              color: currentColor;
              text-decoration: underline;
            }

            /* End Crimson */

            /* Arrow link base — label inherits text color, icon color set per arrow bg */
            .arrow-link {
              color: inherit;
            }

            .arrow-link .arrow {
              color: var(--_styling---white);
              transition: background-color 0.1s var(--ease-in-out-quad);
            }

            /* White-arrow backgrounds need black icon */
            [class*='color-background-gold'] .arrow-link .arrow,
            [data-color-background='gold'] .arrow-link .arrow,
            [data-wf--section--variant^='go' i] .arrow-link .arrow,
            [class*='color-background-orange'] .arrow-link .arrow,
            [data-color-background='orange'] .arrow-link .arrow,
            [data-wf--section--variant^='or' i] .arrow-link .arrow,
            [class*='color-background-magenta'] .arrow-link .arrow,
            [data-wf--section--variant^='m' i] .arrow-link .arrow,
            [data-wf--section--variant='magenta'] .arrow-link .arrow {
              color: var(--_styling---black);
            }

            /* End Arrow link base */

            /* Arrow hover — background goes 66% transparent */

            /* Orange arrow hover (default, black, white, off-white, blue, purple, teal, green, yellow, crimson) */
            .arrow-link:hover .arrow,
            [class*='color-background-black'] .arrow-link:hover .arrow,
            [data-color-background='black'] .arrow-link:hover .arrow,
            [data-wf--section--variant^='bla' i] .arrow-link:hover .arrow,
            [class*='color-background-white'] .arrow-link:hover .arrow,
            [data-color-background='white'] .arrow-link:hover .arrow,
            [class*='color-background-off-white'] .arrow-link:hover .arrow,
            [data-color-background='off-white'] .arrow-link:hover .arrow,
            [class*='color-background-blue'] .arrow-link:hover .arrow,
            [data-color-background='blue'] .arrow-link:hover .arrow,
            [class*='color-background-purple'] .arrow-link:hover .arrow,
            [data-color-background='purple'] .arrow-link:hover .arrow,
            [data-wf--section--variant^='pu' i] .arrow-link:hover .arrow,
            [class*='color-background-teal'] .arrow-link:hover .arrow,
            [data-color-background='teal'] .arrow-link:hover .arrow,
            [data-wf--section--variant^='t' i] .arrow-link:hover .arrow,
            [class*='color-background-green'] .arrow-link:hover .arrow,
            [data-color-background='green'] .arrow-link:hover .arrow,
            [data-wf--section--variant^='gr' i] .arrow-link:hover .arrow,
            [class*='color-background-yellow'] .arrow-link:hover .arrow,
            [data-color-background='yellow'] .arrow-link:hover .arrow,
            [data-wf--section--variant^='y' i] .arrow-link:hover .arrow,
            [class*='color-background-crimson'] .arrow-link:hover .arrow,
            [data-color-background='crimson'] .arrow-link:hover .arrow {
              background-color: color-mix(in srgb, var(--_styling---orange) 34%, transparent);
            }

            /* White arrow hover (gold, orange, magenta) */
            [class*='color-background-gold'] .arrow-link:hover .arrow,
            [data-color-background='gold'] .arrow-link:hover .arrow,
            [data-wf--section--variant^='go' i] .arrow-link:hover .arrow,
            [class*='color-background-orange'] .arrow-link:hover .arrow,
            [data-color-background='orange'] .arrow-link:hover .arrow,
            [data-wf--section--variant^='or' i] .arrow-link:hover .arrow,
            [class*='color-background-magenta'] .arrow-link:hover .arrow,
            [data-color-background='magenta'] .arrow-link:hover .arrow,
            [data-wf--section--variant^='m' i] .arrow-link:hover .arrow {
              background-color: color-mix(in srgb, var(--_styling---white) 34%, transparent);
            }

            /* End Arrow hover */

            /* End Color Combination Rules */

            /*
   * Arrow Direction Rules
   * Priority (by source order):
   * 1) Default — right
   * 2) External — diagonal up-right
   * 3) Internal domain overrides — back to right
   * 4) Same-page anchors — down
   * 5) Downloads — down
   */

            /* Default — show arrow, hide download icon */
            .arrow-link .arrow .icon-arrow {
              display: block;
            }

            .arrow-link .arrow .icon-arrow-download {
              display: none;
            }

            /* Default — arrow points right */
            .arrow-link .arrow svg {
              transform: rotate(0deg);
            }

            /* External links — arrow points diagonal up-right */
            .arrow-link[href^='http'] .arrow svg,
            .com__025--item[href^='http'] .arrow svg {
              transform: rotate(-45deg);
            }

            /* Hide arrow for non-external links in com__025--item */
            .com__025--item[href^='http'] .arrow-link {
              display: block;
            }

            /* Hide arrow for non-external links in com__025--item */
            .com__025--item:not([href^='http']) .arrow-link {
              display: none;
            }

            /* Internal domain overrides — back to right */
            .arrow-link[href^='https://alleninstitute.org'] .arrow svg,
            .arrow-link[href^='https://alleninstitute-staging.webflow.io'] .arrow svg,
            .arrow-link[href^='https://allen-institute-staging.webflow.io'] .arrow svg {
              transform: rotate(0deg);
            }

            /* Same-page anchor links — arrow points down */
            .arrow-link[href^='#'] .arrow svg {
              transform: rotate(90deg);
            }

            /* Download links — swap icons, reset rotation */
            .arrow-link[download] .arrow svg,
            .arrow-link[href*='download'] .arrow svg,
            .arrow-link[href$='.pdf'] .arrow svg,
            .arrow-link[href$='.doc'] .arrow svg,
            .arrow-link[href$='.docx'] .arrow svg,
            .arrow-link[href$='.ppt'] .arrow svg,
            .arrow-link[href$='.pptx'] .arrow svg,
            .arrow-link[href$='.xls'] .arrow svg,
            .arrow-link[href$='.xlsx'] .arrow svg,
            .arrow-link[href$='.jpg'] .arrow svg,
            .arrow-link[href$='.png'] .arrow svg,
            .arrow-link[href$='.avif'] .arrow svg,
            .arrow-link[href$='.webp'] .arrow svg,
            .arrow-link[href$='.svg'] .arrow svg {
              transform: rotate(0deg);
            }

            .arrow-link[download] .arrow .icon-arrow,
            .arrow-link[href*='download'] .arrow .icon-arrow,
            .arrow-link[href$='.pdf'] .arrow .icon-arrow,
            .arrow-link[href$='.doc'] .arrow .icon-arrow,
            .arrow-link[href$='.docx'] .arrow .icon-arrow,
            .arrow-link[href$='.ppt'] .arrow .icon-arrow,
            .arrow-link[href$='.pptx'] .arrow .icon-arrow,
            .arrow-link[href$='.xls'] .arrow .icon-arrow,
            .arrow-link[href$='.xlsx'] .arrow .icon-arrow,
            .arrow-link[href$='.jpg'] .arrow .icon-arrow,
            .arrow-link[href$='.png'] .arrow .icon-arrow,
            .arrow-link[href$='.avif'] .arrow .icon-arrow,
            .arrow-link[href$='.webp'] .arrow .icon-arrow,
            .arrow-link[href$='.svg'] .arrow .icon-arrow {
              display: none;
            }

            .arrow-link[download] .arrow .icon-arrow-download,
            .arrow-link[href*='download'] .arrow .icon-arrow-download,
            .arrow-link[href$='.pdf'] .arrow .icon-arrow-download,
            .arrow-link[href$='.doc'] .arrow .icon-arrow-download,
            .arrow-link[href$='.docx'] .arrow .icon-arrow-download,
            .arrow-link[href$='.ppt'] .arrow .icon-arrow-download,
            .arrow-link[href$='.pptx'] .arrow .icon-arrow-download,
            .arrow-link[href$='.xls'] .arrow .icon-arrow-download,
            .arrow-link[href$='.xlsx'] .arrow .icon-arrow-download,
            .arrow-link[href$='.jpg'] .arrow .icon-arrow-download,
            .arrow-link[href$='.png'] .arrow .icon-arrow-download,
            .arrow-link[href$='.avif'] .arrow .icon-arrow-download,
            .arrow-link[href$='.webp'] .arrow .icon-arrow-download,
            .arrow-link[href$='.svg'] .arrow .icon-arrow-download {
              display: block;
            }

            /* End Arrow Direction Rules */

            .u-gap-fill::after {
              content: '';
              background: inherit;
              pointer-events: none;
              position: absolute;
              top: 0;
              bottom: 0;
              right: var(--margin-lg);
              width: calc(-1 * var(--margin-lg));
            }

            .filter--field .select .w-select .is-list-active,
            [data-gntc='add-slash']::after,
            [data-slash]::after,
            .w-pagination-wrapper a div:last-of-type::after,
            .arrow-link .font-large-6::after {
              content: '/';
              display: inline;
              text-decoration: none !important;
            }

            [data-gntc='add-space-slash']::after {
              content: '\00a0/';
              text-decoration: none !important;
              display: inline-block;
            }

            [data-gntc='external-arrow'] {
              white-space: nowrap;
            }

            [data-gntc='external-arrow']::after {
              content: '';
              display: inline-block;
              width: 16px;
              height: 16px;
              margin-left: 4px;
              vertical-align: middle;
              background-color: var(--_styling---white);
              -webkit-mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath d='M12.0373 3.98504L12.038 11.8412L12.0373 3.98504L4.18106 3.98573V3.98435L12.0373 3.98504ZM11.933 4.08931V11.7377L10.7543 11.7494L10.7549 6.35426L10.7543 6.10222L4.67134 12.1851L3.83717 11.351L9.92009 5.26805H4.2729L4.28395 4.08862L11.933 4.08931Z'/%3E%3C/svg%3E") no-repeat center;
              mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath d='M12.0373 3.98504L12.038 11.8412L12.0373 3.98504L4.18106 3.98573V3.98435L12.0373 3.98504ZM11.933 4.08931V11.7377L10.7543 11.7494L10.7549 6.35426L10.7543 6.10222L4.67134 12.1851L3.83717 11.351L9.92009 5.26805H4.2729L4.28395 4.08862L11.933 4.08931Z'/%3E%3C/svg%3E") no-repeat center;
            }

            @media screen and (max-width: 767px) {
              [data-gntc='external-arrow']::after {
                content: '';
                display: inline-block;
                width: 5dvw;
                height: 5dvw;
                margin-left: 2.5vw;
                vertical-align: middle;
              }
            }

            .component-footer [data-gntc='external-arrow']:hover::after {
              background-color: var(--_styling---green);
            }

            .w-pagination-wrapper {
              font-weight: var(--_styling---settings--font-weights--bold);
            }

            .w-pagination-wrapper a div {
              font-family: var(--_styling---settings--font-family--body);
              font-size: var(--font--size--body);
              line-height: var(--font--line-height--body);
              font-weight: var(--_styling---settings--font-weights--bold);
              letter-spacing: var(--font--letter-spacing--body);
            }

            .nav--dropdown-link:hover .font-body {
              text-decoration: underline;
            }

            .atom--icon-card.with-link:hover .font-large-5 {
              color: var(--_styling---green);
              text-decoration: underline;
            }

            body {
              -moz-osx-font-smoothing: grayscale;
              -webkit-font-smoothing: antialiased;
            }

            @media screen and (min-width: 71.25rem) {

              /* 1140px */
              .d-xl-block {
                display: block;
              }

              .d-xl-flex {
                display: flex;
              }

              .d-xl-none {
                display: none;
              }
            }

            a {
              color: currentColor;
            }

            .line-clamp--2-lines {
              display: -webkit-box;
              -webkit-line-clamp: 2;
              -webkit-box-orient: vertical;
              overflow: hidden;
            }

            .line-clamp--3-lines {
              display: -webkit-box;
              -webkit-line-clamp: 3;
              -webkit-box-orient: vertical;
              overflow: hidden;
            }

            p:last-of-type {
              margin-bottom: 0;
            }

            blockquote::before {
              content: '“';
            }

            blockquote::after {
              content: '”';
            }

            ::marker {
              /* color: var(--color-black); */
            }

            .horizontal-scroller {
              margin-bottom: -1px;
              /* stupid pixel-tall bug in Edge */
              -ms-overflow-style: none;
              /* for Internet Explorer, Edge */
              scrollbar-width: none;
              /* for Firefox */
            }

            .horizontal-scroller::-webkit-scrollbar {
              display: none;
            }

            .footer-nav-link:first-of-type {
              margin-top: 0;
            }

            /* Allows for custom arrow on filter select*/
            select {
              -webkit-appearance: none;
              -moz-appearance: none;
              appearance: none;
              background: none;
              background-image: none;
            }

            /* Link overlay – see https://v2.chakra-ui.com/docs/components/link-overlay */
            .link-overlay:after {
              content: '';
              cursor: inherit;
              display: block;
              position: absolute;
              top: 0px;
              left: 0px;
              z-index: 0;
              width: 100%;
              height: 100%;
            }

            .anchor-link:before,
            [id^='toc-']:before {
              content: '';
              display: block;
              height: 10rem;
              margin-top: -10rem;
              visibility: hidden;
              pointer-events: none;
            }

            /*Allows for an html embed element within a rich text editor with this class to point scroll-to
    for anchor links to the top of that editor element*/
            .a-scroll-margin-top {
              position: absolute;
              top: calc(-1 * var(--_utility-classes---nav-bar-height));
            }

            /*.link-hover-animate :is(h1, h2, h3) {
      display: inline;
      background-image: linear-gradient(to right, var(--_styling---black), var(--_styling---black));
      background-size: 0% 0.125rem;
      background-repeat: no-repeat;
      text-decoration: none;
      background-position: 0 100%;
      transition: background-size 0.2s ease-in-out;
    } */

            /* job form */
            .cc-job-title {
              font-size: var(--font--size--large-6);
              letter-spacing: var(--font--letter-spacing--large-6);
              line-height: var(--font--line-height--large-6);
              font-family: var(--_styling---font--typeface--desktop--large-6);
              font-weight: var(--_styling---font--weight--desktop--large-6);
            }

            .cc-job-container {
              margin-bottom: 2rem;
            }

            /* hover state */
            .text-rich-text a:hover,
            .link-hover-animate:hover :is(h1, h2, h3) {
              background-size: 100% 0.125rem;
            }

            .media__024--item:hover .media__024--overlay {
              opacity: 0;
            }

            .font-body.com__025--excerpt {
              display: grid;
              grid-template-rows: 0fr;
              transition: grid-template-rows 0.25s ease-in-out;
            }

            .font-body.com__025--excerpt>div {
              overflow: hidden;
            }

            .com__025--item:hover .font-body.com__025--excerpt {
              grid-template-rows: 1fr;
            }

            .com__025--item:hover .com__025--item-overlay {
              background-color: rgba(0, 0, 0, 0.5);
            }

            .person--author-card:hover .font-body,
            .people--cms-item:hover .font-body,
            .atom--resource-card:hover .font-large-6,
            .resoure-item--allenites:hover .font-body.text-weight-bold,
            .lesson-list--item-lrg:hover .font-large-6,
            .search-result-item:hover .font-large-6 {
              color: var(--_styling---purple);
              text-decoration: underline;
            }

            .resoure-item--allenites:hover .resource--allenites-circle {
              background-color: var(--_styling---orange);
              border-color: var(--_styling---orange);
            }

            .color-background-black .atom--resource-card:hover .font-large-6 {
              color: var(--_styling---green);
              text-decoration: underline;
            }

            .arrow-link--quicklink:hover .font-large-6 {
              text-decoration: underline !important;
            }

            .arrow-link--quicklink:hover .quick-link--icon {
              color: var(--_styling---orange);
            }

            .gntc-rich-text-quote {
              background-color: var(--_styling---green);
              color: var(--_styling---black) !important;
            }

            .gntc-rich-text-quote p {
              margin: 0 !important;
              padding: 0 !important;
            }

            .gntc-rich-text-quote em {
              padding: 0 3rem 1.5rem 1.5rem;
              display: inline-block;
            }

            @media (max-width: 991px) {
              .font-body.com__025--excerpt {
                grid-template-rows: 1fr;
                transition: none;
              }

              .u-gap-fill::after {
                display: none;
              }
            }

            /*
   * Some transforms for the hamburger button
   */
            .nav-hamburger-wrapper.is-active .x-hidden {
              opacity: 0;
            }

            .nav-hamburger-wrapper.is-active .hamburger-line.x {
              transform: rotateZ(-45deg);
            }

            .nav-hamburger-wrapper.is-active .hamburger-line.x:last-child {
              transform: rotateZ(45deg);
            }

            .comma-separated {
              display: inline;
            }

            .comma-separated span::after,
            .comma-separated a::after {
              content: ',\00a0';
              text-decoration: none;
              display: inline-block;
            }

            .comma-separated:last-child span::after,
            .comma-separated:last-child a::after {
              content: '';
            }

            .combined-grid.six>*:nth-child(n + 7) {
              display: none;
            }

            #ot-sdk-btn.ot-sdk-show-settings,
            #ot-sdk-btn.optanon-show-settings {
              all: revert;
              color: inherit !important;
              background: none !important;
              background-color: transparent !important;
              border: none !important;
              padding: 0 !important;
              font: inherit !important;
              font-size: inherit !important;
              line-height: inherit !important;
              letter-spacing: inherit !important;
              text-decoration: none !important;
              text-transform: lowercase;
              height: auto !important;
              white-space: normal !important;
              transition: none !important;
              cursor: pointer !important;
            }

            @media (max-width: 1439px) {
              .people--cms-grid.events {
                grid-template-columns: 1fr;
              }
            }

            @media screen and (max-width: 767px) {

              input,
              textarea {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
              }

              .anchor-link:before,
              [id^='toc-']:before {
                height: 27.5dvw;
                margin-top: -27.5dvw;
              }

              .slider__029--content .font-body,
              .slider__029--content h2 {
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                overflow: hidden;
                line-height: 1.5;
              }
            }
          </style>
        </div>
        <div class="gntc-style-rich-text w-embed">
          <style type="text/css">
            .rich-text-full-width-media.w-richtext figure.w-richtext-align-fullwidth>div {
              min-width: 100%;
            }

            .rich-text-full-width-media h1,
            .rich-text-full-width-media h2,
            .rich-text-full-width-media h3,
            .rich-text-full-width-media h4,
            .rich-text-full-width-media h5,
            .rich-text-full-width-media h6,
            .rich-text-full-width-media p,
            .rich-text-full-width-media ul,
            .rich-text-full-width-media ol,
            .rich-text-full-width-media blockquote,
            .rich-text-full-width-media figure {
              margin: 0rem 10.25rem 0rem 10.25rem;
            }

            .text-rich-text p:first-child,
            .text-rich-text h1:first-child,
            .text-rich-text h2:first-child,
            .text-rich-text h3:first-child,
            .text-rich-text h4:first-child,
            .text-rich-text h5:first-child,
            .text-rich-text h6:first-child,
            .text-rich-text ul:first-child,
            .text-rich-text ol:first-child,
            .text-rich-text blockquote:first-child,
            .text-rich-text figure:first-child,
            .text-rich-text .w-embed:first-child {
              margin-top: 0;
            }

            .text-rich-text p+p,
            .text-rich-text h1+p,
            .text-rich-text h2+p,
            .text-rich-text h3+p,
            .text-rich-text h4+p,
            .text-rich-text h5+p,
            .text-rich-text h6+p,
            .text-rich-text ul+p,
            .text-rich-text ol+p,
            .text-rich-text blockquote+p,
            .text-rich-text figure+p,
            .text-rich-text .w-embed+p,
            .text-rich-text p+h1,
            .text-rich-text h1+h1,
            .text-rich-text h2+h1,
            .text-rich-text h3+h1,
            .text-rich-text h4+h1,
            .text-rich-text h5+h1,
            .text-rich-text h6+h1,
            .text-rich-text ul+h1,
            .text-rich-text ol+h1,
            .text-rich-text blockquote+h1,
            .text-rich-text figure+h1,
            .text-rich-text .w-embed+h1,
            .text-rich-text p+h2,
            .text-rich-text h1+h2,
            .text-rich-text h2+h2,
            .text-rich-text h3+h2,
            .text-rich-text h4+h2,
            .text-rich-text h5+h2,
            .text-rich-text h6+h2,
            .text-rich-text ul+h2,
            .text-rich-text ol+h2,
            .text-rich-text blockquote+h2,
            .text-rich-text figure+h2,
            .text-rich-text .w-embed+h2,
            .text-rich-text p+h3,
            .text-rich-text h1+h3,
            .text-rich-text h2+h3,
            .text-rich-text h3+h3,
            .text-rich-text h4+h3,
            .text-rich-text h5+h3,
            .text-rich-text h6+h3,
            .text-rich-text ul+h3,
            .text-rich-text ol+h3,
            .text-rich-text blockquote+h3,
            .text-rich-text figure+h3,
            .text-rich-text .w-embed+h3,
            .text-rich-text p+h4,
            .text-rich-text h1+h4,
            .text-rich-text h2+h4,
            .text-rich-text h3+h4,
            .text-rich-text h4+h4,
            .text-rich-text h5+h4,
            .text-rich-text h6+h4,
            .text-rich-text ul+h4,
            .text-rich-text ol+h4,
            .text-rich-text blockquote+h4,
            .text-rich-text figure+h4,
            .text-rich-text .w-embed+h4,
            .text-rich-text p+h5,
            .text-rich-text h1+h5,
            .text-rich-text h2+h5,
            .text-rich-text h3+h5,
            .text-rich-text h4+h5,
            .text-rich-text h5+h5,
            .text-rich-text h6+h5,
            .text-rich-text ul+h5,
            .text-rich-text ol+h5,
            .text-rich-text blockquote+h5,
            .text-rich-text figure+h5,
            .text-rich-text .w-embed+h5,
            .text-rich-text p+h6,
            .text-rich-text h1+h6,
            .text-rich-text h2+h6,
            .text-rich-text h3+h6,
            .text-rich-text h4+h6,
            .text-rich-text h5+h6,
            .text-rich-text h6+h6,
            .text-rich-text ul+h6,
            .text-rich-text ol+h6,
            .text-rich-text blockquote+h6,
            .text-rich-text figure+h6,
            .text-rich-text .w-embed+h6,
            .text-rich-text p+ol,
            .text-rich-text h1+ol,
            .text-rich-text h2+ol,
            .text-rich-text h3+ol,
            .text-rich-text h4+ol,
            .text-rich-text h5+ol,
            .text-rich-text h6+ol,
            .text-rich-text ul+ol,
            .text-rich-text ol+ol,
            .text-rich-text blockquote+ol,
            .text-rich-text figure+ol,
            .text-rich-text .w-embed+ol,
            .text-rich-text p+ul,
            .text-rich-text h1+ul,
            .text-rich-text h2+ul,
            .text-rich-text h3+ul,
            .text-rich-text h4+ul,
            .text-rich-text h5+ul,
            .text-rich-text h6+ul,
            .text-rich-text ul+ul,
            .text-rich-text ol+ul,
            .text-rich-text blockquote+ul,
            .text-rich-text figure+ul,
            .text-rich-text .w-embed+ul,
            .text-rich-text p+blockquote,
            .text-rich-text h1+blockquote,
            .text-rich-text h2+blockquote,
            .text-rich-text h3+blockquote,
            .text-rich-text h4+blockquote,
            .text-rich-text h5+blockquote,
            .text-rich-text h6+blockquote,
            .text-rich-text ul+blockquote,
            .text-rich-text ol+blockquote,
            .text-rich-text blockquote+blockquote,
            .text-rich-text figure+blockquote,
            .text-rich-text .w-embed+blockquote,
            .text-rich-text p+figure,
            .text-rich-text h1+figure,
            .text-rich-text h2+figure,
            .text-rich-text h3+figure,
            .text-rich-text h4+figure,
            .text-rich-text h5+figure,
            .text-rich-text h6+figure,
            .text-rich-text ul+figure,
            .text-rich-text ol+figure,
            .text-rich-text blockquote+figure,
            .text-rich-text figure+figure,
            .text-rich-text .w-embed+figure,
            .text-rich-text p+.w-embed,
            .text-rich-text h1+.w-embed,
            .text-rich-text h2+.w-embed,
            .text-rich-text h3+.w-embed,
            .text-rich-text h4+.w-embed,
            .text-rich-text h5+.w-embed,
            .text-rich-text h6+.w-embed,
            .text-rich-text ul+.w-embed,
            .text-rich-text ol+.w-embed,
            .text-rich-text blockquote+.w-embed,
            .text-rich-text figure+.w-embed,
            .text-rich-text .w-embed+.w-embed {
              margin-top: var(--rich-text-margin-top-md);
            }

            .rich-text-resource p+p,
            .rich-text-resource h1+p,
            .rich-text-resource h2+p,
            .rich-text-resource h3+p,
            .rich-text-resource h4+p,
            .rich-text-resource h5+p,
            .rich-text-resource h6+p,
            .rich-text-resource ul+p,
            .rich-text-resource ol+p,
            .rich-text-resource blockquote+p,
            .rich-text-resource figure+p,
            .rich-text-resource .w-embed+p,
            .rich-text-resource p+h1,
            .rich-text-resource h1+h1,
            .rich-text-resource h2+h1,
            .rich-text-resource h3+h1,
            .rich-text-resource h4+h1,
            .rich-text-resource h5+h1,
            .rich-text-resource h6+h1,
            .rich-text-resource ul+h1,
            .rich-text-resource ol+h1,
            .rich-text-resource blockquote+h1,
            .rich-text-resource figure+h1,
            .rich-text-resource .w-embed+h1,
            .rich-text-resource p+h2,
            .rich-text-resource h1+h2,
            .rich-text-resource h2+h2,
            .rich-text-resource h3+h2,
            .rich-text-resource h4+h2,
            .rich-text-resource h5+h2,
            .rich-text-resource h6+h2,
            .rich-text-resource ul+h2,
            .rich-text-resource ol+h2,
            .rich-text-resource blockquote+h2,
            .rich-text-resource figure+h2,
            .rich-text-resource .w-embed+h2,
            .rich-text-resource p+h3,
            .rich-text-resource h1+h3,
            .rich-text-resource h2+h3,
            .rich-text-resource h3+h3,
            .rich-text-resource h4+h3,
            .rich-text-resource h5+h3,
            .rich-text-resource h6+h3,
            .rich-text-resource ul+h3,
            .rich-text-resource ol+h3,
            .rich-text-resource blockquote+h3,
            .rich-text-resource figure+h3,
            .rich-text-resource .w-embed+h3,
            .rich-text-resource p+h4,
            .rich-text-resource h1+h4,
            .rich-text-resource h2+h4,
            .rich-text-resource h3+h4,
            .rich-text-resource h4+h4,
            .rich-text-resource h5+h4,
            .rich-text-resource h6+h4,
            .rich-text-resource ul+h4,
            .rich-text-resource ol+h4,
            .rich-text-resource blockquote+h4,
            .rich-text-resource figure+h4,
            .rich-text-resource .w-embed+h4,
            .rich-text-resource p+h5,
            .rich-text-resource h1+h5,
            .rich-text-resource h2+h5,
            .rich-text-resource h3+h5,
            .rich-text-resource h4+h5,
            .rich-text-resource h5+h5,
            .rich-text-resource h6+h5,
            .rich-text-resource ul+h5,
            .rich-text-resource ol+h5,
            .rich-text-resource blockquote+h5,
            .rich-text-resource figure+h5,
            .rich-text-resource .w-embed+h5,
            .rich-text-resource p+h6,
            .rich-text-resource h1+h6,
            .rich-text-resource h2+h6,
            .rich-text-resource h3+h6,
            .rich-text-resource h4+h6,
            .rich-text-resource h5+h6,
            .rich-text-resource h6+h6,
            .rich-text-resource ul+h6,
            .rich-text-resource ol+h6,
            .rich-text-resource blockquote+h6,
            .rich-text-resource figure+h6,
            .rich-text-resource .w-embed+h6,
            .rich-text-resource p+ol,
            .rich-text-resource h1+ol,
            .rich-text-resource h2+ol,
            .rich-text-resource h3+ol,
            .rich-text-resource h4+ol,
            .rich-text-resource h5+ol,
            .rich-text-resource h6+ol,
            .rich-text-resource ul+ol,
            .rich-text-resource ol+ol,
            .rich-text-resource blockquote+ol,
            .rich-text-resource figure+ol,
            .rich-text-resource .w-embed+ol,
            .rich-text-resource p+ul,
            .rich-text-resource h1+ul,
            .rich-text-resource h2+ul,
            .rich-text-resource h3+ul,
            .rich-text-resource h4+ul,
            .rich-text-resource h5+ul,
            .rich-text-resource h6+ul,
            .rich-text-resource ul+ul,
            .rich-text-resource ol+ul,
            .rich-text-resource blockquote+ul,
            .rich-text-resource figure+ul,
            .rich-text-resource .w-embed+ul,
            .rich-text-resource p+blockquote,
            .rich-text-resource h1+blockquote,
            .rich-text-resource h2+blockquote,
            .rich-text-resource h3+blockquote,
            .rich-text-resource h4+blockquote,
            .rich-text-resource h5+blockquote,
            .rich-text-resource h6+blockquote,
            .rich-text-resource ul+blockquote,
            .rich-text-resource ol+blockquote,
            .rich-text-resource blockquote+blockquote,
            .rich-text-resource figure+blockquote,
            .rich-text-resource .w-embed+blockquote,
            .rich-text-resource p+figure,
            .rich-text-resource h1+figure,
            .rich-text-resource h2+figure,
            .rich-text-resource h3+figure,
            .rich-text-resource h4+figure,
            .rich-text-resource h5+figure,
            .rich-text-resource h6+figure,
            .rich-text-resource ul+figure,
            .rich-text-resource ol+figure,
            .rich-text-resource blockquote+figure,
            .rich-text-resource figure+figure,
            .rich-text-resource .w-embed+figure,
            .rich-text-resource p+.w-embed,
            .rich-text-resource h1+.w-embed,
            .rich-text-resource h2+.w-embed,
            .rich-text-resource h3+.w-embed,
            .rich-text-resource h4+.w-embed,
            .rich-text-resource h5+.w-embed,
            .rich-text-resource h6+.w-embed,
            .rich-text-resource ul+.w-embed,
            .rich-text-resource ol+.w-embed,
            .rich-text-resource blockquote+.w-embed,
            .rich-text-resource figure+.w-embed,
            .rich-text-resource .w-embed+.w-embed {
              margin-top: var(--rich-text-margin-top-lg);
            }

            .rich-text-text p+p,
            .rich-text-resource p+p {
              margin-top: 1rem;
            }

            .rich-text-news figcaption {
              font-size: var(--font--size--caption);
              line-height: var(--font--line-height--caption);
            }

            /* 
Check --breakpoint-md for the value of this breakpoint
*/
            @media screen and (max-width: 47.9375rem) {

              .rich-text-full-width-media h1,
              .rich-text-full-width-media h2,
              .rich-text-full-width-media h3,
              .rich-text-full-width-media h4,
              .rich-text-full-width-media h5,
              .rich-text-full-width-media h6,
              .rich-text-full-width-media p,
              .rich-text-full-width-media ul,
              .rich-text-full-width-media ol,
              .rich-text-full-width-media blockquote,
              .rich-text-full-width-media figure {
                margin: 0rem;
              }

              .text-rich-text p+p,
              .text-rich-text h1+p,
              .text-rich-text h2+p,
              .text-rich-text h3+p,
              .text-rich-text h4+p,
              .text-rich-text h5+p,
              .text-rich-text h6+p,
              .text-rich-text ul+p,
              .text-rich-text ol+p,
              .text-rich-text blockquote+p,
              .text-rich-text figure+p,
              .text-rich-text .w-embed+p,
              .text-rich-text p+h1,
              .text-rich-text h1+h1,
              .text-rich-text h2+h1,
              .text-rich-text h3+h1,
              .text-rich-text h4+h1,
              .text-rich-text h5+h1,
              .text-rich-text h6+h1,
              .text-rich-text ul+h1,
              .text-rich-text ol+h1,
              .text-rich-text blockquote+h1,
              .text-rich-text figure+h1,
              .text-rich-text .w-embed+h1,
              .text-rich-text p+h2,
              .text-rich-text h1+h2,
              .text-rich-text h2+h2,
              .text-rich-text h3+h2,
              .text-rich-text h4+h2,
              .text-rich-text h5+h2,
              .text-rich-text h6+h2,
              .text-rich-text ul+h2,
              .text-rich-text ol+h2,
              .text-rich-text blockquote+h2,
              .text-rich-text figure+h2,
              .text-rich-text .w-embed+h2,
              .text-rich-text p+h3,
              .text-rich-text h1+h3,
              .text-rich-text h2+h3,
              .text-rich-text h3+h3,
              .text-rich-text h4+h3,
              .text-rich-text h5+h3,
              .text-rich-text h6+h3,
              .text-rich-text ul+h3,
              .text-rich-text ol+h3,
              .text-rich-text blockquote+h3,
              .text-rich-text figure+h3,
              .text-rich-text .w-embed+h3,
              .text-rich-text p+h4,
              .text-rich-text h1+h4,
              .text-rich-text h2+h4,
              .text-rich-text h3+h4,
              .text-rich-text h4+h4,
              .text-rich-text h5+h4,
              .text-rich-text h6+h4,
              .text-rich-text ul+h4,
              .text-rich-text ol+h4,
              .text-rich-text blockquote+h4,
              .text-rich-text figure+h4,
              .text-rich-text .w-embed+h4,
              .text-rich-text p+h5,
              .text-rich-text h1+h5,
              .text-rich-text h2+h5,
              .text-rich-text h3+h5,
              .text-rich-text h4+h5,
              .text-rich-text h5+h5,
              .text-rich-text h6+h5,
              .text-rich-text ul+h5,
              .text-rich-text ol+h5,
              .text-rich-text blockquote+h5,
              .text-rich-text figure+h5,
              .text-rich-text .w-embed+h5,
              .text-rich-text p+h6,
              .text-rich-text h1+h6,
              .text-rich-text h2+h6,
              .text-rich-text h3+h6,
              .text-rich-text h4+h6,
              .text-rich-text h5+h6,
              .text-rich-text h6+h6,
              .text-rich-text ul+h6,
              .text-rich-text ol+h6,
              .text-rich-text blockquote+h6,
              .text-rich-text figure+h6,
              .text-rich-text .w-embed+h6,
              .text-rich-text p+ol,
              .text-rich-text h1+ol,
              .text-rich-text h2+ol,
              .text-rich-text h3+ol,
              .text-rich-text h4+ol,
              .text-rich-text h5+ol,
              .text-rich-text h6+ol,
              .text-rich-text ul+ol,
              .text-rich-text ol+ol,
              .text-rich-text blockquote+ol,
              .text-rich-text figure+ol,
              .text-rich-text .w-embed+ol,
              .text-rich-text p+ul,
              .text-rich-text h1+ul,
              .text-rich-text h2+ul,
              .text-rich-text h3+ul,
              .text-rich-text h4+ul,
              .text-rich-text h5+ul,
              .text-rich-text h6+ul,
              .text-rich-text ul+ul,
              .text-rich-text ol+ul,
              .text-rich-text blockquote+ul,
              .text-rich-text figure+ul,
              .text-rich-text .w-embed+ul,
              .text-rich-text p+blockquote,
              .text-rich-text h1+blockquote,
              .text-rich-text h2+blockquote,
              .text-rich-text h3+blockquote,
              .text-rich-text h4+blockquote,
              .text-rich-text h5+blockquote,
              .text-rich-text h6+blockquote,
              .text-rich-text ul+blockquote,
              .text-rich-text ol+blockquote,
              .text-rich-text blockquote+blockquote,
              .text-rich-text figure+blockquote,
              .text-rich-text .w-embed+blockquote,
              .text-rich-text p+figure,
              .text-rich-text h1+figure,
              .text-rich-text h2+figure,
              .text-rich-text h3+figure,
              .text-rich-text h4+figure,
              .text-rich-text h5+figure,
              .text-rich-text h6+figure,
              .text-rich-text ul+figure,
              .text-rich-text ol+figure,
              .text-rich-text blockquote+figure,
              .text-rich-text figure+figure,
              .text-rich-text .w-embed+figure,
              .text-rich-text p+.w-embed,
              .text-rich-text h1+.w-embed,
              .text-rich-text h2+.w-embed,
              .text-rich-text h3+.w-embed,
              .text-rich-text h4+.w-embed,
              .text-rich-text h5+.w-embed,
              .text-rich-text h6+.w-embed,
              .text-rich-text ul+.w-embed,
              .text-rich-text ol+.w-embed,
              .text-rich-text blockquote+.w-embed,
              .text-rich-text figure+.w-embed,
              .text-rich-text .w-embed+.w-embed {
                margin-top: var(--rich-text-margin-top-xs);
              }

              .rich-text-text p+p,
              .rich-text-resource p+p {
                margin-top: 5dvw;
              }
            }
          </style>
        </div>
        <div class="w-embed w-script">
          <script>
            document.addEventListener('gntc:nested-sort:complete', (event) => {
              if (event.detail.instanceId !== 'carousel029') return;
              console.log('sort complete', event.detail.instanceId);
              initializeSwiper();
            });

            function initializeSwiper() {
              console.log('initializeSwiper');
              const gntcSliders = document.querySelectorAll('.swiper--parent');

              gntcSliders.forEach((sliderParent) => {
                const prev = sliderParent.querySelector('.swiper-prev');
                const next = sliderParent.querySelector('.swiper-next');
                const slider = sliderParent.querySelector('.swiper');

                // Get the combined items from Finsweet
                const combinedItems = sliderParent.querySelectorAll('[fs-list-element="list"] .w-dyn-item');
                const swiperWrapper = slider.querySelector('.swiper-wrapper');

                // Move combined items into swiper-wrapper
                combinedItems.forEach((item) => {
                  item.classList.add('swiper-slide');
                  swiperWrapper.appendChild(item);
                });

                if (slider.classList.contains('swiper-click')) {
                  new Swiper(slider, {
                    loop: true,
                    grabCursor: true,
                    slidesPerView: 1,
                    effect: 'fade',
                    fadeEffect: {
                      crossFade: true,
                    },
                    keyboard: {
                      enabled: true,
                      onlyInViewport: false,
                    },
                    navigation: {
                      nextEl: next,
                      prevEl: prev,
                    },
                  });
                } else {
                  new Swiper(slider, {
                    loop: true,
                    speed: 250,
                    effect: 'fade',
                    fadeEffect: {
                      crossFade: true,
                    },
                    navigation: {
                      nextEl: next,
                      prevEl: prev,
                    },
                    autoplay: {
                      delay: 2500,
                    },
                  });
                }
              });
            }
          </script>
        </div>
        <div class="gntc-javascript-gntc w-embed w-script">
          <script>
            var Webflow = Webflow || [];
            Webflow.push(function() {
              var GNTC = function() {
                "use strict";
                var t = function(t) {
                    return 0 == t % 12 ? 12 : t % 12
                  },
                  e = function(t) {
                    return 12 <= t ? "PM" : "AM"
                  },
                  n = function(t) {
                    if (3 < t && 21 < t) return "th";
                    switch (t % 10) {
                      case 1:
                        return "st";
                      case 2:
                        return "nd";
                      case 3:
                        return "rd";
                      default:
                        return "th"
                    }
                  },
                  r = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                  o = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                  i = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                  c = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                  a = function() {
                    var a = "America/Los_Angeles";
                    document.querySelectorAll("[gntc-date], [gntc-timezone]").forEach((function(u) {
                      if (u.hasAttribute("gntc-timezone") && (a = u.getAttribute("gntc-timezone")), u.hasAttribute("gntc-date")) {
                        var l = u.getAttribute("gntc-date");
                        u.textContent = function(a, u) {
                          var l = (new Date).toLocaleString("en-US", {
                              timeZone: u
                            }),
                            d = new Date(l),
                            s = {
                              A: e(d.getHours()),
                              D: r[d.getDay()],
                              F: c[d.getMonth()],
                              G: String(d.getHours()),
                              H: String(d.getHours()).padStart(2, "0"),
                              M: i[d.getMonth()],
                              S: n(d.getDate()),
                              Y: d.getFullYear(),
                              a: e(d.getHours()).toLowerCase(),
                              d: String(d.getDate()).padStart(2, "0"),
                              e: u,
                              g: String(t(d.getHours())),
                              h: String(t(d.getHours())).padStart(2, "0"),
                              i: String(d.getMinutes()).padStart(2, "0"),
                              j: String(d.getDate()),
                              l: o[d.getDay()],
                              m: String(d.getMonth() + 1).padStart(2, "0"),
                              n: String(d.getMonth() + 1),
                              s: String(d.getSeconds()).padStart(2, "0"),
                              T: u,
                              y: String(d.getFullYear()).slice(-2)
                            };
                          return a.replace(/Y|y|m|n|d|j|H|G|h|g|i|s|a|A|D|l|S|F|M|e|T/g, (function(t) {
                            return s[t]
                          }))
                        }(l, a)
                      }
                    }))
                  },
                  u = {
                    init: function() {
                      a()
                    }
                  },
                  l = function() {
                    document.querySelectorAll("[gntc-number-ticker]").forEach((function(t) {
                      "animated" !== t.getAttribute("gntc-number-ticker") && (t.getBoundingClientRect().top < .75 * window.innerHeight && (t.setAttribute("gntc-number-ticker", "animated"), t.style.opacity = 1, function(t) {
                        var e = t.textContent.trim().match(/^(\d+)(\D.*)?$/);
                        if (e) {
                          var n = parseInt(e[1], 10),
                            r = e[2] || "",
                            o = performance.now(),
                            i = function(e) {
                              var c, a = e - o,
                                u = Math.min(a / 1e3, 1),
                                l = (c = u) * (2 - c),
                                d = Math.round(l * n) + r;
                              t.textContent = d, 1 > u && requestAnimationFrame(i)
                            };
                          requestAnimationFrame(i)
                        }
                      }(t)))
                    }))
                  },
                  d = {
                    init: function() {
                      document.querySelectorAll("[gntc-number-ticker]").forEach((function(t) {
                        t.style.opacity = 0, t.setAttribute("gntc-number-ticker", "not-animated")
                      })), window.addEventListener("scroll", l), l()
                    }
                  };

                function s(t, e) {
                  (null == e || e > t.length) && (e = t.length);
                  for (var n = 0, r = Array(e); n < e; n++) r[n] = t[n];
                  return r
                }

                function f(t) {
                  return function(t) {
                    if (Array.isArray(t)) return s(t)
                  }(t) || function(t) {
                    if ("undefined" != typeof Symbol && null != t[Symbol.iterator] || null != t["@@iterator"]) return Array.from(t)
                  }(t) || function(t, e) {
                    if (t) {
                      if ("string" == typeof t) return s(t, e);
                      var n = {}.toString.call(t).slice(8, -1);
                      return "Object" === n && t.constructor && (n = t.constructor.name), "Map" === n || "Set" === n ? Array.from(t) : "Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n) ? s(t, e) : void 0
                    }
                  }(t) || function() {
                    throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
                  }()
                }
                var m = null,
                  g = {
                    init: function() {
                      ! function() {
                        m && (m(), m = null);
                        var t = document.querySelector('[gntc-toc="source"]'),
                          e = document.querySelector('[gntc-toc="destination"]');
                        if (t && e) {
                          var n = t.getAttribute("gntc-toc-level-1"),
                            r = t.getAttribute("gntc-toc-level-2"),
                            o = t.getAttribute("gntc-toc-level-3"),
                            i = e.getAttribute("gntc-toc-wrapper"),
                            c = [{
                              selector: n,
                              className: "toc-level-1"
                            }, {
                              selector: r,
                              className: "toc-level-2"
                            }, {
                              selector: o,
                              className: "toc-level-3"
                            }].flatMap((function(e) {
                              var n = e.selector,
                                r = e.className;
                              return n ? f(t.querySelectorAll(n)).map((function(t) {
                                return {
                                  element: t,
                                  className: r
                                }
                              })) : []
                            })).sort((function(t, e) {
                              return 2 & t.element.compareDocumentPosition(e.element) ? 1 : -1
                            }));
                          if (c.length) {
                            var a = document.createElement("div"),
                              u = [];
                            c.forEach((function(t) {
                              var e = t.element,
                                n = t.className,
                                r = document.createElement("div");
                              r.className = n;
                              var o = document.createElement("a");
                              o.className = "".concat(n, "-child");
                              var i = e.id || "toc-".concat(Math.random().toString(36));
                              e.id = i, o.href = "#".concat(i), o.textContent = e.textContent.trim(), r.appendChild(o), a.appendChild(r), u.push({
                                heading: e,
                                tocItem: r
                              })
                            })), e.innerHTML = "", e.appendChild(a);
                            var l = function() {
                              var t = window.scrollY || document.documentElement.scrollTop || 0,
                                e = -1;
                              u.forEach((function(n, r) {
                                n.heading.offsetTop <= t + 150 && (e = r)
                              })), u.forEach((function(t, n) {
                                var r = t.tocItem;
                                n === e ? r.classList.add("is-active") : r.classList.remove("is-active")
                              }))
                            };
                            l(), window.addEventListener("scroll", l, {
                              passive: !0
                            }), m = function() {
                              window.removeEventListener("scroll", l)
                            }
                          } else {
                            e.innerHTML = "";
                            var d = i ? document.querySelector(i) : e.parentElement;
                            d && d.remove()
                          }
                        } else console.warn("GNTC TOC: Missing source or destination container.")
                      }()
                    }
                  },
                  v = {
                    init: function() {
                      var t = {};
                      document.querySelectorAll("[gntc-trim-duplicate]").forEach((function(e) {
                        var n = e.textContent.trim();
                        t[n] ? e.remove() : t[n] = !0
                      }))
                    }
                  },
                  p = {
                    init: function() {
                      document.querySelectorAll("[gntc-clipboard-copy]").forEach((function(t) {
                        t.addEventListener("click", (function() {
                          var t = window.shareURL || window.location.href;
                          navigator.clipboard.writeText(t).then((function() {})).catch((function() {
                            console.error("Failed to copy URL to clipboard.")
                          }))
                        }))
                      }))
                    }
                  },
                  y = {
                    init: function() {
                      var t = new Set,
                        e = "undefined" != typeof CSS && "function" == typeof CSS.escape ? CSS.escape : function(t) {
                          return String(t).replace(/["\\]/g, "\\$&")
                        };
                      document.querySelectorAll(".w-dyn-empty").forEach((function(n) {
                        var r = n.closest("[gntc-hide-if-empty]");
                        if (r) {
                          t.add(r);
                          var o = r.getAttribute("gntc-hide-if-empty");
                          if (o) {
                            var i = e(o);
                            document.querySelectorAll('[gntc-hide-if-empty="'.concat(i, '"]')).forEach((function(e) {
                              t.add(e)
                            }))
                          }
                        }
                      }));
                      var n = new Set;
                      t.forEach((function(t) {
                        var e = t.getAttribute("gntc-hide-if-empty");
                        e && n.add(e)
                      })), document.querySelectorAll("[gntc-hide-if-empty-group]").forEach((function(e) {
                        var r = e.getAttribute("gntc-hide-if-empty-group");
                        if (r) {
                          var o = r.split(",").map((function(t) {
                            return t.trim()
                          })).filter(Boolean);
                          0 < o.length && o.every((function(t) {
                            return n.has(t)
                          })) && t.add(e)
                        }
                      })), t.forEach((function(t) {
                        return t.remove()
                      }))
                    }
                  },
                  h = {
                    init: function() {
                      document.querySelectorAll('[gntc-nested-sort="list"]').forEach((function(t) {
                        var e = Array.from(t.querySelectorAll('[gntc-nested-sort="item"]'));
                        e.forEach((function(t) {
                          t.sortKey = t.querySelector('[gntc-nested-sort="value"]').textContent.trim().toLowerCase()
                        }));
                        var n = "reverse" === t.getAttribute("gntc-nested-sort-direction");
                        e.sort((function(t, e) {
                          return n ? e.sortKey.localeCompare(t.sortKey) : t.sortKey.localeCompare(e.sortKey)
                        }));
                        var r = document.createDocumentFragment();
                        e.forEach((function(t) {
                          delete t.sortKey, r.appendChild(t)
                        })), t.innerHTML = "", t.appendChild(r);
                        var o = t.getAttribute("gntc-nested-sort-id");
                        t.dispatchEvent(new CustomEvent("gntc:nested-sort:complete", {
                          bubbles: !0,
                          detail: {
                            instanceId: o,
                            list: t,
                            count: e.length,
                            direction: n ? "reverse" : "forward"
                          }
                        }))
                      }))
                    }
                  },
                  S = {
                    init: function() {
                      var t = document.querySelector('[gntc-citations="source"]'),
                        e = f(document.querySelectorAll('[gntc-citations="entry"]'));
                      t && e.length && t.querySelectorAll("sup").forEach((function(t) {
                        var n = t.textContent.match(/^\[(\d+)\]$/);
                        if (n) {
                          var r = parseInt(n[1], 10) - 1,
                            o = e[r];
                          if (o && o.id) {
                            var i = document.createElement("a");
                            i.href = "#".concat(o.id), i.innerHTML = t.innerHTML, t.innerHTML = "", t.appendChild(i)
                          }
                        }
                      }))
                    }
                  },
                  A = {
                    GNTCDateFormat: u,
                    GNTCNumberTicker: d,
                    GNTCTableOfContents: g,
                    GNTCTrimDuplicates: v,
                    GNTCCopyToClipboard: p,
                    GNTCHideIfEmpty: y,
                    GNTCNestedSort: h,
                    GNTCCitations: S,
                    init: function() {
                      var t, e, n, r, o, i, c, a;
                      null === (t = u.init) || void 0 === t || t.call(u), null === (e = d.init) || void 0 === e || e.call(d), null === (n = g.init) || void 0 === n || n.call(g), null === (r = v.init) || void 0 === r || r.call(v), null === (o = p.init) || void 0 === o || o.call(p), null === (i = y.init) || void 0 === i || i.call(y), null === (c = h.init) || void 0 === c || c.call(h), null === (a = S.init) || void 0 === a || a.call(S)
                    }
                  };
                return A.init(), A
              }();
            }); // Webflow.push()
          </script>
        </div>
        <div class="gntc-javascript-1 w-embed w-script">
          <script>
            document.querySelectorAll('[gntc-read-duration="source"]').forEach((source) => {
              const wrapper = source.closest('[gntc-read-duration="wrapper"]') || document.querySelector('[gntc-read-duration="wrapper"]');
              const destination = wrapper?.querySelector('[gntc-read-duration="destination"]') || document.querySelector('[gntc-read-duration="destination"]');

              if (!destination) return;

              const words = source.innerText.trim().split(/\s+/).filter(Boolean).length;
              const minutes = Math.ceil(words / 200);

              destination.textContent = minutes;
              if (wrapper) wrapper.style.display = '';
            });
            document.querySelectorAll('.rich-text-news').forEach((el) => {
              el.querySelectorAll('blockquote').forEach((bq) => {
                const p = bq.nextElementSibling;
                if (p && p.tagName === 'P' && p.querySelector('em')) {
                  const em = p.querySelector('em');
                  em.classList.add('text-weight-bold', 'font-caption');
                  const wrapper = document.createElement('figure');
                  wrapper.classList.add('gntc-rich-text-quote');
                  wrapper.setAttribute('gntc-rich-text-quote', '');
                  bq.parentNode.insertBefore(wrapper, bq);
                  wrapper.appendChild(bq);
                  wrapper.appendChild(p);
                }
              });
            });

            function rotateText() {
              const containers = document.querySelectorAll('.text-animation-group');

              containers.forEach((container) => {
                const texts = container.querySelectorAll('.text-animation-item');
                let index = 0;

                function updateState() {
                  if (texts.length === 0) return;
                  texts.forEach((text) => text.classList.remove('is-active'));
                  texts[index].classList.add('is-active');
                  index = (index + 1) % texts.length;
                }

                setInterval(updateState, 2500);
                updateState();
              });
            }

            var Webflow = Webflow || [];
            Webflow.push(rotateText);
            var Webflow = Webflow || [];
            Webflow.push(function() {
              /* Limit category lists to 3 items by default if there are more than 10 */
              document.querySelectorAll('.filtered-list-categories-list').forEach((l) => {
                // View more button
                // const viewMore = l.parentElement.parentElement.querySelector(".filtered-list-view-more");
                let viewMore = l.parentElement.nextElementSibling;
                if (!viewMore.classList.contains('filtered-list-view-more')) viewMore = undefined;
                if (l.children.length < 10) {
                  viewMore?.remove();
                } else {
                  viewMore?.addEventListener('click', () => {
                    viewMore.style.opacity = 0;
                    setTimeout(() => viewMore.remove(), 200); // animation is set in webflow to 200ms
                    Array.from(l.children).forEach((item, index) => {
                      if (index > 3) {
                        item.style.setProperty('--animation-order', index - 4);
                        item.classList.add('show-more-visible');
                      }
                    });
                  });
                }

                // All categories button
                // const allCategories = l.parentElement.parentElement.querySelector(".filtered-list-all-categories > input[type=checkbox]");
                const allCategories = l.parentElement.previousElementSibling.querySelector('.filtered-list-all-categories > input[type=checkbox]');
                if (allCategories) {
                  // Initial state - check if other categories are checked to update the all categories checked state if necessary
                  const categories = Array.from(l.querySelectorAll('.filtered-list-filter input[type=checkbox]'));
                  const updateAllCategoriesChecked = () => allCategories.checked !== categories.every((c) => !c.checked) && allCategories.click();
                  updateAllCategoriesChecked();

                  allCategories?.addEventListener('change', () => {
                    if (!allCategories.checked) return;
                    categories.forEach((i) => {
                      if (i.checked) i.click(); // for some reason setting checked and dispatching an event didn't work
                    });
                  });
                  // When another category is checked, uncheck the all categories button
                  categories.forEach((i) => {
                    i.addEventListener('change', () => {
                      updateAllCategoriesChecked();
                    });
                  });
                }
              });

              /* Activate a menu panel and lock the scroll of the page */
              var menu_active = false;
              let nav_active_mask = $('#nav__active-mask1');
              var hamburger = $('.nav-hamburger-wrapper');
              var sm_menu_panel = $('#nav--sm__panel');
              var menu_text = $('#menu-toggle');
              const nav__banner = $('.nav__banner');
              if (hamburger) {
                hamburger.on('click', function(e) {
                  e.preventDefault();
                  if (true !== menu_active) {
                    menu_active = true;
                    hamburger.addClass('is-active');
                    menu_text.text('Close');
                    nav_active_mask.removeClass('is-inactive');
                    sm_menu_panel.removeClass('is-inactive').one('transitionend', function(e) {
                      $('body').addClass('locked');
                    });
                  } else {
                    menu_active = false;
                    hamburger.removeClass('is-active');
                    menu_text.text('Menu');
                    nav_active_mask.addClass('is-inactive');
                    // reset any subpanels that are open
                    if (nav__sm_links__active_subpanel) {
                      $('#' + nav__sm_links__active_subpanel).addClass('is-inactive');
                    }
                    sm_menu_panel.addClass('is-inactive').one('transitionend', function(e) {
                      $('body').removeClass('locked');
                    });
                  }
                  $(this).attr('aria-expanded', menu_active);
                });
              }
              let nav__sm_links = $('.nav--sm-link');
              let nav__sm_links__active_subpanel = undefined;
              nav__sm_links.on('click', function(e) {
                let _this = $(this);
                let _aria_owns = _this.attr('aria-owns');
                if (_aria_owns) {
                  e.preventDefault();
                  nav__sm_links__active_subpanel = _aria_owns;
                  $('#' + _aria_owns).removeClass('is-inactive');
                }
                if (_this.hasClass('back') && nav__sm_links__active_subpanel) {
                  e.preventDefault();
                  $('#' + nav__sm_links__active_subpanel).addClass('is-inactive');
                }
              });

              let nav_dropdowns = $('.nav--dropdown');
              nav_dropdowns.on('mouseenter focus', function(e) {
                let _this = $(this);

                clearTimeout(nav_active_mask_timeout);

                nav_active_mask.removeClass('is-inactive');
              });

              var nav_active_mask_timeout;
              nav_dropdowns.on('mouseleave', function(e) {
                let _this = $(this);

                nav_active_mask_timeout = setTimeout(function() {
                  nav_active_mask.addClass('is-inactive');
                }, 150);
              });

              /* 
   * Trigger video playback when clicking the cover card

  document.querySelectorAll('iframe.embedly-embed').forEach(function (iframe) {
    var player = new playerjs.Player(iframe);
    var wrapper = iframe.closest('.video-overlay-wrapper');
    var overlay = wrapper ? wrapper.querySelector('.video-overlay') : null;

    player.on('play', function () {
      if (overlay) {
        overlay.style.display = 'none';
      }
    });
  });   */

              /*
    // Set selected label on index filters
    document.querySelectorAll(".index-filter--field").forEach((field) => {
      let label = field.querySelector(".index-filter--field-label");
      field.querySelectorAll(".index-filter--select-label").forEach((tag) => {
        tag.addEventListener("click", (event) => {
          label.textContent = tag.textContent;
        });
      });
    });
   */

              //end of set selected label on index filters

              // Wait for Finsweet CMS Combine to finish
              // window.fsAttributes = window.fsAttributes || [];
              // window.fsAttributes.push([
              //   'cmscombine',
              //   (listInstances) => {
              //     // Finsweet is done - now initialize Swiper
              //     initializeSwiper();
              //   },
              // ]);

              // Index field text swap on select for radio buttons
              // STEP 1: Save original label text on load
              document.querySelectorAll('.filter--field').forEach((field) => {
                const label = field.querySelector('.filter--field-label');
                if (label) {
                  label.setAttribute('data-original', label.textContent.trim());
                }
              });

              // STEP 2: Update label on radio change (normal filters)
              document.querySelectorAll('.filter--field').forEach((field) => {
                const label = field.querySelector('.filter--field-label');
                const radios = field.querySelectorAll('input[type="radio"][fs-list-value]');

                radios.forEach((radio) => {
                  radio.addEventListener('change', () => {
                    const value = radio.getAttribute('fs-list-value');
                    if (value && label) {
                      label.textContent = value;
                    }
                  });
                });
              });

              // STEP 3: Reset label on clear element click
              document.querySelectorAll('[fs-list-element="clear"]').forEach((clearEl) => {
                clearEl.addEventListener('click', () => {
                  // Wait for Finsweet’s logic to run first
                  setTimeout(() => {
                    // Find the closest field group this clear belongs to
                    const field = clearEl.closest('.filter--field');
                    if (!field) return;

                    const label = field.querySelector('.filter--field-label');
                    const original = label?.getAttribute('data-original');

                    if (label && original) {
                      label.textContent = original;
                    }
                  }, 0); // delay to ensure checked state has been applied
                });
              });

              // accelerator icon cards hover state
              const cards = document.querySelectorAll('.atom--icon-card');

              cards.forEach((card) => {
                card.addEventListener('mouseenter', () => {
                  cards.forEach((c) => {
                    c.classList.add('inactive');
                  });
                  card.classList.remove('inactive');
                });

                card.addEventListener('mouseleave', () => {
                  cards.forEach((c) => {
                    c.classList.remove('inactive');
                  });
                });
              });

              /* FAQ or Questions and Answers expand on click */
              document.querySelectorAll('.expanded-content--atom').forEach((atom) => {
                const title = atom.querySelector('.expanded-content--title');
                const body = atom.querySelector('.expanded-content--body');
                const icon = atom.querySelector('.expanded-content--icon');

                if (title) {
                  title.addEventListener('click', function(e) {
                    e.preventDefault(); // prevent anchor navigation
                    if (body) {
                      body.classList.toggle('hide');
                    }
                    if (icon) {
                      icon.classList.toggle('show');
                    }
                  });
                }
              });

              // Open non-related links in a new tab
              document.querySelectorAll('a[href]').forEach((link) => {
                if (link.hostname !== window.location.hostname) {
                  link.setAttribute('target', '_blank');
                  link.setAttribute('rel', 'noopener noreferrer');
                }
              });

              /*
               * Search Bar pop-up
               */
              // One container, multiple triggers
              const container = document.querySelector('.search-container');
              const triggers = document.querySelectorAll('.search-trigger') || [];
              const searchFixed = document.querySelector('.search-fixed');
              const searchBar = document.querySelector('.search-bar-wrapper');
              const searchInput = document.querySelector('.search-input');

              if (!container || triggers.length === 0 || !searchFixed || !searchBar || !searchInput) {
                console.error('Search UI: missing required elements.');
              } else {
                const setOpen = (open) => {
                  searchFixed.classList.toggle('visible', open);
                  document.body.classList.toggle('locked', open);
                  triggers.forEach((t) => t.setAttribute('aria-expanded', String(open)));
                  if (open) setTimeout(() => searchInput.focus(), 100);
                };

                const toggle = () => setOpen(!searchFixed.classList.contains('visible'));

                // Attach to all triggers in this container
                triggers.forEach((trigger) => {
                  // a11y hint
                  trigger.setAttribute('aria-controls', 'search-fixed');
                  trigger.setAttribute('aria-expanded', 'false');
                  trigger.addEventListener('click', toggle);
                  trigger.addEventListener('keydown', (e) => {
                    if (e.key === 'Enter' || e.key === ' ') {
                      e.preventDefault();
                      toggle();
                    }
                  });
                });

                // Give the fixed panel an id to match aria-controls (optional)
                if (!searchFixed.id) searchFixed.id = 'search-fixed';

                // Close when clicking outside the search bar
                searchFixed.addEventListener('click', (event) => {
                  if (!event.target.closest('.search-bar-wrapper')) setOpen(false);
                });

                // Close on Escape
                document.addEventListener('keydown', (e) => {
                  if (e.key === 'Escape' && searchFixed.classList.contains('visible')) setOpen(false);
                });
              }
            }); // Webflow.push()
            (function() {
              const favicons = ['<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/69e686aa663da0b0bb6a0757_favicon-01.png', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/69e686aa31d04293e20e6f9a_favicon-02.png', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/69e686aa8d58de32c768dde8_favicon-03.png', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/69e686aaba63a05c2efe9d24_favicon-04.png', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/69e686aaef8acdbc206ad6b2_favicon-05.png', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/69e686aaa19158ca334bb2b3_favicon-06.png', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/69e686aad4dc15f7f39fc4ca_favicon-07.png', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/69e686aa7542fe670f38b1a1_favicon-08.png', '<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/69e686aadd57a28b43b14773_favicon-09.png'];
              const interval = 1500;
              let current = 0;
              let link = document.querySelector("link[rel*='icon']");
              if (!link) {
                link = document.createElement('link');
                link.rel = 'icon';
                link.type = 'image/png';
                document.head.appendChild(link);
              }

              function tick() {
                link.href = favicons[current];
                current = (current + 1) % favicons.length;
                setTimeout(tick, interval);
              }
              tick();
            })();
          </script>
        </div>
        <div class="gntc-style-designer w-embed">
          <style>
            /* 
 * Designer style overrides are used to display content in a useable way while using the designer. 
 * These modifcations will be removed when pushed live.
 */

            .wf-design-mode .your-class {
              opacity: 1;
            }

            /*
 * DO NOT DELETE
 */

            .wf-design-mode .link-overlay {
              pointer-events: none;
              height: 0;
            }

            .wf-design-mode .text-animation-item {
              opacity: 1;
              position: relative;
            }

            .wf-design-mode .expanded-content--body.hide {
              height: 100%;
              opacity: 1;
            }

            .wf-design-mode .gntc-branch-note {
              display: block;
            }

            .wf-design-mode .gntc-branch-note:before {
              content: "BRANCH NOTES: ";
            }

            .wf-design-mode [gntc-slot-tooltip] {
              position: relative;
            }

            .wf-design-mode [gntc-slot-tooltip]::after {
              content: "Instructions: " attr(gntc-slot-tooltip);
              position: absolute;
              top: 0;
              left: 0;
              transform: translateY(-100%);
              z-index: 9999;
              pointer-events: none;

              color: var(--_styling---black) !important;
              background: var(--_styling---green);
              border: 1px solid var(--_styling---magenta);

              font-family: Arial, sans-serif;
              font-size: 0.75rem;
              /* 12px */
              font-weight: bold;
              line-height: 1;

              padding: 0.25em 0.5em;
              white-space: nowrap;
              width: max-content;
            }

            .wf-design-mode .main-content {
              display: none;
            }
          </style>
        </div>
      </div>
    </footer>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=69a0ca6ef8ecfacbc1d10ea2" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    
    
    
    
    <script type="text/javascript">
      gsap.registerPlugin(ScrollTrigger);
    </script>
  <?php wp_footer(); ?>
  </body>
</html>

