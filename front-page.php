<?php
get_header();
?>

<main id="main-content">

  <div id="splash" class="container">
    <div class="grid-row">
      <div class="grid-item item-s-12 item-l-8 offset-l-2 text-align-center">
        <div id="splash-logo-holder">
          <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_logo.svg'); ?>
        </div>

        <h2 class="font-size-extra color-blue">The first modular entertainment system.</h2>
      </div>
    </div>
    <?php get_template_part('partials/front-page/splash-video'); ?>
  </div>


  <div class="container margin-bottom-large text-align-center">
    <div class="grid-row">
      <div class="grid-item item-s-12 item-m-10 offset-m-1 item-l-8 offset-l-2">
        <h2 class="font-size-extra color-blue font-uppercase margin-bottom-small js-fix-widows">Play with the power of nature</h2>
      </div>
    </div>
    <div class="grid-row">
      <div class="grid-item item-s-12 item-m-12 item-l-10 offset-l-1">
        <h3 class="font-size-large color-blue js-fix-widows">Enter formOS, an entertainment system inspired by the modular qualities of Nature — a uniquely powerful gaming experience.</h3>
      </div>
    </div>
  </div>

  <?php get_template_part('partials/front-page/what-is'); ?>

  <?php get_template_part('partials/front-page/countdown'); ?>

  <?php get_template_part('partials/front-page/how-works'); ?>

  <?php get_template_part('partials/front-page/modules'); ?>

  <?php get_template_part('partials/front-page/demos'); ?>

  <?php get_template_part('partials/front-page/email-signup'); ?>

</main>

<?php
get_footer();
?>
