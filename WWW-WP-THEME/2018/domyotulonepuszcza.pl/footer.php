

<footer id="prgrm-footer" class="">

<div class="container">
  <div class="row">
    <div class="col-lg-12"><img src="<?php echo get_template_directory_uri() ?>/img/logo2.svg" alt=""></div>
  </div>
</div>

<div class="container">
<div class="row mt40 d-none d-lg-flex">



  <div id="col1" class="col-lg-3 col-sm-6 ">
   <?php  dynamic_sidebar('stopka_kolumna_1'); ?>


  </div>

  <div id="col2" class="col-lg-3 col-sm-6 social_icon">
    <?php  dynamic_sidebar('stopka_kolumna_2'); ?>




  </div>


   <div id="col3" class="footer_menu col-lg-2 ">
     <a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#inwestycja';} else {echo home_url();}?>">O inwestycji</a>
     <a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#lokalizacja';} else {echo home_url();}?>">Lokalizacja</a>
     <a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#galeria';} else {echo home_url();}?>">Galeria</a>
  </div>


  <div id="col4" class="footer_menu col-lg-2  ">
    <a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#domy';} else {echo home_url();}?>">Domy</a>
    <a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#technologia';} else {echo home_url();}?>">Technologia</a>
  </div>

  <div id="col5" class="footer_menu col-lg-2  ">
    <a class="fb_menu_link" href="<?php the_field('facebook_link')?>"><img src="<?php echo get_template_directory_uri() ?>/img/fb-2.svg" alt=""></a>

  </div>


</div>

<!-- MOBILE VERSION -->
<div class="row mt40 d-flex d-lg-none">



  <div id="col1" class="col-lg-3 col-sm-6 ">
   <?php  dynamic_sidebar('stopka_kolumna_1'); ?>
  </div>

  <div id="col2" class="col-lg-3 col-sm-6 social_icon">
    <?php  dynamic_sidebar('stopka_kolumna_2'); ?>
  </div>


   <div id="col3" class="footer_menu  col-sm-6 ">
     <a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#home';} else {echo home_url();}?>">Home</a>
     <a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#inwestycja';} else {echo home_url();}?>">Inwestycja</a>
     <a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#lokalizacja';} else {echo home_url();}?>">Lokalizacja</a>
    <a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#okolica';} else {echo home_url();}?>">Okolica</a>
    <a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#galeria';} else {echo home_url();}?>">Galeria</a>
  </div>

  <div id="col5" class="footer_menu col-sm-6 ">
    <a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#domy';} else {echo home_url();}?>">Domy</a>
    <a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#technologia';} else {echo home_url();}?>">Technologia</a>
    <a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#inwestor';} else {echo home_url();}?>">Inwestor</a>
    <a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#kontakt';} else {echo home_url();}?>">Kontakt</a>
  </div>


</div>
</div>

<div class="container mt50"><div id="copyright" class="row">
<div class="col-lg-12">

  <div style="float: left">© 2018 - copyright. All rights reserved.</div>
  <div style="float: right"> <a href="wizualni.pl">Design by Wizualni.pl</a></div>
</div>
</div>
</div>

</footer>

<?php get_template_part('special_modules/content', 'demopages');?>

<?php wp_footer(); ?>

<!-- <script src="http://localhost:35729/livereload.js"></script> -->
</body>
</html>
