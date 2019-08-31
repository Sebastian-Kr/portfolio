
<?php
// Standar Variable
$css_custom = get_sub_field('css_class_section');
$id = 'P'.get_the_ID().'_S'.$GLOBALS['section_counter'];
$css_theme = get_sub_field('theme');
?>
<section id="<?php echo $id ?>" class="<?php echo $css_theme; echo ' '; echo $css_custom ?>">


<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>
<?php if (get_sub_field('theme')=='left_underscore'): ?>

<div class="container <?php the_sub_field('special_header_v2_class')?>">
<div class="row">
<div class="col-sm-12">
  <h2><?php the_sub_field('special_header_title')?></h2>
  <img src="<?php echo get_template_directory_uri()?>/img/painting_jackson_logo2.jpg" alt="">

</div>

</div>
</div>

<?php endif; ?>
<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>



<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>
<?php if (get_sub_field('theme')=='color1_bar'): ?>
  <div class="container"><div class="row"><div class="col-sm-12">
  <h2><?php the_sub_field('special_header_title')?></h2>
  </div></div></div>
<?php endif; ?>
<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>


<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>
<?php if (get_sub_field('theme')=='color2_bar'): ?>
  <div class="container"><div class="row"><div class="col-sm-12">
  <h2><?php the_sub_field('special_header_title')?></h2>
  </div></div></div>
<?php endif; ?>
<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>






</section>
