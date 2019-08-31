
<?php 
// Standar Variable  
$css_custom = get_sub_field('css_class_section');
$id = 'P'.get_the_ID().'_S'.$GLOBALS['section_counter'];
$css_theme = get_sub_field('theme');
?>
<section id="<?php echo $id ?>" class="<?php echo $css_theme; echo ' '; echo $css_custom ?>">


<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>


<?php $id = get_sub_field('dropdown_v1_id') ?>
<?php if ( have_rows('dropdown_v1_list') ): ?>

  <div id="offer-hide">

    <div  class="container">
  <div  class="row main-content">
    <div class="col-md-12">
      <div id="<?php echo $id ?>">
<?php $i = 1 ?>
    <?php while ( have_rows('dropdown_v1_list') ) : the_row(); ?>

<?php
$id = 'panel'.$i;
$i++;

?>
      <div class="offer-part">
        <div class="offer-head" data-panelid="<?php echo $id?>"><?php the_sub_field('dropdown_v1_title'); ?></div>
        <div id="<?php echo $id?>" class="offer-dest"><?php the_sub_field('dropdown_v1_desc'); ?></div>
      </div>

    <?php endwhile; ?>
</div>
</div>

</div>
  </div>

<!-- oferta end -->
<?php endif; ?>
<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>
</section>