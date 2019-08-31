
<?php
// Standard Variable
$css_custom = get_sub_field('css_class_section');
$id = 'P'.get_the_ID().'_S'.$GLOBALS['section_counter'];
$css_theme = get_sub_field('theme');
?>
<section id="<?php echo $id ?>" class="<?php echo $css_theme; echo ' '; echo $css_custom ?>">

<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>



<?php if (get_sub_field('theme')=='HoverUpNoLink1'): ?>


<div id="tiles_hover_dropdown"   class=" HoverUpNoLink1 container">
<div class="row">




  <?php if ( have_rows('tiles_hover_v2_single_tiles') ): ?>
<?php $counter=1; ?>
      <?php while ( have_rows('tiles_hover_v2_single_tiles') ) : the_row();
      $counter++;
      ?>

        <div class="col-sm-4">


          <div class="single_till <?php if ($counter >4) {echo 'animate';} ?>" style='background-image: url("<?php the_sub_field('pcf-zu-f'); ?>")'>
          <div class="single_till_content">
              <div class="item-filtr"></div>
            <h3 class=""><?php the_sub_field('pcf-zu-t'); ?></h3>
            <?php the_sub_field('pcf-zu-d'); ?>
          </div>
</div>

<div class="single_till_bottom">
<?php the_sub_field('pcf-zu-d2'); ?>
</div>
        </div>


      <?php endwhile; ?>

  <?php endif; ?>

</div>


</div>


<?php endif; ?>
<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>



<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>
<?php if (get_sub_field('theme')=='FullScreenTill1'): ?>

<div class="FullScreenTill1 ">



  <?php if ( have_rows('tiles_hover_v2_single_tiles') ): ?>

<?php while ( have_rows('tiles_hover_v2_single_tiles') ) : the_row(); ?>

<div class="item-gal3">
  <div class="hover-block">
    <p><?php the_sub_field('pcf-zu-d2'); ?></p>
  </div><img src="<?php the_sub_field('pcf-zu-f'); ?>" alt="">

  <div class="content-gal3"><p><?php the_sub_field('pcf-zu-t'); ?></p>
  <?php the_sub_field('pcf-zu-d'); ?>
  </div></div>


      <?php endwhile; ?>

<?php endif; ?>
<div class="clearfix"></div>
</div>
<?php endif; ?>
<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>
</section>
