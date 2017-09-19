<div id="section-how" class="container margin-bottom-mid">
  <div class="grid-row">
    <div class="grid-item item-s-12 text-align-center margin-bottom-basic">
      <h2 class="font-size-mid js-fix-widows">How formOS works</h2>
    </div>
  </div>

  <div id="how-column">
    <div class="grid-row align-items-center margin-bottom-small">
      <div class="grid-item item-s-6">
        <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_1.svg'); ?>
      </div>
      <div class="grid-item item-s-6">
        <h4 class="font-size-basic">formOS game/app library</h4>
      </div>
    </div>
    <div class="grid-row margin-bottom-small">
      <div class="grid-item item-s-6 mobile-how-illustration text-align-center font-size-tiny color-blue">
        <div class="margin-bottom-tiny"><?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_2.svg'); ?></div>
        <div>Download into <br>your own device</div>
      </div>
    </div>
    <div class="grid-row align-items-center margin-bottom-small">
      <div class="grid-item item-s-6">
        <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_icon_3.svg'); ?>
      </div>
      <div class="grid-item item-s-6">
        <h4 class="font-size-basic">Your own device</h4>
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
        <h4 class="font-size-basic">formOS units</h4>
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
      <div class="grid-item how-item-small how-illustration-caption color-blue">
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
      <div class="grid-item how-item-small how-illustration-caption color-blue">
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
        <h4 class="margin-bottom-tiny">formOS game/app library</h4>
      </div>
      <div class="grid-item how-item-large">
        <h4 class="margin-bottom-tiny">Your own device</h4>
      </div>
      <div class="grid-item how-item-large">
        <h4 class="margin-bottom-tiny">formOS units</h4>
      </div>
    </div>
    <div class="grid-row justify-between font-size-tiny text-align-center">
      <div class="grid-item how-item-large">
        <p>App Store and Google Play – games published by formOS and third party publishers</p>
      </div>
      <div class="grid-item how-item-large">
        <p>iOS, Apple TV*, Android and Google Play*</p>
      </div>
      <div class="grid-item how-item-large">
        <p>4 units + charger in the Ignite Kit</p>
      </div>
    </div>
  </div>

</div>

<?php
$front_page_options = get_site_option('_igv_front_page_options');

if (!empty($front_page_options['six_sides_video'])) {
?>

<div class="container margin-bottom-small">
  <div class="grid-row">
    <div class="grid-item item-s-12 text-align-center margin-bottom-small">
      <h3 class="font-size-basic js-fix-widows">A formOS unit has 6 connecting sides</h3>
    </div>
  </div>
  <div class="grid-row">
    <div class="grid-item item-s-8 offset-s-2 item-m-6 offset-m-3 item-l-4 offset-l-4 text-align-center">
      <video class="module-video" preload width="100%" muted>
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
      <h3 class="font-size-basic js-fix-widows">formOS can be connected in an infinite amount of ways</h3>
      <h3 class="font-size-basic js-fix-widows">(here are a few basic ones)</h3>
    </div>
  </div>
  <div id="connection-ways-icon-row" class="grid-row">
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
      <h4>And many <br>more...</h4>
    </div>
  </div>
</div>
