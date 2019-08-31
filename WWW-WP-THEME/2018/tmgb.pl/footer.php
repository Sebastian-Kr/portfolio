

<footer id="prgrm-footer" class="">

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo2.svg" alt=""></a>
    </div>
  </div>
</div>

<div class="container">

<div class="row mt40">



  <div id="col1" class="col-lg-3 col-sm-6 ">
   <?php  dynamic_sidebar('stopka_kolumna_1'); ?>
  </div>

  <div id="col2" class="col-lg-3 col-sm-6 social_icon">
    <?php  dynamic_sidebar('stopka_kolumna_2'); ?>
  </div>


   <div id="col3" class="footer_menu  col-lg-2 col-sm-6 ">
     <?wp_nav_menu( array(
       'menu_class' => 'nav',
         'theme_location' => 'footer-menu',
       'menu_id' => 'menu_footer_box',

     ) ); ?>
   </div>

  <div id="col5" class="footer_menu col-lg-2 col-sm-6 ">
    <a target="blank" class="fb_menu_link" href="<?php the_field('facebook_link', 5)?>">
      <img src="<?php echo get_template_directory_uri() ?>/img/fb2.svg" alt="">
    </a>
    <p>Social Media</p>
  </div>


</div>
</div>

<div class="container mt50"><div id="copyright" class="row">
<div class="col-lg-12">

  <div style="float: left">© 2018 - copyright. All rights reserved.</div>
  <div style="float: right"> <a href="https://wizualni.pl">Design by Wizualni.pl</a></div>
</div>
</div>
</div>

</footer>


<?php wp_footer(); ?>

</body>
</html>
