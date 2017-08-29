<div id="section-how" class="container margin-bottom-basic">
  <div class="grid-row">
    <div class="grid-item item-s-12 text-align-center margin-bottom-basic">
      <h2 class="font-size-mid js-fix-widows">How formOS works</h2>
    </div>
  </div>

  <div class="mobile-only">
    <div class="grid-row align-items-center margin-bottom-small">
      <div class="grid-item item-s-6">
        <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_1.svg'); ?>
      </div>
      <div class="grid-item item-s-6">
        <h4 class="font-size-small">formOS game/app library</h4>
      </div>
    </div>
    <div class="grid-row margin-bottom-small">
      <div class="grid-item item-s-6 mobile-how-illustration text-align-center font-size-tiny color-gray">
        <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_2.svg'); ?>
        <div>Download into your own device</div>
      </div>
    </div>
    <div class="grid-row align-items-center margin-bottom-small">
      <div class="grid-item item-s-6">
        <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_3.svg'); ?>
      </div>
      <div class="grid-item item-s-6">
        <h4 class="font-size-small">Your own device</h4>
      </div>
    </div>
    <div class="grid-row margin-bottom-small">
      <div class="grid-item item-s-6 mobile-how-illustration text-align-center font-size-tiny color-gray">
        <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_4.svg'); ?>
        <div>Wireless communication</div>
      </div>
    </div>
    <div class="grid-row align-items-center margin-bottom-small">
      <div class="grid-item item-s-6">
        <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_5.svg'); ?>
      </div>
      <div class="grid-item item-s-6">
        <h4 class="font-size-small">formOS units</h4>
      </div>
    </div>
  </div>

  <div class="desktop-only">
    <div class="grid-row align-items-center justify-between margin-bottom-small text-align-center color-gray">
      <div class="grid-item how-item-large">
        <div class="margin-bottom-tiny">
          <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_1.svg'); ?>
        </div>
      </div>
      <div class="grid-item how-item-small how-illustration-caption">
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
      <div class="grid-item how-item-small how-illustration-caption">
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
    <div class="grid-row justify-between font-size-tiny text-align-center">
      <div class="grid-item item-m-3">
        <h4 class="font-size-small margin-bottom-tiny">formOS game/app library</h4>
        <p>App Store and Google Play – games published by formOS and third party publishers</p>
      </div>
      <div class="grid-item item-m-3">
        <h4 class="font-size-small margin-bottom-tiny">Your own device</h4>
        <p>iOs, Apple TV*, Android and Google Play*</p>
      </div>
      <div class="grid-item item-m-3">
        <h4 class="font-size-small margin-bottom-tiny">formOS units</h4>
        <p>4 units + charger in the Ignite Kit</p>
      </div>
    </div>
  </div>

</div>

<?php
$front_page_options = get_site_option('_igv_front_page_options');

if (!empty($front_page_options['six_sides_image'])) {
?>

<div class="container padding-bottom-basic">
  <div class="grid-row">
    <div class="grid-item item-s-12 text-align-center margin-bottom-small">
      <h3 class="font-size-basic js-fix-widows">A formOS unit has 6 connecting sides</h3>
    </div>
  </div>
  <div class="grid-row">
    <div class="grid-item item-s-12 text-align-center">
      <?php echo wp_get_attachment_image($front_page_options['six_sides_image_id'], 'full'); ?>
    </div>
  </div>
</div>

<?php
}
?>

<div class="container margin-bottom-large">
  <div class="grid-row">
    <div class="grid-item item-s-12 text-align-center margin-bottom-basic font-size-basic">
      <h3 class="font-size-basic js-fix-widows">formOS can be connected in an infinite amount of ways</h3>
      <h3 class="font-size-basic js-fix-widows">(here are a few basic ones)</h3>
    </div>
  </div>
  <div class="grid-row">
    <div class="grid-item item-s-6 item-m-3 text-align-center">
      <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_sphere.svg'); ?>
      <h4>Sphere</h4>
    </div>
    <div class="grid-item item-s-6 item-m-3 text-align-center">
      <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_line.svg'); ?>
      <h4>Line</h4>
    </div>
    <div class="grid-item item-s-6 item-m-3 text-align-center">
      <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_arc.svg'); ?>
      <h4>Arc</h4>
    </div>
    <div class="grid-item item-s-6 item-m-3 text-align-center">
      <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_more.svg'); ?>
      <h4>And many more...</h4>
    </div>
  </div>
</div>
