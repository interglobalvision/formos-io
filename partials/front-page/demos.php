<?php
  $demos = new WP_Query(array(
    'post_type' => 'demo',
    'nopaging' => true
  ));

  if ($demos->have_posts()) {
?>
<div id="section-demos" class="container margin-bottom-mid">
  <div class="grid-row margin-bottom-basic text-align-center">
    <div class="grid-item item-s-12">
      <h2 class="font-size-mid margin-bottom-small">The formOS demos and beyond...</h2>
    </div>
    <div class="grid-item item-s-12 item-m-8 offset-m-2 item-l-6 offset-l-3">
      <h3 class="font-size-basic js-fix-widows">We developed a suite of demos to test the different ways in which you can play and create with formOS</h3>
    </div>
  </div>
  <div class="grid-row">
<?php
    while ($demos->have_posts()) {
      $demos->the_post();
      $type = get_post_meta($post->ID, '_igv_type', true);
?>
    <div class="grid-item demos-item item-s-6 item-m-4 margin-bottom-basic">
      <?php the_post_thumbnail('demo-thumb', array('class'=>'demo-thumb margin-bottom-tiny')); ?>
      <h3 class="margin-bottom-tiny font-size-basic"><?php the_title(); ?></h3>
      <div class="font-size-small">
        <?php
          the_content();
        ?>

        <?php
          if ($type) {
        ?>
          <p>Type: <?php echo $type; ?></p>
        <?php
          }
        ?>
      </div>
    </div>
<?php
    }
?>
  </div>
</div>
<?php
  }
?>
