<?php

$video = IGV_get_option('_igv_site_options', '_igv_splash_video_mp4');

if (!empty($video)) {
?>
<div id="splash-video-container">
  <video id="splash-video">
    <source src="<?php echo $video;?>" type="video/mp4">
   </video>
</div>
<?php
}
?>
