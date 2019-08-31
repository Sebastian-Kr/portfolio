<?php /* Template Name: Kontakt */?>



<?php get_header(); ?>

<div id="kontakt_header">
  <?php get_template_part('content', 'main') ?>
</div>

 <div>
   <div class="container">
     <div class="row">
       <div class="col-md-6">
         <img class="img-fluid d-block border border-secondary" src="<?php echo get_template_directory_uri()?>/img/budynek.jpg"> </div>
       <div class="col-md-6 fz16">


<?php echo the_field('progremo_kontakt') ?>
       </div>
     </div>
   </div>
 </div>
<div class="container"><div class="row">
  <div class="col-md-12 mt50 mb50 fz18">
    <?php echo the_field('progremo_kontakt1b') ?>
  </div>
</div></div>

 <div class="mt50"></div>
 <div class="py-5 bg-primary text-white">
   <div class="container">
     <div class="row">
       <div id="go" class="col-md-5">

<div class="fz16">
  <?php echo the_field('progremo_kontakt2') ?>
</div>
       </div>
       <div class="col-md-1"></div>
       <div id="contact-form" class="col-md-6">
         <h3>Napisz do nas</h3>
 <?php echo do_shortcode('[contact-form-7 id="297" title="Formularz 1"]') ?>
       </div>
     </div>
   </div>
 </div>
 <div id="map"> </div>


<?php get_footer(); ?>
