<?php /* Template Name: CZYNNOŚCI NOTARIALNE */?>
<?php get_header(); ?>

<?php get_template_part('content', 'main') ?>


 <div class="py-5 text-center bg-primary text-light">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h2 class="text-secondary"><?php echo the_field('progremo_tytul') ?></h2>
         <p class="lead"><?php echo the_field('progremo_podtytul') ?>
         </p>
         <div class="semisepar"></div>
       </div>
     </div>
     <div class="row">
       <div class="col-lg-6">
         <p class="text-right">
<?php echo the_field('progremo_col1') ?>
         </p>
       </div>
       <div class="col-lg-6">
         <p class="text-left">

<?php echo the_field('progremo_col2') ?>
         </p>
       </div>
     </div>
   </div>
 </div>


<?php get_template_part('content', 'cta') ?>

  <?php get_footer(); ?>
