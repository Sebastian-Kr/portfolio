

<footer id="prgrm-footer" class="">

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo2.svg" alt=""></a>
    </div>
  </div>
</div>

<div class="container">
<div class="row mt50 mb50 d-none d-lg-flex">



  <div id="col1" class="col-lg-3 col-sm-6 ">
   <?php  dynamic_sidebar('stopka_kolumna_1'); ?>


  </div>

  <div id="col2" class="col-lg-3 col-sm-6 social_icon">
    <?php  dynamic_sidebar('stopka_kolumna_2'); ?>




  </div>


   <div id="col3" class="footer_menu col-lg-2 ">
     <a href="<?php echo home_url();?>">Home</a>
     <a href="<?php echo get_permalink(95) ?>">O nas</a>
     <a href="<?php echo get_permalink(98) ?>">Park maszynowy</a>

  </div>


  <div id="col4" class="footer_menu col-lg-2  ">
    <a href="<?php echo get_permalink(101) ?>">Realizacje</a>
    <a href="<?php echo get_permalink(104) ?>">Kontakt</a>
    </div>

  <div id="col5" class="footer_menu col-lg-2  ">

    <a class="fb_menu_link" href="<?php the_field('facebook_link')?>"><img src="<?php echo get_template_directory_uri() ?>/img/fb2.svg" alt=""></a>

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
     <a href="<?php echo home_url();?>">Home</a>
     <a href="<?php echo get_permalink(95) ?>">O nas</a>
     <a href="<?php echo get_permalink(98) ?>">Park maszynowy</a>
  </div>

  <div id="col4" class="footer_menu col-sm-6 ">
    <a href="<?php echo get_permalink(101) ?>">Realizacje</a>
    <a href="<?php echo get_permalink(104) ?>">Kontakt</a>
  </div>

  <div id="col5" class="footer_menu col-sm-6 ">
    <a class="fb_menu_link" href="<?php the_field('facebook_link')?>"><img src="<?php echo get_template_directory_uri() ?>/img/fb2.svg" alt=""></a>

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

</body>
</html>
