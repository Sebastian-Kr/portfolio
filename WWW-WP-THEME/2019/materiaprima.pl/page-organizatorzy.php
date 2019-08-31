<?php /*Template Name: Organizatorzy*/?>

<?php get_header(); ?>


<section>

  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <?php include('includes/content.php') ?>
      </div>

      <div class="col-lg-1"></div>
      <div class="col-lg-4">
        <?php the_field('add_content2')?>
      </div>
    </div>
  </div>
</section>


  <?php

// check if the repeater field has rows of data
if( have_rows('carousel1_loop') ):?>
<section id="carousel1" class="carousel_section">
  <div class="container"><div class="row">
    <div class="col-md-12"><strong><?php the_field('carousel1_title')?></strong></div>
<div id="car1" class="slide-items1 col-lg-8">

<?php 	// loop through the rows of data
    while ( have_rows('carousel1_loop') ) : the_row();?>
        <div class="slide_item">
          <a target="blank" href="<?php the_sub_field('carousel1_loop_link'); ?>" rel="index, follow" target="_blank">
          <img src="<?php the_sub_field('carousel1_loop_img'); ?>">
        </a></div>

<?php
    endwhile;

?>
</div>
</div></div>
</section>
<?php
endif;
?>


  <?php

// check if the repeater field has rows of data
if( have_rows('carousel2_loop') ):?>
<section id="carousel2"  class="carousel_section">
  <div class="container"><div class="row">
    <div class="col-md-12"><strong><?php the_field('carousel2_title')?></strong></div>
<div id="car2" class="slide-items1 col-lg-10">

<?php 	// loop through the rows of data
    while ( have_rows('carousel2_loop') ) : the_row();?>
        <div class="slide_item">
          <a target="blank" href="<?php the_sub_field('carousel2_loop_link'); ?>" rel="index, follow" target="_blank">
          <img src="<?php the_sub_field('carousel2_loop_img'); ?>">
        </a></div>

<?php
    endwhile;

?>
</div>
</div></div>
</section>
<?php
endif;
?>

  <?php get_footer(); ?>
