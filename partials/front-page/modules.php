<?php
  $front_page_options = get_site_option('_igv_front_page_options');

  if (!empty($front_page_options['modules'])) {

    $modules = $front_page_options['modules'];
    $modules_count = count($modules);
?>

<div id="section-modules" class="container padding-bottom-basic">
  <div class="grid-row">
    <div class="grid-item item-s-12 text-align-center">
      <h2 class="font-size-mid js-fix-widows">The formOS Ignite Kit: 4 modules to start with</h2>
    </div>
  </div>
  <div class="grid-row margin-bottom-small">
    <div class="grid-item item-s-3">
      <h2 class="color-gray font-uppercase font-size-tiny">Central module</h2>
    </div>
    <div class="grid-item item-s-9 text-align-center">
      <h2 class="color-gray font-uppercase font-size-tiny">System modules</h2>
    </div>
  </div>

<?php
    foreach($modules as $index => $module) {

      // Get data
      $name = $module['module_name'];
      $mp4 = $module['module_video_mp4'];
      $desc = $module['module_desc'];
      $spec = $module['module_specs'];

      //pr($module);

      // Open grid row
      if ($index === 0 || $index % 4 === 0) {
?>
  <div class="grid-row text-align-center">
<?php
      }

      // Close grid row
      if (!empty($name) && !empty($mp4)) {
?>
    <div class="grid-item item-m-6 item-l-3">
      <video class="module-video" preload width="100%" muted>
        <source src="<?php echo $mp4;?>" type="video/mp4">
      </video>
      <h3 class="font-size-basic margin-bottom-small"><?php echo $name; ?></h3>
<?php
        if (!empty($desc)) {
?>
      <div class="font-size-tiny margin-bottom-small">
        <?php echo apply_filters('the_content', $desc); ?>
      </div>
<?php
        }

        if (!empty($spec)) {
?>
      <div class="font-size-tiny color-gray margin-bottom-small">
        <?php echo apply_filters('the_content', $spec); ?>
      </div>
<?php
        }
?>
    </div>

<?php
      }

      // Close grid row
      if ($index === count($modules) || $index + 1 % 4 === 0) {
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
