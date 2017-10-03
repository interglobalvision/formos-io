<?php
get_header();
?>

<main id="main-content">

  <?php get_template_part('partials/front-page/splash-video'); ?>

  <div id="splash" class="container margin-bottom-basic">
    <div class="grid-row">
      <div class="grid-item item-s-12 item-l-8 offset-l-2 text-align-center">
        <div id="splash-logo-holder">
          <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_logo.svg'); ?>
        </div>
<?php

$front_page_options = get_site_option('_igv_front_page_options');

if (!empty($front_page_options['splash_title_text'])) {

?>
        <h2 class="font-size-extra color-blue js-fix-widows line-tighter"><?php echo apply_filters('the_content', $front_page_options['splash_title_text']); ?></h2>
<?php
}
?>
      </div>
    </div>
  </div>

  <div class="container margin-bottom-basic text-align-center">
<?php

if (!empty($front_page_options['btf_title_text'])) {

?>
    <div class="grid-row">
      <div class="grid-item item-s-12 item-m-10 offset-m-1 item-l-8 offset-l-2">
        <h2 class="font-size-extra color-blue font-uppercase margin-bottom-small js-fix-widows"><?php echo $front_page_options['btf_title_text']; ?></h2>
      </div>
    </div>
<?php
}

if (!empty($front_page_options['btf_first_text'])) {
?>
    <div class="grid-row">
      <div class="grid-item item-s-12 item-m-12 item-l-8 offset-l-2">
      <h3 class="font-size-large color-blue js-fix-widows"><?php echo $front_page_options['btf_first_text']; ?></h3>
      </div>
    </div>
  </div>
<?php
}
?>

  <?php get_template_part('partials/front-page/what-is'); ?>

  <?php get_template_part('partials/front-page/countdown'); ?>

  <?php get_template_part('partials/front-page/how-works'); ?>

  <?php get_template_part('partials/front-page/modules'); ?>

  <?php get_template_part('partials/front-page/demos'); ?>

  <?php get_template_part('partials/front-page/early-testers'); ?>

  <?php get_template_part('partials/front-page/email-signup'); ?>

</main>

<?php
get_footer();
?>
