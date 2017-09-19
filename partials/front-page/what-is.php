<?php
$front_page_options = get_site_option('_igv_front_page_options');
?>

<div id="section-what-is" class="container margin-bottom-mid">
  <div class="grid-row">
    <div class="grid-item item-s-12 item-m-10 offset-m-1 item-l-8 offset-l-2 text-align-center">
<?php
if (!empty($front_page_options['what_is_title_text'])) {
?>
      <h2 class="font-size-mid margin-bottom-small js-fix-widows"><?php echo $front_page_options['what_is_title_text']; ?></h2>
<?php
}

if (!empty($front_page_options['what_is_first_text'])) {
?>

      <h3 class="font-size-basic js-fix-widows"><?php echo $front_page_options['what_is_first_text']; ?></h3>
<?php
}
?>
    </div>
  </div>
</div>

<?php
  if (!empty($front_page_options['what_is_video'])) {
?>

<div class="container margin-bottom-mid">
  <div class="grid-row">
    <div class="grid-item item-s-12 item-m-10 offset-m-1 text-align-center">
<?php
  if (!empty($front_page_options['what_is_video_text'])) {
?>
  <h2 class="font-size-basic margin-bottom-basic js-fix-widows"><?php echo $front_page_options['what_is_video_text']; ?></h2>
<?php
  }
?>
      <div id="what-is-video-player" class="u-pointer">
        <nav id="what-is-video-play-trigger" class="u-flex-center">
          <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/play_button.svg'); ?>
        </nav>
        <video id="what-is-video" preload width="100%" muted loop>
          <source src="<?php echo $front_page_options['what_is_video'];?>" type="video/mp4">
        </video>
      </div>
    </div>
  </div>
</div>
<?php
  }
?>
