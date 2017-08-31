<?php
  $front_page_options = get_site_option('_igv_front_page_options');

  if (!empty($front_page_options['modules'])) {

    $modules = $front_page_options['modules'];
    $modules_count = count($modules);
?>

<div id="section-modules" class="container margin-bottom-large">
  <div class="grid-row">
    <div class="grid-item item-s-12 text-align-center">
      <h2 class="font-size-mid margin-bottom-basic js-fix-widows">The formOS Ignite Kit: 4 modules to start with</h2>
    </div>
  </div>
  <div class="grid-row margin-bottom-small">
    <div class="grid-item item-s-3 text-align-center">
      <h2 class="color-gray font-uppercase font-size-tiny">Central module</h2>
    </div>
    <div class="grid-item item-s-9 text-align-center">
      <h2 class="color-gray font-uppercase font-size-tiny">System modules</h2>
    </div>
  </div>

<?php
    foreach($modules as $index => $module) {

      // Open grid row
      if ($index === 0 || $index % 4 === 0) {
?>
  <div class="grid-row text-align-center">
<?php
      }

      // Close grid row
      if (!empty($module['module_name']) && !empty($module['module_image_id'])) {
?>
    <div class="grid-item item-m-6 item-l-3">
      <?php echo wp_get_attachment_image($module['module_image_id'], 'l-3'); ?>
      <h3 class="font-size-basic margin-bottom-small"><?php echo $module['module_name']; ?></h3>
<?php
        if (!empty($module['module_desc'])) {
?>
      <div class="font-size-tiny margin-bottom-small">
        <?php echo apply_filters('the_content', $module['module_desc']); ?>
      </div>
<?php
        }

        if (!empty($module['module_specs'])) {
?>
      <div class="font-size-tiny color-gray margin-bottom-small">
        <?php echo apply_filters('the_content', $module['module_specs']); ?>
      </div>
<?php
        }
?>
    </div>

<?php
      }

      // Close grid row
      if ($index === (count($modules) - 1) || $index + 1 % 4 === 0) {
?>
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
