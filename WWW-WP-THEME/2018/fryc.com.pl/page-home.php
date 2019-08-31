<?php /*Template Name: Home page*/?>

<?php get_header(); ?>




<section id="home" class=" header_box">
<div class="header_content container fadeInLeft">
  <?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
  if (get_the_content()){
            the_content();
  } // end is content statment
    } // end while
  } // end if
  ?>
  <a href="http://fryc.com.pl/realizacje/"><div id="header_button" class="button_std btn btn_header">Zobacz Realizacje</div></a>
</div>
</section>


<div class="counter_container animate"><div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php echo do_shortcode('[tf_numbers name="164"]') ?>
    </div>
  </div>
</div></div>

  <?php get_footer(); ?>
