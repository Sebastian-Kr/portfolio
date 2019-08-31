<?php /*Template Name: KONTAKT*/?>
<?php get_header(); ?>

<?php get_template_part( 'prgrm', 'menu3' ) ?>


<div class="full_slider">
<div class="slides_box">


  <div class="slide_bg active_slide" style="background-image: url('  <?php echo get_the_post_thumbnail_url(); ?>')"></div>
</div>
  <div id="nav-box">
    <div class="arrow arrow-left"><img src="<?php echo get_template_directory_uri() ?>/img/arrow-left.svg" alt=""></div>
    <div class="arrow arrow-right"><img src="<?php echo get_template_directory_uri() ?>/img/arrow-right.svg" alt=""></div>
  </div>
</div>

<section class="content">
  <?php get_template_part( 'prgrm', 'main' ) ?>
<div id="map"></div>
</section>



<?php get_footer(); ?>
