<?php

$front_page_options = get_site_option('_igv_front_page_options');

if (!empty($front_page_options['splash_video_mp4']) && !empty($front_page_options['splash_video_ratio'])) {
?>

<div id="splash-video-container" class="text-align-center">
  <div class="video-wrapper">
    <video id="splash-video-1" class="splash-video wrapped-video" autoplay preload muted playsinline data-ratio="<?php echo $front_page_options['splash_video_ratio']; ?>">
      <source src="<?php echo $front_page_options['splash_video_mp4'];?>" type="video/mp4">
    </video>
  </div>
</div>
<?php
}
?>
