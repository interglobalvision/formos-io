<?php
$front_page_options = get_site_option('_igv_front_page_options');
?>

<div id="section-what-is" class="container margin-bottom-basic">
  <div class="grid-row">
    <div class="grid-item item-s-12 item-m-10 offset-m-1 item-l-8 offset-l-2 text-align-center">
<?php
if (!empty($front_page_options['what_is_title_text'])) {
?>
      <h2 class="font-size-mid margin-bottom-small js-fix-widows"><?php echo apply_filters('the_content', $front_page_options['what_is_title_text']); ?></h2>
<?php
}

if (!empty($front_page_options['what_is_first_text'])) {
?>

      <h3 class="font-size-basic js-fix-widows"><?php echo apply_filters('the_content', $front_page_options['what_is_first_text']); ?></h3>
<?php
}
?>
    </div>
  </div>
</div>

<?php
  if (!empty($front_page_options['what_is_video']) || !empty($front_page_options['what_is_vimeo_url'])) {
?>

<div class="container margin-bottom-basic">
  <div class="grid-row">
    <div class="grid-item item-s-12 item-m-10 offset-m-1 text-align-center">
<?php
  if (!empty($front_page_options['what_is_video_text'])) {
?>
      <h2 class="font-size-basic margin-bottom-basic js-fix-widows"><?php echo apply_filters('the_content', $front_page_options['what_is_video_text']); ?></h2>
<?php
  }
?>
      <div class="inline-video-player u-pointer" <?php echo !empty($front_page_options['what_is_vimeo_url']) ? 'data-vimeo-url="' . $front_page_options['what_is_vimeo_url'] . '"' : ''; ?>>
<?php
    if (empty($front_page_options['what_is_vimeo_url']) && !empty($front_page_options['what_is_video'])) {
?>
        <nav class="inline-video-play-trigger u-flex-center">
          <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/play_button.svg'); ?>
        </nav>
        <video class="inline-video" preload width="100%" <?php echo !empty($front_page_options['what_is_video_poster']) ? 'poster="' . $front_page_options['what_is_video_poster'] . '"' : ''; ?>>
          <source src="<?php echo $front_page_options['what_is_video'];?>" type="video/mp4">
        </video>
<?php
    }
?>
      </div>
    </div>
  </div>
</div>
<?php
  }
?>
