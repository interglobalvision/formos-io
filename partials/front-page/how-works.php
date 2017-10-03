<?php
$front_page_options = get_site_option('_igv_front_page_options');
?>
<div id="section-how" class="container margin-bottom-mid">

<?php
if (!empty($front_page_options['how_works_title_text'])) {
?>
  <div class="grid-row">
    <div class="grid-item item-s-12 text-align-center margin-bottom-basic">
    <h2 class="font-size-mid js-fix-widows"><?php echo apply_filters('the_content', $front_page_options['how_works_title_text']); ?></h2>
    </div>
  </div>
<?php
}
?>

  <div id="how-column">
    <div class="grid-row align-items-center margin-bottom-small">
      <div class="grid-item item-s-6">
        <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_1.svg'); ?>
      </div>
      <div class="grid-item item-s-6">
<?php
if (!empty($front_page_options['how_works_first_title'])) {
?>
        <h4 class="font-size-basic"><?php echo apply_filters('the_content', $front_page_options['how_works_first_title']); ?></h4>
<?php
}
?>
      </div>
    </div>
    <div class="grid-row margin-bottom-small">
      <div class="grid-item item-s-6 mobile-how-tration text-align-center font-size-tiny color-blue">
        <div class="margin-bottom-tiny"><?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_2.svg'); ?></div>
        <div>Download into <br>your own device</div>
      </div>
    </div>
    <div class="grid-row align-items-center margin-bottom-small">
      <div class="grid-item item-s-6">
        <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_3.svg'); ?>
      </div>
      <div class="grid-item item-s-6">
<?php
if (!empty($front_page_options['how_works_second_title'])) {
?>
        <h4 class="font-size-basic"><?php echo apply_filters('the_content', $front_page_options['how_works_second_title']); ?></h4>
<?php
}
?>
      </div>
    </div>
    <div class="grid-row margin-bottom-small">
      <div class="grid-item item-s-6 mobile-how-illustration text-align-center font-size-tiny color-blue">
        <div class="margin-bottom-tiny"><?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_4.svg'); ?></div>
        <div>Wireless <br>communication</div>
      </div>
    </div>
    <div class="grid-row align-items-center margin-bottom-small">
      <div class="grid-item item-s-6">
        <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_5.svg'); ?>
      </div>
      <div class="grid-item item-s-6">
<?php
if (!empty($front_page_options['how_works_third_title'])) {
?>
        <h4 class="font-size-basic"><?php echo apply_filters('the_content', $front_page_options['how_works_third_title']); ?></h4>
<?php
}
?>
      </div>
    </div>
  </div>

  <div id="how-row">
    <div class="grid-row align-items-center justify-between margin-bottom-small text-align-center color-gray">
      <div class="grid-item how-item-large">
        <div class="margin-bottom-tiny">
          <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_1.svg'); ?>
        </div>
      </div>
      <div class="grid-item how-item-small how-illustration-caption color-blue font-size-small">
        <div class="margin-bottom-tiny">
          <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_2.svg'); ?>
        </div>
        Download into your own device
      </div>
      <div class="grid-item how-item-large">
        <div class="margin-bottom-tiny">
          <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_3.svg'); ?>
        </div>
      </div>
      <div class="grid-item how-item-small how-illustration-caption color-blue font-size-small">
        <div class="margin-bottom-tiny">
          <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_4.svg'); ?>
        </div>
        Wireless communication
      </div>
      <div class="grid-item how-item-large">
        <div class="margin-bottom-tiny">
          <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_5.svg'); ?>
        </div>
      </div>
    </div>
    <div class="grid-row justify-between font-size-small text-align-center">
      <div class="grid-item how-item-large">
        <h4 class="margin-bottom-tiny"><?php echo !empty($front_page_options['how_works_first_title']) ? apply_filters('the_content', $front_page_options['how_works_first_title']) : ''; ?></h4>
      </div>
      <div class="grid-item how-item-large">
        <h4 class="margin-bottom-tiny"><?php echo !empty($front_page_options['how_works_second_title']) ? apply_filters('the_content', $front_page_options['how_works_second_title']) : ''; ?></h4>
      </div>
      <div class="grid-item how-item-large">
        <h4 class="margin-bottom-tiny"><?php echo !empty($front_page_options['how_works_third_title']) ? apply_filters('the_content', $front_page_options['how_works_third_title']) : ''; ?></h4>
      </div>
    </div>
    <div class="grid-row justify-between font-size-tiny text-align-center">
      <div class="grid-item how-item-large">
<?php
if (!empty($front_page_options['how_works_first_text'])) {
?>
        <?php echo apply_filters('the_content', $front_page_options['how_works_first_text']); ?>
<?php
}
?>
      </div>
      <div class="grid-item how-item-large">
<?php
if (!empty($front_page_options['how_works_second_text'])) {
?>
        <?php echo apply_filters('the_content', $front_page_options['how_works_second_text']); ?>
<?php
}
?>
      </div>
      <div class="grid-item how-item-large">
<?php
if (!empty($front_page_options['how_works_third_text'])) {
?>
        <?php echo apply_filters('the_content', $front_page_options['how_works_third_text']); ?>
<?php
}
?>
      </div>
    </div>
  </div>

</div>

<?php
if (!empty($front_page_options['six_sides_video'])) {
?>

<div class="container margin-bottom-basic">
  <div class="grid-row">
    <div class="grid-item item-s-12 text-align-center margin-bottom-small">
<?php
if (!empty($front_page_options['how_works_six_sides_title'])) {
?>
      <h3 class="font-size-basic js-fix-widows"><?php echo apply_filters('the_content', $front_page_options['how_works_six_sides_title']); ?></h3>
<?php
}
?>
    </div>
  </div>
  <div class="grid-row">
    <div class="grid-item item-s-8 offset-s-2 item-m-6 offset-m-3 item-l-4 offset-l-4 text-align-center">
      <video class="module-video" autoplay loop preload width="100%" muted playsinline>
        <source src="<?php echo $front_page_options['six_sides_video'];?>" type="video/mp4">
      </video>
    </div>
  </div>
</div>

<?php
}
?>

<div class="container margin-bottom-large">
  <div class="grid-row">
    <div class="grid-item item-s-12 text-align-center margin-bottom-basic font-size-basic">
<?php
if (!empty($front_page_options['how_works_six_sides_text'])) {
?>
      <h3 class="font-size-basic js-fix-widows"><?php echo apply_filters('the_content', $front_page_options['how_works_six_sides_text']); ?></h3>
<?php
}
?>
    </div>
  </div>
  <div id="connection-ways-icon-row" class="grid-row justify-center">
    <div class="grid-item item-s-6 ways-item text-align-center">
      <div class="margin-bottom-tiny">
        <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_sphere.svg'); ?>
      </div>
      <h4>Sphere</h4>
    </div>
    <div class="grid-item item-s-6 ways-item text-align-center">
      <div class="margin-bottom-tiny">
        <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_line.svg'); ?>
      </div>
      <h4>Line</h4>
    </div>
    <div class="grid-item item-s-6 ways-item text-align-center">
      <div class="margin-bottom-tiny">
        <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_arc.svg'); ?>
      </div>
      <h4>Arc</h4>
    </div>
    <div class="grid-item item-s-6 ways-item text-align-center">
      <div class="margin-bottom-tiny">
        <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_more.svg'); ?>
      </div>
<?php
if (!empty($front_page_options['how_works_six_sides_more_text'])) {
?>
      <h4><?php echo apply_filters('the_content', $front_page_options['how_works_six_sides_more_text']); ?></h4>
<?php
}
?>
    </div>
  </div>
</div>
