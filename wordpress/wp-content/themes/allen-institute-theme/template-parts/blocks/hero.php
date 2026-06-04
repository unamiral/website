<?php
/**
 * Template Part: Hero Block
 */

$hero_title = get_field('hero_title') ?: 'accelerating science';
$hero_subtitle = get_field('hero_subtitle') ?: 'for a healthier world';
$hero_video_desktop = get_field('hero_video_desktop') ?: esc_url( get_template_directory_uri() ) . '/assets/videos/background_video_1.mp4';
$hero_video_mobile = get_field('hero_video_mobile') ?: esc_url( get_template_directory_uri() ) . '/assets/videos/background_video_4.mp4';
?>
      <header class="hero__030 color-background-black">
        <div class="w-layout-blockcontainer position--relative z-index-mid u-full-width w-container">
          <div class="row">
            <div class="col"><span><span class="font-large-2"><?php echo esc_html($hero_title); ?></span><br /><span class="font-large-2 color-text-green"><?php echo esc_html($hero_subtitle); ?></span><span class="font-large-2 color-text-green">/</span></span></div>
          </div>
        </div>
        <div class="hero__030--media">
          <div id="w-node-_9783d8c7-aab6-b12b-4f47-38dbc34420d3-c34420c5" class="atom__media-all--wrapper cover">
            <div class="hero__030--media-sm"><video preload="metadata" autoplay="autoplay" loop="" muted="" playsinline="playsinline" src="<?php echo esc_url( $hero_video_mobile ); ?>" poster="" class="u-full-width u-image-cover"></video></div>
            <div class="hero__030--media-lg"><video preload="metadata" autoplay="autoplay" loop="" muted="" playsinline="playsinline" src="<?php echo esc_url( $hero_video_desktop ); ?>" poster="" class="u-full-width u-image-cover"></video></div>
          </div>
          <div class="hero__030--overlay"></div>
        </div>
      </header>
