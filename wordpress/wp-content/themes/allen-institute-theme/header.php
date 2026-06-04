<!DOCTYPE html>
<html <?php language_attributes(); ?> data-wf-domain="alleninstitute.org" data-wf-page="69a0ca6ef8ecfacbc1d10e70" data-wf-site="69a0ca6ef8ecfacbc1d10ea2">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="https://cdn.prod.website-files.com" rel="preconnect" crossorigin="anonymous" />
    
    <script type="text/javascript">
      ! function(o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
      }(window, document);
    </script>
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/69e679504e1e1cb1d6e47a47_favicon-01.png" rel="shortcut icon" type="image/x-icon" />
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/69e679ac5d6c5599fbf838c5_webclip.png" rel="apple-touch-icon" />
    
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('consent', 'default', {
        'ad_storage': 'denied',
        'ad_user_data': 'denied',
        'ad_personalization': 'denied',
        'analytics_storage': 'denied',
        'functionality_storage': 'denied',
        'personalization_storage': 'denied',
        'security_storage': 'granted',
        'wait_for_update': 2000
      });
      gtag('set', 'ads_data_redaction', true);
      gtag('set', 'url_passthrough', true);
    </script>

    <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" type="text/javascript" charset="UTF-8" data-domain-script="eb849e0c-e1e0-4f5f-b62f-c94620e0374b"></script>

    <script type="text/javascript">
      function OptanonWrapper() {
        var groups = window.OnetrustActiveGroups || '';

        function has(g) {
          return groups.indexOf(',' + g + ',') > -1;
        }
        gtag('consent', 'update', {
          'analytics_storage': has('C0002') ? 'granted' : 'denied',
          'ad_storage': has('C0004') ? 'granted' : 'denied',
          'ad_user_data': has('C0004') ? 'granted' : 'denied',
          'ad_personalization': has('C0004') ? 'granted' : 'denied',
          'functionality_storage': has('C0003') ? 'granted' : 'denied',
          'personalization_storage': has('C0003') ? 'granted' : 'denied'
        });
        window.dataLayer.push({
          event: 'OneTrustGroupsUpdated',
          OnetrustActiveGroups: groups
        });
      }
    </script>
    <!-- Google Tag Manager -->
    <script>
      (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-PFWKQBK');
    </script>
    <!-- End Google Tag Manager -->

    <style>
      html.wf-loading * {
        opacity: 0;
      }
      .section-preloader-overlay {
        opacity: 1;
        display: block;
      }
      .w-editor .section-preloader-overlay {
        opacity: 0;
        display: none;
      }
    </style>

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="component-nav">
      <div class="nav__wrapper search-container"><a id="skip-to-main" href="#main-content" class="skip-to-main">Skip to main content</a>
        <div class="search-fixed">
          <div class="search--component">
            <div class="search-bar-wrapper">
              <form action="<?php echo esc_url( home_url( '/' ) ); ?>search" class="search-field w-form"><input class="search-input w-input" maxlength="256" name="query" placeholder="enter search keywords" type="search" id="search" required="" /><input type="submit" class="search-button w-button" value="" /></form>
            </div>
          </div>
        </div>
        <div class="nav__spacer"></div>
        <div id="nav__active-mask" class="nav__active-mask is-inactive"></div>
        <div class="nav__bar">
          <nav class="nav">
            <div class="nav--desktop">
              <div class="nav__block--left">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-current="page" class="nav__logo w-inline-block w--current"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/69c6ccc145cb32aa22a59194_allen-logo-main-reverse.svg" loading="lazy" alt="Allen Institute Logo" class="nav__logo--image" /></a>
                <?php endif; ?>
              </div>
              <div class="nav__block--right">
                <div class="nav__links--wrapper">
                  <?php
                  wp_nav_menu( array(
                      'theme_location' => 'primary-desktop',
                      'container'      => false,
                      'items_wrap'     => '%3$s',
                      'walker'         => new Allen_Desktop_Walker(),
                      'fallback_cb'    => false,
                  ) );
                  ?><a gntc-nav="nav-search" href="#" class="search-trigger w-inline-block">
                    <div id="w-node-ad5ebde1-5461-c38d-1791-4c195672685f-5672685f" class="image__full-width--wrapper"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/69d6c4001d9dba7467f58cc6_dda6ca399bef964881dc3d0fb3a81b1e_asset-icon-search.svg" loading="lazy" alt="" class="u-full-width" /></div>
                  </a>
                </div>
              </div>
            </div>
            <div class="nav--mobile">
              <div class="sm-nav__block-right"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-current="page" class="nav__logo w-inline-block w--current"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/69c6ccc145cb32aa22a59194_allen-logo-main-reverse.svg" loading="lazy" alt="Logo" class="nav__logo--image" /></a></div>
              <div class="sm-nav__block--left"><a href="#" class="nav-hamburger-wrapper w-inline-block">
                  <div class="hamburger-lines">
                    <div class="hamburger-line x-hidden"></div>
                    <div class="hamburger-line middle">
                      <div class="hamburger-line x"></div>
                      <div class="hamburger-line x"></div>
                    </div>
                    <div class="hamburger-line x-hidden"></div>
                  </div>
                </a>
                <div id="nav--sm__panel" class="nav--sm_panel color-background-black is-inactive">
                  <div class="nav--sm-links--wrapper color-background-black">
                  <?php
                  wp_nav_menu( array(
                      'theme_location' => 'primary-mobile',
                      'container'      => false,
                      'items_wrap'     => '%3$s',
                      'walker'         => new Allen_Mobile_Walker(),
                      'fallback_cb'    => false,
                  ) );
                  ?>
                  </div>
                  </div><a href="#" class="arrow-link search-trigger w-inline-block">
                    <div focusable="false" aria-hidden="true" class="search-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 32 32" fill="none" class="icon-arrow">
                        <path d="M26.7158 15.8135L15.8984 26.6309L14.2158 24.9795L21.8457 17.3506L22.2012 16.9941L4.99707 16.9941V14.6338L22.2012 14.6338L14.2158 6.64746L15.8984 4.99609L26.7158 15.8135Z" fill="currentColor"></path>
                      </svg><svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 32 32" fill="none" class="icon-arrow-download">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1865 24.7158L5.36914 13.8984L7.02051 12.2158L14.6494 19.8457L15.0059 20.2012L15.0059 3.99707L17.3662 3.99707L17.3662 20.2012L25.3525 12.2158L27.0039 13.8984L16.1865 24.7158Z" fill="currentColor"></path>
                        <rect x="4.99951" y="29.5" width="2" height="23" transform="rotate(-90 4.99951 29.5)" fill="currentColor"></rect>
                      </svg></div>
                    <div class="font-large-6">search</div>
                  </a>
                </div>
              </div>
            </div>
          </nav>
        </div>
        <div id="main-content" class="main-content"></div>
      </div>
    </div>
