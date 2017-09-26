<?php
  $front_page_options = get_site_option('_igv_front_page_options');

  if (!empty($front_page_options['modules']) && !empty($front_page_options['central_module'])) {

    $central_module = $front_page_options['central_module'];
    $system_modules = $front_page_options['modules'];
?>

<div id="section-modules" class="container margin-bottom-small">
  <div class="grid-row">
    <div class="grid-item item-s-12 text-align-center font-size-mid margin-bottom-basic">
      <h2 class="js-fix-widows desktop-only">THE formOS Ignite Kit: 4 modules to start with</h2>
      <h2 class="js-fix-widows mobile-only">THE formOS Ignite Kit: <br>4 modules to start with</h2>
    </div>
  </div>

  <div class="grid-row">

    <div class="grid-item item-s-12 item-l-3">
      <h2 class="text-align-center margin-bottom-small color-blue font-uppercase font-size-tiny">Central module</h2>
      <div class="grid-row margin-bottom-basic justify-center">
<?php
    foreach($central_module as $index => $module) {
      if (!empty($module['module_name']) && !empty($module['module_image_id'])) {
?>
        <div class="grid-item module-item grid-row no-gutter">
          <div class="grid-item item-s-6 item-l-12 no-gutter">
            <?php echo wp_get_attachment_image($module['module_image_id'], 'item-l-3'); ?>
          </div>
          <div class="grid-item item-s-6 item-l-12 no-gutter">
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
    }
?>
      </div>
    </div>

    <div class="grid-item item-s-12 item-l-9">
      <h2 class="text-align-center margin-bottom-small color-blue font-uppercase font-size-tiny">System Modules</h2>
      <div class="grid-row margin-bottom-basic justify-center">
<?php
    foreach($system_modules as $index => $module) {
      if (!empty($module['module_name']) && !empty($module['module_image_id'])) {
?>
        <div class="grid-item module-item grid-row no-gutter">
          <div class="grid-item item-s-6 item-l-12 no-gutter">
            <?php echo wp_get_attachment_image($module['module_image_id'], 'item-l-3'); ?>
          </div>
          <div class="grid-item item-s-6 item-l-12 no-gutter">
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
    }
?>
      </div>
    </div>
  </div>
</div>
<?php
      }
?>
