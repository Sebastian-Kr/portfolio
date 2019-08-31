<?php /* Template Name: Opłaty */?>



<?php get_header(); ?>

<div class="py-5"><div class="separ"></div>
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <img class="column img-fluid d-block center w-25" src="<?php echo get_template_directory_uri()?>/img/strona-glowna-20.jpg"> </div>
     </div>
   </div>
 </div>

 <section id="bg-payment" style="background-image: url('<?php echo get_template_directory_uri()?>/img/notariusz-swiatniki-gorne-mapa4.jpg')">
   <div class="container">
     <div class="row">
       <div class="col-lg-8">
         <h1 class=" text-left ext-center display-3 text-primary"><?php echo the_title() ?></h1>
         <div class="semisepar"></div>
         <p class="center">
           <!-- MAIN CONTENT  -->
           <div class="container mb fz16">
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


           <!-- MAIN CONTENT END  -->
         </p>
       </div>
     </div>
   </div>
 </section>


 <!-- <div id="cta2" class="py-5 text-white text-center border-top">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="row">
           <div class="col-md-10">
             <h1 class="text-left text-primary"><?php echo the_field('progremo_naglowek') ?></h1>
           </div>
           <div class="col-md-2">
    <a href="<?php echo the_field('progremo_link') ?>"><button type="submit" class="btn btn-primary m-2 text-white px-5"><?php echo the_field('progremo_button') ?> >></button></a>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div> -->
<div class="border-top"></div>
<?php get_template_part('content', 'cta') ?>

<?php get_footer(); ?>
