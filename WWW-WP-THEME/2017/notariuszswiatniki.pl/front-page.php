<?php get_header(); ?>



<div id="header" style="position: relative; background-image: url(<?php echo get_template_directory_uri()?>/img/panorama_miasta.jpg);" class="py-5 text-center opaque-overlay border">
   <div class="container py-5">
     <div class="row">
       <div class="col-md-12 text-white p-4">
         <h1 class="main-title display-3 mb-4 text-primary"><?php echo the_field('progremo_tytul') ?><br> </h1>
         <p class="lead mb-5 text-white main-subtitle"><b class="text-primary"><?php echo the_field('progremo_podtytuł') ?></b></p>

       </div>
     </div>
   </div>
 </div>
 <div class="py-5">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <img class="img-fluid d-block center" src="<?php echo get_template_directory_uri()?>/img/strona-glowna-20.jpg"> </div>
     </div>
     <div class="row">
       <div class="col-md-12 center center-small fz16">
         <p class="center "><?php echo the_field('progremo_opis_1') ?></p>
       </div>
     </div>
   </div>
 </div>
 <div id="bg-map" class="py-5 text-center bg-primary" style="background-image: url('<?php echo get_template_directory_uri()?>/img/mapa-hover3.jpg')">
   <div class="container">
     <div class="row">
       <div class="col-lg-5"></div>
       <div class="col-lg-7 p-4">
         <br>
         <p class="text-light text-justify fz16"><?php echo the_field('progremo_opis_2') ?></p>
         <div class="mt25"></div>
                  <a href="<?php echo home_url() ?>/kontakt" class="btn btn-lg mx-1 btn-secondary text-light">Sprawdź dojazd &gt;&gt;</a>
       </div>
       <p></p>
     </div>
   </div>
 </div>
 <div class="py-5">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <img class="img-fluid d-block center w-25" src="<?php echo get_template_directory_uri()?>/img/strona-glowna-20.jpg">
         <h2 class="text-center text-secondary display-4"><b>Czynności notarialne</b></h2>
         <div class="semisepar"></div>
         <p class="center text-justify">
           <br<?php echo the_field('progremo_opis_3') ?></p>
       </div>
     </div>
   </div>
 </div>
 <div class="py-5">
   <div class="container">
     <div id="duty" class="row">
       <div class=" col-md-6">
      <?php echo the_field('czynności_notarialne_lista_1') ?>
       </div>
       <div class=" col-md-6">
        <?php echo the_field('czynności_notarialne_lista_2') ?>
       </div>
     </div>
   </div>
 </div>
 <div class="py-5">
   <div class="container">
     <div class="row">
       <div class="col-md-12 center">
      <a href="<?php echo home_url() ?>/czynnosci-notarialne"><button type="submit" class="btn btn-secondary m-2 text-white px-5">
        Czytaj więcej >></button></a>
       </div>
     </div>
   </div>
 </div>


  <?php get_footer(); ?>
