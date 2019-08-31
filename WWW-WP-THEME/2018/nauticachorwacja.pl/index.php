
<?php

?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>
<?php get_template_part( 'content', 'header' );?>
<?php get_template_part( 'content', 'main' );?>

<?php if (is_page('3046') or is_page('3058')): ?>
<?php endif; ?>


<?php if (get_field('zoom-image11')): ?>
  <!-- zoom module -->
  <div class="container-fluid maxw"><div class="row">
  <div class="col-sm-12">
      <div class="zoom_cont b72" id="4">
        <div class="controls_buttons">
          <div class="plus" data-boxid="4"></div>
          <div class="minus" data-boxid="4"></div>
        </div>
        <div class="zoom_img">
        <img class="max500" src="<?php echo the_field('zoom-image11') ?>">
        </div>
      </div>
  </div>
  </div></div>
  <!-- end zoom module -->
<?php endif; ?>

<?php if (is_page('3046') or is_page('3058')): ?>

<!-- <div class="container-fluid maxw"><div class="row"><div class="col-lg-12"><div id="map"></div></div></div></div> -->
<?php endif; ?>



<?php get_template_part( 'content', 'theme2'); ?>
<?php get_template_part( 'content', 'gallery'); ?>

<div class="container-fluid maxw"><div class="row">
<div class="col-md-6 addedhtml visual-editor"><?php echo the_field('add-custom-html') ?></div>
</div></div>

<?php get_footer(); ?>
