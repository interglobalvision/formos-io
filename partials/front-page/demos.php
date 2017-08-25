<?php
  $demos = new WP_Query(array(
    'post_type' => 'demo',
    'nopaging' => true
  ));

  if ($demos->have_posts()) {
?>
<div class="container margin-bottom-large">
  <div class="grid-row margin-bottom-basic">
    <div class="grid-item item-s-12 text-align-center">
      <h2 class="font-size-basic margin-bottom-small">The formOS demos and beyond...</h2>
      <h3 class="font-size-basic">We developed a suite of demos to test the different ways in which you can play and create with formOS</h3>
    </div>
  </div>
  <div class="grid-row">
<?php
    while ($demos->have_posts()) {
      $demos->the_post();
      $type = get_post_meta($post->ID, '_igv_type', true);
?>
    <div class="grid-item item-s-12 item-m-4 margin-bottom-basic">
      <?php the_post_thumbnail(); ?>
      <h3 class="margin-bottom-tiny"><?php the_title(); ?></h3>
      <div class="font-size-small">
        <?php
          the_content();

          if ($type) {
            echo $type;
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