<?php /* Template Name: Kancelaria Notarialna */?>



<?php get_header(); ?>

<?php get_template_part('content', 'main') ?>


 <div id="zespol" class="py-5 text-center bg-primary text-light">
   <div class="container">
     <div class="row">
       <div class="col-md-4"></div>
       <div class="col-md-8">
         <h2 class="text-secondary text-left"><?php echo the_field('progremo_tytuł') ?></h2>
         <p class="lead"><?php echo the_field('progremo_podtytul') ?> </p>
       </div>
     </div>
     <div class="row">
       <div class="col-md-1"></div>
       <div class="col-md-4 p-4">
               <img class="img-fluid d-block mx-auto" src="<?php the_field('progremo_foto1') ?>" >
       </div>
       <div class="col-md-7 col-lg-5 p-4 fz16">

         <p class="my-4"><i><p class="text-light"><?php echo the_field('progremo_opis1') ?></p>
       </div>
     </div>

     <div class="row">
       <div class="col-md-1"></div>
       <div class="col-md-4 p-4">
               <img class="img-fluid d-block mx-auto" src="<?php the_field('progremo_foto2') ?>" >
       </div>
       <div class="col-md-7 col-lg-5 p-4 fz16">

         <p class="my-4"><i><p class="text-light"><?php echo the_field('progremo_opis2') ?></p>
       </div>
     </div>



     <div class="row"><div class="col-md-1"></div><div class="col-md-4"></div><div class="col-md-7 text-left"><?php echo the_field('progremo_opis3') ?></div></div>
   </div>
 </div>

<div id="bg-cta-map" style="background-image: url('<?php echo get_template_directory_uri()?>/img/notariusz-swiatniki-gorne-dojazd-mapa-2.jpg')">
  <?php get_template_part('content', 'cta') ?>
</div>

<?php get_footer(); ?>
