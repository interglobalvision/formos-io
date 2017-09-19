<?php
  $front_page_options = get_site_option('_igv_front_page_options');

  if (!empty($front_page_options['modules'])) {

    $modules = $front_page_options['modules'];
    $modules_count = count($modules);
?>

<div id="section-modules" class="container margin-bottom-mid">
  <div class="grid-row">
    <div class="grid-item item-s-12 text-align-center font-size-mid margin-bottom-basic">
      <h2 class="js-fix-widows desktop-only">THE formOS Ignite Kit: 4 modules to start with</h2>
      <h2 class="js-fix-widows mobile-only">THE formOS Ignite Kit: <br>4 modules to start with</h2>
    </div>
  </div>

<?php
    foreach($modules as $index => $module) {

      // Open grid row
      if ($index === 0 || $index % 4 === 0) {
?>
  <div class="grid-row">
<?php
      }

      if (!empty($module['module_name']) && !empty($module['module_image_id'])) {

        if ($index === 0) {
?>
    <div class="grid-item item-s-12 item-m-3 no-gutter">
      <h2 class="text-align-center margin-bottom-small color-blue font-uppercase font-size-tiny">Central module</h2>
      <div class="grid-row margin-bottom-basic">
        <div class="grid-item item-s-12 grid-row no-gutter">
<?php
        }
        else if ($index === 1) {
?>
    </div>
    </div>
    <div class="grid-item item-s-12 item-m-9 no-gutter">
      <h2 class="text-align-center margin-bottom-small color-blue font-uppercase font-size-tiny">System Modules</h2>
      <div class="grid-row margin-bottom-basic">
        <div class="grid-item item-s-12 item-m-4 grid-row no-gutter">
<?php
        } else {
?>
        <div class="grid-item item-s-12 item-m-4 grid-row no-gutter">
<?php
        }
?>
          <div class="grid-item item-s-6 item-m-12">
            <?php echo wp_get_attachment_image($module['module_image_id'], 'item-l-3'); ?>
          </div>
          <div class="grid-item item-s-6 item-m-12">
            <h3 class="font-size-basic margin-bottom-small"><?php echo $module['module_name']; ?></h3>
<?php
        if (!empty($module['module_desc'])) {
?>
            <div class="font-size-small margin-bottom-small">
              <?php echo apply_filters('the_content', $module['module_desc']); ?>
            </div>
<?php
        }

        if (!empty($module['module_specs'])) {
?>
            <div class="font-size-small color-blue margin-bottom-small">
              <?php echo apply_filters('the_content', $module['module_specs']); ?>
            </div>
<?php
        }
?>
          </div>
        </div>

<?php
      }

      // Close grid row
      if ($index === (count($modules) - 1) || $index + 1 % 4 === 0) {
?>
      </div>
    </div>
  </div>
<?php
      }
?>
<?php
    }
?>
</div>
<?php
  }
?>
