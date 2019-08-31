<?php /*Template Name: Realizacje*/?>


<?php get_header(); ?>
<?php get_template_part('special_modules/prgrm', 'header');?>


    <?php

    // check if the flexible content field has rows of data
    if( have_rows('multigallery-section') ):
      $counter = 0;
      $anime = '';
     	// loop through the rows of data
        while ( have_rows('multigallery-section') ) : the_row();
    	    	// check current row layout
            if( get_row_layout() == 'multigallery' ):?>

<?php
$counter++;
if ($counter > 1) {$anime = 'animate';}
?>
<section id="gallery_id<?php echo $counter ?>" class="<?php echo $anime ?> multigallery-section std-border">
            <div  class="gallery_body">

                      <div class="gallery_foto_box">
                        <?php if ( have_rows('gallery-slider-loop') ): ?>
                            <?php while ( have_rows('gallery-slider-loop') ) : the_row(); ?>
                              <div class="foto_full" style="background-image: url('<?php the_sub_field('gallery-slider-item'); ?>')"></div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                      </div>

                      <div class="gallery_content">
                    <?php the_sub_field('gallery-slider-desc')?>
                      </div>


            </div>

            <div class="slider-nav mb100">

              <?php if ( have_rows('gallery-slider-loop') ): ?>
                  <?php while ( have_rows('gallery-slider-loop') ) : the_row(); ?>
                    <div class="foto_thumb_box"><div class="foto_thumb" style="background-image: url('<?php the_sub_field('gallery-slider-item'); ?>')"></div></div>

                  <?php endwhile; ?>
              <?php endif; ?>

            </div>
</section>

    <?php
      endif;
      endwhile;
      endif;
     ?>

<?php get_footer(); ?>
