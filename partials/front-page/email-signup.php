<?php

$front_page_options = get_site_option('_igv_front_page_options');

if (!empty($front_page_options['signup_form_action'])) {
?>
<div id="section-footer-signup" class="container margin-bottom-basic">
  <div class="grid-row">
    <div class="grid-item item-s-12 text-align-center">
      <div id="signup-logo-holder" class="margin-bottom-small">
        <?php echo url_get_contents(get_template_directory_uri() . '/dist/img/formos_logo.svg'); ?>
      </div>
      <h2 class="font-size-mid margin-bottom-small js-fix-widows">formOS is coming soon, stay updated:</h2>
      <form action="<?php echo $front_page_options['signup_form_action']; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
        <input placeholder="your email address" type="email" name="EMAIL" id="mce-EMAIL">
        <button type="submit">Join</button>
      </form>
    </div>
  </div>
</div>
<?php
  }
?>