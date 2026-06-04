<?php
/**
 * Allen Institute Custom Front Page
 */
get_header(); ?>

<main>
      <?php get_template_part( 'template-parts/blocks/hero' ); ?>
      <?php get_template_part( 'template-parts/blocks/accelerators' ); ?>
      <?php get_template_part( 'template-parts/blocks/news-slider' ); ?>
      <div id="w-node-b299aee7-fd0a-328a-bf50-aa4da6171964-a6171964" data-wf--spacer--variant="xl" class="u-spacer w-variant-a221750b-19b1-3687-41f8-9fba098e6051"></div>
      <?php get_template_part( 'template-parts/blocks/explore-updates' ); ?>
      <div id="w-node-b299aee7-fd0a-328a-bf50-aa4da6171964-a6171964" data-wf--spacer--variant="giga" class="u-spacer"></div>
      <?php get_template_part( 'template-parts/blocks/discover-more' ); ?>
      <div id="w-node-b299aee7-fd0a-328a-bf50-aa4da6171964-a6171964" data-wf--spacer--variant="xl" class="u-spacer w-variant-a221750b-19b1-3687-41f8-9fba098e6051"></div>
      <?php get_template_part( 'template-parts/blocks/media-cards' ); ?>
</main>

<?php get_footer(); ?>
