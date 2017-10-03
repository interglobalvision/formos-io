<?php
  $front_page_options = get_site_option('_igv_front_page_options');
?>

<div id="section-early-testers" class="container margin-bottom-small">
<?php
  if (!empty($front_page_options['early_testers_title_text'])) {
?>
  <div class="grid-row">
    <div class="grid-item item-s-12 text-align-center font-size-mid margin-bottom-basic">

      <h2 class="js-fix-widows"><?php echo apply_filters('the_content', $front_page_options['early_testers_title_text']); ?></h2>

    </div>
  </div>
<?php
  }
?>

<?php
  if (!empty($front_page_options['early_testers_testimonials'])) {
?>
  <div class="grid-row justify-center">
<?php
    foreach ($front_page_options['early_testers_testimonials'] as $testimonial) {
      if (!empty($testimonial['image']) && !empty($testimonial['quote'])) {
?>
    <div class="grid-item item-s-6 item-l-3 text-align-center">
      <div class="grid-item item-s-10">
        <?php echo wp_get_attachment_image($testimonial['image_id'], 'item-l-3'); ?>
      </div>
      <h3 class="font-size-basic js-fix-widows margin-bottom-small margin-top-tiny">
        <?php echo apply_filters('the_content', $testimonial['quote']); ?>
      </h3>
    </div>
<?php
      }
    }
?>
  </div>
<?php
  }
?>


<?php
  if (!empty($front_page_options['early_testers_video_text']) && !empty($front_page_options['early_testers_video_desc']) && !empty($front_page_options['early_testers_video_mp4'])) {
?>
  <div class="grid-row">
    <div class="grid-item item-s-12 item-m-10 offset-m-1 item-l-8 offset-l-2">
      <h2 class="font-size-extra color-blue font-uppercase js-fix-widows text-align-center">
        <?php echo apply_filters('the_content', $front_page_options['early_testers_video_text']); ?>
      </h2>
    </div>
  </div>
  <div class="grid-row margin-bottom-basic">
    <div class="grid-item item-s-12 item-m-10 offset-m-1 text-align-center">
      <h2 class="font-size-basic js-fix-widows">
          <?php echo apply_filters('the_content', $front_page_options['early_testers_video_desc']); ?>
      </h2>
      <div class="inline-video-player u-pointer">
        <nav class="inline-video-play-trigger u-flex-center">
          <svg class="inline-video-play-button-svg" xmlns="http://www.w3.org/2000/svg" width="140" height="140" viewBox="0 0 140 140"><circle cx="70" cy="70" r="70"></circle><path fill="#FFF" d="M114.824 70L42.658 28.335v83.33L114.824 70 42.658 28.335v83.33z"></path></svg>
        </nav>

        <video class="inline-video" preload width="100%" <?php echo !empty($front_page_options['early_testers_video_poster']) ? 'poster="' . $front_page_options['early_testers_video_poster'] . '"' : ''; ?>>
          <source src="<?php echo $front_page_options['early_testers_video_mp4'];?>" type="video/mp4">
        </video>

      </div>
    </div>
  </div>
<?php
  }
?>

</div>
