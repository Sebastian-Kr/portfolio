<?php
/*
Template Name: Kontakt
*/

?>
<?php get_header(); ?>

<?php get_template_part(content, men2);?>
<?php get_template_part(content, header);?>

<!-- MAIN CONTENT  -->

<div class="container"><div class="row">
<div class="col-sm-12">
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
</div>
</div></div>
<!-- END MAIN CONTENT -->

<!-- ========================================================================
   CONTACT SECTION
  =========================================================================*/ -->
<div id="kontakt"></div>
<section id="contact" class="">

  <div class="container block shadow-btn">

    <div class="row padtb">


<div class="col-sm-5">
<address class="">

<?php the_field('contact_add_column') ?>
</address>

</div>
<div class="col-sm-7">
  <?php echo do_shortcode('[contact-form-7 id="119" html_id="contact-form-1234" title="Formularz 1"]'); ?>
</div>
  </div></div>
</section>
  <!-- END CONTACT SECTION -->


  <div id="map-container">
  <!-- <img id="pl-map" class="mobihide" src="<?php echo get_template_directory_uri(); ?>/img/minimap.png" alt=""> -->
  <div id="map" style="height:700px"></div>
  </div>
<hr class="fullhr gold">
  <?php get_footer(); ?>
