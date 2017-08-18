<?php

$video = IGV_get_option('_igv_site_options', '_igv_splash_video_mp4');
$video_reversed = IGV_get_option('_igv_site_options', '_igv_splash_video_reversed_mp4');

if (!empty($video) && !empty($video_reversed)) {
?>

<div id="splash-video-container" class="padding-bottom-basic">
  <div class="grid-row">
    <div class="grid-item item-s-12">
      <video id="splash-video-1" class="splash-video" preload width="100%" muted>
        <source src="<?php echo $video;?>" type="video/mp4">
       </video>
      <video id="splash-video-2" class="splash-video u-hidden" preload width="100%" muted>
        <source src="<?php echo $video_reversed;?>" type="video/mp4">
       </video>
    </div>
  </div>
</div>
<?php
}
?>
