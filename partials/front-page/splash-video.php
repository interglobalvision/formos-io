<?php

$front_page_options = get_site_option('_igv_front_page_options');

if (!empty($front_page_options['splash_video_mp4']) && !empty($front_page_options['splash_video_reversed_mp4'])) {
?>

<div id="splash-video-container">
  <div class="grid-row">
    <div class="grid-item item-s-12 no-gutter">
      <video id="splash-video-1" class="splash-video" autoplay preload width="100%" muted>
        <source src="<?php echo $front_page_options['splash_video_mp4'];?>" type="video/mp4">
       </video>
    </div>
  </div>
</div>
<?php
}
?>
