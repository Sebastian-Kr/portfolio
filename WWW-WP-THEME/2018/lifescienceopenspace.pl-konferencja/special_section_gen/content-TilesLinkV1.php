
<?php
// Standard Variable
$css_custom = get_sub_field('css_class_section');
$id = 'P'.get_the_ID().'_S'.$GLOBALS['section_counter'];
$css_theme = get_sub_field('theme');
?>
<section id="<?php echo $id ?>" class="<?php echo $css_theme; echo ' '; echo $css_custom ?>">

<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>


<?php if (get_sub_field('theme')=='zoombox_hover'): ?>

<div id="rot-tiles">

<div  class="container">
<div class="row">


  <?php if ( have_rows('tiles_link_hover_v1_single_tiles') ): ?>

      <?php while ( have_rows('tiles_link_hover_v1_single_tiles') ) : the_row(); ?>

      <?php $id=get_sub_field('link-pcf-zu-l') ?>





  <div class="col-sm-4">
    <div class="zoombox vpc vpc">
      <a href="<?php the_permalink($id) ?>" class="zoom">
    <div class="item vcc gtiles" style='background-image: url("<?php the_field('thumb_add', $id); ?>")'>
        <div class="item-filtr"></div>
      <h2 class="vc"><?php echo get_the_title($id); ?></h2>
      <div class="content vc2"><?php the_field('desc_add', $id); ?> </div>
    </div>
  </a>
    </div>
  </div>

      <?php  endwhile; ?>
  <?php endif; ?>

</div>
</div>
</div>
<?php endif; ?>

<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>

<?php if (get_sub_field('theme')=='triangle_hover'): ?>


                <div id="rot-tiles">

                <div  class="container">
                <div class="row">


                  <?php if ( have_rows('tiles_link_hover_v1_single_tiles') ): ?>

                      <?php while ( have_rows('tiles_link_hover_v1_single_tiles') ) : the_row(); ?>

                      <?php $id=get_sub_field('link-pcf-zu-l') ?>










  <div class="col-md-4 col-sm-6">
  <a href="<?php the_permalink($id) ?>">
  <figure class="snip1543">
                                        <img src="<?php the_field('thumb_add', $id); ?>" alt="sample108" />
                                        <figcaption>
                                          <h3><?php echo get_the_title($id); ?></h3>
                                          <p><?php the_field('desc_add', $id); ?></p>

                                          <h6 id="hover_link">Czytaj więcej</h6>
                                        </figcaption>

                                      </figure> </a>

  </div>



                      <?php  endwhile; ?>

                  <?php endif; ?>

                </div>


                </div>
</div>
                <?php endif; ?>
<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>




<?php if (get_sub_field('theme')=='GenTilesSlideUp1'): ?>


<div class="GenTilesSlideUp1">

<div  class="container">
<div class="row">


  <?php if ( have_rows('tiles_link_hover_v1_single_tiles') ): ?>

      <?php while ( have_rows('tiles_link_hover_v1_single_tiles') ) : the_row(); ?>

      <?php $id=get_sub_field('link-pcf-zu-l') ?>


<div class="col-md-4 col-sm-6">


<div class="tiles_item">
<a href="<?php the_permalink($id) ?>" style="background-image: url('<?php the_field('thumb_add', $id); ?>')">
  <div class="header_tiles">
    <span><?php echo get_the_title($id); ?></span>
    <p><?php the_field('desc_add', $id); ?></p>
  </div>
</a>
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
