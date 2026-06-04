<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

<main id="primary" class="site-main color-background-black color-text-white" style="padding: 150px 0; min-height: 70vh;">
    <div class="w-layout-blockcontainer w-container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2" style="text-align: center;">
                <h1 class="font-large-2 color-text-orange" style="margin-bottom: 20px;">404</h1>
                <h2 class="font-large-4" style="margin-bottom: 30px;">Oops! That page can&rsquo;t be found.</h2>
                <div class="font-body text-rich-text" style="margin-bottom: 40px;">
                    <p>It looks like nothing was found at this location. Maybe try a search or return to the homepage.</p>
                </div>
                
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="arrow-link w-inline-block" style="justify-content: center;">
                    <div focusable="false" aria-hidden="true" class="arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 32 32" fill="none" class="icon-arrow">
                            <path d="M26.7158 15.8135L15.8984 26.6309L14.2158 24.9795L21.8457 17.3506L22.2012 16.9941L4.99707 16.9941V14.6338L22.2012 14.6338L14.2158 6.64746L15.8984 4.99609L26.7158 15.8135Z" fill="currentColor"></path>
                        </svg>
                    </div>
                    <div class="font-large-6">Return to Homepage</div>
                </a>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
