<div class="prefooter_newsletter">
   <?php  dynamic_sidebar( 'newsletter' ); ?>
</div>

<footer id="prgrm-footer" class="">

<div class="container">
<div class="row">



  <div id="col1" class="col-md-4">
   <?php  dynamic_sidebar('stopka_kolumna_1'); ?>
   <img src="<?php echo get_template_directory_uri() ?>/img/klaster-logo-normal.png" alt="">
  </div>

  <div id="col2" class="col-md-4 social_icon">
    <?php  dynamic_sidebar('stopka_kolumna_2'); ?>
    <?wp_nav_menu( array(
      'menu_class' =>  'nav',
      'menu_id' => 'menu-footer',

    ) ); ?>

  </div>


   <div id="col3" class="col-md-4">
	 <?php  dynamic_sidebar( 'stopka_kolumna_3' ); ?>

   <?wp_nav_menu( array(
     'menu_class' => 'nav',
       'theme_location' => 'footer-menu',
     'menu_id' => 'menu_footer_box',

   ) ); ?>

	</div>




</div></div>

<!-- <div class="container mt50"><div id="copyright" class="row">
<div class="col-lg-12">

  <div style="float: left">© 2018 - copyright. All rights reserved.</div>
  <div style="float: right"> <a href="wizualni.pl">Design by Progremo.pl</a></div>
</div>
</div>
</div> -->

</footer>


<?php wp_footer(); ?>




<!-- <script src="http://localhost:35729/livereload.js"></script> -->
</body>
</html>
