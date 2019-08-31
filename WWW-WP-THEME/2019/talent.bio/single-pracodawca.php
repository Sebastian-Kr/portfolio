<?php /*Template Name: Pracodawca*/?>

<?php get_header(); ?>
<?php

$args = array(
  'post_type' => 'oferta',
  'posts_per_page' => '111',
  'meta_query' => array(
    array(
      'key' => 'employer_id', // name of custom field
      // 'value' => '"'.get_the_ID().'"', // matches exactly "123", not just 123. This prevents a match for "1234"
      'value' => get_the_ID(), // matches exactly "123", not just 123. This prevents a match for "1234"
      'compare' => 'LIKE'
    ),
  ),
);
    $oferty = get_posts($args);
    $counter = sizeof($oferty);
 ?>

<div class="header_bg" style="background-image: url('<?php the_field('employer_header_img')?>')"></div>

<div class="container mt-70 mb70">
<div class="row">
<div class="col-lg-4 employer_info_container">

  <div class="employer_header d-flex d-lg-none">
    <h1><?php echo the_title() ?></h1>
    <p>ilość ofert: <span><?php echo $counter; ?></span></p>
  </div>

<div class="box_shadow card_box">
  <div class="logo_box">
      <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
  </div>

  <div class="emp_box">
  <div class="left_box">
  <img src="<?php the_field('employer_card_icon') ?>" alt="">
  </div>

  <div class="right_box">
    <div class="title">Wizytówka</div>
    <?php include('include-content.php') ?>
  </div>
  </div>
</div>


<?php if ( have_rows('offer_content_box') ): ?>
    <?php while ( have_rows('offer_content_box') ) : the_row(); ?>

<div class="box_shadow">

  <div class="emp_box">
  <div class="left_box">
  <img src="<?php the_sub_field('offer_content_box_icon')?>" alt="">
  </div>

  <div class="right_box">
    <div class="title"><?php the_sub_field('offer_content_box_title')?></div>
  </div>
</div>

<div class="pl15 pr15 mb30"><?php the_sub_field('offer_content_box_desc')?></div>
</div>

    <?php endwhile; ?>
<?php endif; ?>


</div><!-- end left column -->
<div class="col-lg-8">

  <div class="employer_header d-none d-lg-flex">
    <h1><?php echo the_title() ?></h1>
    <p>ilość ofert: <span><?php echo $counter; ?></span></p>
  </div>
<?

  $wp_query = new WP_Query( $args);

$ID =  get_the_ID();
  if ( $wp_query->have_posts() ):
    while ( $wp_query->have_posts() ) :
      $wp_query->the_post();
    get_template_part('content', 'offers_box2');

   endwhile;
?>


<?php
endif;
wp_reset_postdata();
?>


</div> <!-- end right column -->
</div> <!-- end row -->
</div> <!-- end container -->

  <?php get_footer(); ?>
