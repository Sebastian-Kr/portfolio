
<?php 
// Standard Variable  
$css_custom = get_sub_field('css_class_section');
$id = 'P'.get_the_ID().'_S'.$GLOBALS['section_counter'];
$css_theme = get_sub_field('theme');
?>
<section id="<?php echo $id ?>" class="<?php echo $css_theme; echo ' '; echo $css_custom ?>">

<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>



<div class="ve_cont <?php echo the_sub_field('css_class').' '; echo the_sub_field('bg_color'); ?>">  
  <div class="<?php if (get_sub_field('container_variant')) {echo 'container-fluid';} else {echo 'container';} ?>">
    <div class="row">


<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>
<?php if (get_sub_field('col_amount')=='1'): ?>
      <div class="col-md-12"><?php the_sub_field('col1') ?></div>
<?php endif; ?>


<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>
<?php if (get_sub_field('col_amount')=='2'): ?>
    <div class="col-md-6"><?php the_sub_field('col1') ?></div>
    <div class="col-md-6"><?php the_sub_field('col2') ?></div>  
<?php endif; ?>


<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>
<?php if (get_sub_field('col_amount')=='3'): ?>
    <div class="col-md-4"><?php the_sub_field('col1') ?></div>
    <div class="col-md-4"><?php the_sub_field('col2') ?></div>
    <div class="col-md-4"><?php the_sub_field('col3') ?></div>
<?php endif; ?>


<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>
<?php if (get_sub_field('col_amount')=='4'): ?>
    <div class="col-md-3"><?php the_sub_field('col1') ?></div>
    <div class="col-md-3"><?php the_sub_field('col2') ?></div>
    <div class="col-md-3"><?php the_sub_field('col3') ?></div>
    <div class="col-md-3"><?php the_sub_field('col4') ?></div>
<?php endif; ?>
<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>


</div>
  </div>
  </div>
</section>