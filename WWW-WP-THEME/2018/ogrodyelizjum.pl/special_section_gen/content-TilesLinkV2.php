
<?php 
// Standard Variable  
$css_custom = get_sub_field('css_class_section');
$id = 'P'.get_the_ID().'_S'.$GLOBALS['section_counter'];
$css_theme = get_sub_field('theme');
?>
<section id="<?php echo $id ?>" class="<?php echo $css_theme; echo ' '; echo $css_custom ?>">

<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>



<?php if (get_sub_field('theme')=='quick_hover_bg'): ?>

<div id="rot-tiles" class=" tiles-square4">

<div  class="container ">
<div class="row">


  <?php if ( have_rows('tiles_link_hover_v2_single_tiles') ): ?>

      <?php while ( have_rows('tiles_link_hover_v2_single_tiles') ) : the_row(); ?>

      <?php $id=get_sub_field('link-pcf-zu-l') ?>

<div class=" col-sm-6 col-lg-3">
<div class="tile" style="background-image: url(' <?php the_field('thumb_add', $id); ?> ')">

<div class="normal_box">
  <h5><?php echo get_the_title($id); ?> </h5>
  <p><?php the_field('desc_add', $id); ?> </p>
</div>
<div class="glass"></div>
<a href="<?php the_permalink($id) ?>">
  <div class="hover_box">
    <h5><?php echo get_the_title($id); ?> </h5>
    <p><?php the_field('desc_add2', $id); ?> </p>
  </div></a>

</div>

</div>

      <?php  endwhile; ?>
  <?php endif; ?>

</div>
</div>
</div>
<?php endif; ?>

<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>
</section>