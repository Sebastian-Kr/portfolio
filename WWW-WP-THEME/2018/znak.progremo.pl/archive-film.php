<?php
/*
Template Name Posts: Custom
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>


<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>

<section id="best_of_the_hear">
  <div class="container">

<div class="row">
  <div class="col-md-12">
<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
  <h1><?php the_title() ?></h1>
<h6><?php echo the_field('last_book_category') ?></h6>




</div></div></div>



</section>



<?php get_footer(); ?>
