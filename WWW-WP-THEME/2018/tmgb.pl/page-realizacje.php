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
        if( get_row_layout() == 'multigallery' ):
          $counter++;
          if ($counter > 1) {$anime = 'animate';}
          ?>

        <section class="<?php echo $anime ?> multigallery-section std-border">
        <div class="gallery_container">

          <div class="gallery_fotobox">

<?php if ( have_rows('gallery-slider-loop') ): ?>
    <?php while ( have_rows('gallery-slider-loop') ) : the_row(); ?>
      <div class="gallery_item" style="background-image: url('<?php the_sub_field('gallery-slider-item')?>')"></div>
    <?php endwhile; ?>
<?php endif; ?>

          </div>

        <div class="gallery_contentbox">
        <div class="inner">
          <?php the_sub_field('gallery-slider-desc')?>
        </div>

        </div>

        </div>

        <div class="review_container">
          <img class="stars" src="<?php echo get_template_directory_uri() ?>/img/star-02.svg" alt="">
          <?php the_sub_field('gallery-slider-review')?>
        </div>
        <!-- end gallery section -->
        </section>


<?php
        endif;
        endwhile;

endif;

?>



<?php get_footer(); ?>
