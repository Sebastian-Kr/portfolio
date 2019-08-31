<?php /* Template Name: Kontakt */?>
<?php get_header(); ?>
<?php get_template_part(content, men);?>
<?php get_template_part(content, header);?>
<?php get_template_part(content, main);?>


<!-- ========================================================================
   CONTACT SECTION
  =========================================================================*/ -->
<div id="kontakt"></div>
<h2 class="title mt">KONTAKT</h2>
<section id="contact" class="mt ">

  <div class="container block shadow-btn">

    <div class="row padtb">


<div class="col-md-5">

<?php the_field('DANE-KONTAKTOWE') ?>
</div>
<div class="col-md-7">
  <?php echo do_shortcode('[contact-form-7 id="119" html_id="contact-form-1234" title="Formularz 1"]'); ?>
</div>
  </div></div>
</section>
<div class="separ"></div>

  <!-- END CONTACT SECTION -->

  <div id="map-container">
  <img id="pl-map" src="<?php echo get_template_directory_uri(); ?>/img/minimap.png" alt="">
  <div id="map" style="height:600px"></div>
  </div>
  <?php get_footer(); ?>
