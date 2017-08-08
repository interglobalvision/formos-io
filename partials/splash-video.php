<?php

$video = IGV_get_option('_igv_site_options', '_igv_splash_video_mp4');

if (!empty($video)) {
?>
<div id="splash-video-container" class="padding-top-large margin-top-large grid-row">
  <div class="grid-item item-s-12">
    <video id="splash-video" preload width="100%">
      <source src="<?php echo $video;?>" type="video/mp4">
     </video>
  </div>
</div>
<?php
}
?>
