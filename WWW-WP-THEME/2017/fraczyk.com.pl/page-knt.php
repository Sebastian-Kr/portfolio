<?php
/*
Template Name: Kontakt
*/
?>
<?php get_header(); ?>

<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>
<section id="header" >

<div class="container">
  <h1 class="square"><?php echo get_the_title();?></h1>
</div>


</section>


  <section id="kntkt-main-kont">

<!-- MAIN CONTENT  -->
<div id="form-container">
  <div id="content-container">
    <h3><?php the_field('pcf-ktk');?></h3>
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
<!-- END MAIN CONTENT -->
</div>
<?php echo do_shortcode('[contact-form-7 id="69" html_id="contact-form-1234" title="Formularz 1"]'); ?>
</div>

<div id="map-container">
<div id="map"></div>
</div>

</section>




<?php get_template_part( 'content', 'nextprev' );?>


<?php get_footer(); ?>
