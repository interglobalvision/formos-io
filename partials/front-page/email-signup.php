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
<?php
  if (!empty($front_page_options['signup_calltoaction'])) {
?>
      <h2 class="margin-bottom-small js-fix-widows"><?php echo apply_filters('the_content', $front_page_options['signup_calltoaction']); ?></h2>
<?php
  }
?>
      <form action="<?php echo $front_page_options['signup_form_action']; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
        <input placeholder="your email address" type="email" name="EMAIL" id="mce-EMAIL">
        <?php
          if (!empty($front_page_options['signup_form_validation'])) {
        ?>
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="<?php echo $front_page_options['signup_form_validation']; ?>" tabindex="-1" value=""></div>
        <?php
          }
        ?>
        <button type="submit" class="font-uppercase">Join</button>
      </form>
    </div>
  </div>
</div>
<?php
  }
?>
