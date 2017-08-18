<?php
get_header();
?>

<main id="main-content">

  <div class="container padding-bottom-basic">
    <div class="grid-row">
      <div class="grid-item item-s-12 text-align-center">
        <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_logo.svg'); ?>

        <h2 class="font-size-large">The first modular entertainment system.</h2>
      </div>
    </div>
  </div>

  <?php get_template_part('partials/front-page/splash-video'); ?>

  <div class="container padding-bottom-basic">
    <div class="grid-row">
      <div class="grid-item item-s-12 item-m-8 offset-m-2 item-l-6 offset-l-3 text-align-center">
        <h2 class="font-size-large">Play with the power of nature</h2>
        <h3 class="font-size-mid">Enter formOS, an entertainment system inspired by the modular qualities of Nature — a uniquely powerful gaming experience.</h3>
      </div>
    </div>
  </div>

  <div class="container padding-bottom-basic">
    <div class="grid-row">
      <div class="grid-item item-s-12 item-m-8 offset-m-2 item-l-6 offset-l-3 text-align-center">
        <h2 class="font-size-mid">But what exactly is formOS</h2>
        <h3 class="font-size-basic">formOS is a modular gaming system that integrates physical and digital play. formOS modules have the capacity to connect to each other and to communicate to mobile devices.</h3>
      </div>
    </div>
  </div>

  <?php get_template_part('partials/front-page/long-video'); ?>

  <?php get_template_part('partials/front-page/countdown'); ?>

  <div class="container padding-bottom-basic">
    <div class="grid-row">
      <div class="grid-item item-s-12 text-align-center margin-bottom-small">
        <h2 class="font-size-basic">How formOS works</h2>
      </div>
    </div>
    <div class="grid-row justify-center text-align-center">
      <div class="grid-item item-s-3">
        formOS game/app library
      </div>
      <div class="grid-item item-s-1">
        Download into your own device
      </div>
      <div class="grid-item item-s-3">
        Your own device
      </div>
      <div class="grid-item item-s-1">
        Wireless communication
      </div>
      <div class="grid-item item-s-3">
        formOS units
      </div>
    </div>
  </div>

  <?php get_template_part('partials/front-page/modules'); ?>

  <?php get_template_part('partials/front-page/demos'); ?>

  <?php get_template_part('partials/front-page/email-signup'); ?>

</main>

<?php
get_footer();
?>
