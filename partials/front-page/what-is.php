<div id="section-what-is" class="container margin-bottom-mid">
  <div class="grid-row">
    <div class="grid-item item-s-12 item-m-10 offset-m-1 item-l-8 offset-l-2 text-align-center">
      <h2 class="font-size-mid margin-bottom-small js-fix-widows">But what exactly is formOS</h2>
      <h3 class="font-size-basic js-fix-widows">formOS is a modular gaming system that integrates physical and digital play. formOS modules have the capacity to connect to each other and to communicate to mobile devices.</h3>
    </div>
  </div>
</div>

<?php
  $front_page_options = get_site_option('_igv_front_page_options');

  if (!empty($front_page_options['what_is_video'])) {
?>

<div class="container margin-bottom-large">
  <div class="grid-row">
    <div class="grid-item item-s-12 item-m-10 offset-m-1 text-align-center">
      <h2 class="font-size-basic margin-bottom-basic js-fix-widows">See formOS in action:</h2>
      <video id="what-is-video" preload width="100%" muted>
        <source src="<?php echo $front_page_options['what_is_video'];?>" type="video/mp4">
      </video>
    </div>
  </div>
</div>
<?php
  }
?>
