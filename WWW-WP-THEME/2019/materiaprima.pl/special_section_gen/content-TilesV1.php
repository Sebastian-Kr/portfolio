
<?php
// Standard Variable
$css_custom = get_sub_field('css_class_section');
$id = 'P'.get_the_ID().'_S'.$GLOBALS['section_counter'];
$css_theme = get_sub_field('theme');
?>
<section id="<?php echo $id ?>" class="<?php echo $css_theme; echo ' '; echo $css_custom ?>">

<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>


<?php if (get_sub_field('theme')=='PickUp'): ?>


<div  class=" view-tiless container">
<div class="row">




  <?php if ( have_rows('tiles_hover_v1_single_tiles') ): ?>

      <?php while ( have_rows('tiles_hover_v1_single_tiles') ) : the_row(); ?>

        <div class="col-sm-4">




<div class="view view-first">
  <h3 class="before-mask"><?php the_sub_field('pcf-zu-t'); ?></h3>
<div class="glass"></div>
  <img src="<?php the_sub_field('pcf-zu-f'); ?>" />
  <div class="mask">

    <h2><?php the_sub_field('pcf-zu-t'); ?></h2>
    <p><?php the_sub_field('pcf-zu-d'); ?></p>
    <a href="<?php the_sub_field('pcf-zu-l') ?>" class="info">Czytaj więcej</a>
  </div>
</div>



        </div>


      <?php endwhile; ?>

  <?php endif; ?>

</div>


</div>

<?php endif; ?>
<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>


<?php if (get_sub_field('theme')=='PopUpGlass'): ?>


<div  class="container PopUpGlass">
<div class="row">
    <?php if ( have_rows('tiles_hover_v1_single_tiles') ): ?>
        <?php while ( have_rows('tiles_hover_v1_single_tiles') ) : the_row(); ?>
<div class="col-sm-12 col-md-4">
  <figure class="snip1480">
    <img src="<?php the_sub_field('pcf-zu-f'); ?>" alt="sample36" />
    <figcaption>
      <h3><?php the_sub_field('pcf-zu-t'); ?></h3>
    </figcaption><p><?php the_sub_field('pcf-zu-d'); ?></p>
    <a href="<?php the_sub_field('pcf-zu-l') ?>"></a>
  </figure>
  </div>
      <?php  endwhile; ?>
  <?php endif; ?>

</div>
</div>
<?php endif; ?>

<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>




</section>
