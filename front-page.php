<?php
get_header();
?>

<main id="main-content">

  <div class="container padding-bottom-basic">
    <div class="grid-row">
      <div class="grid-item item-s-12 item-l-8 offset-l-2 text-align-center">
        <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_logo.svg'); ?>

        <h2 class="font-size-extra">The first modular entertainment system.</h2>
      </div>
    </div>
  </div>

  <?php get_template_part('partials/front-page/splash-video'); ?>

  <div class="container padding-bottom-basic">
    <div class="grid-row">
      <div class="grid-item item-s-12 item-m-10 offset-m-1 item-l-8 offset-l-2 text-align-center">
        <h2 class="font-size-extra font-uppercase js-fix-widows">Play with the power of nature</h2>
        <h3 class="font-size-large js-fix-widows">Enter formOS, an entertainment system inspired by the modular qualities of Nature — a uniquely powerful gaming experience.</h3>
      </div>
    </div>
  </div>

  <div class="container padding-bottom-basic">
    <div class="grid-row">
      <div class="grid-item item-s-12 item-m-10 offset-m-1 item-l-8 offset-l-2 text-align-center">
        <h2 class="font-size-mid js-fix-widows">But what exactly is formOS</h2>
        <h3 class="font-size-basic js-fix-widows">formOS is a modular gaming system that integrates physical and digital play. formOS modules have the capacity to connect to each other and to communicate to mobile devices.</h3>
      </div>
    </div>
  </div>

  <?php get_template_part('partials/front-page/long-video'); ?>

  <?php get_template_part('partials/front-page/countdown'); ?>

  <?php get_template_part('partials/front-page/how-works'); ?>

  <?php get_template_part('partials/front-page/modules'); ?>

  <?php get_template_part('partials/front-page/demos'); ?>

  <?php get_template_part('partials/front-page/email-signup'); ?>

</main>

<?php
get_footer();
?>
