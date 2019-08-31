

<footer id="prgrm-footer" class="">

<div class="container">
  <div class="footer_logo"><img src="<?php echo get_template_directory_uri() ?>/img/logo-white.svg" alt=""></div>
<div class="row mt40">



  <div id="col1" class="col-lg-3 col-sm-6 ">
   <?php  dynamic_sidebar('stopka_kolumna_1'); ?>

  </div>

  <div id="col2" class="col-lg-3 col-sm-6 social_icon">
    <?php  dynamic_sidebar('stopka_kolumna_2'); ?>
  </div>


   <div id="col3" class="col-lg-2 col-sm-6 ">
   <a href="<?php echo get_permalink('2') ?>"><?php echo get_the_title('2') ?></a>
   <a href="<?php echo get_permalink('5') ?>"><?php echo get_the_title('5') ?></a>
   <a href="<?php echo get_permalink('8') ?>"><?php echo get_the_title('8') ?></a>
	</div>


  <div id="col4" class="col-lg-2 col-sm-6 ">
    <a href="<?php echo get_permalink('11') ?>"><?php echo get_the_title('11') ?></a>
    <a href="<?php echo get_permalink('14') ?>"><?php echo get_the_title('14') ?></a>
    <a href="<?php echo get_permalink('17') ?>"><?php echo get_the_title('17') ?></a>
  </div>

  <div id="col5"  class="col-lg-2">
    <?php  dynamic_sidebar('stopka_kolumna_5'); ?>
    <a href="<?php the_field('linkedin_link', 17)?>"><div class="iconbox"><img src="<?php echo get_template_directory_uri() ?>/img//linkedin-white.svg" alt="">Linkedin</div></a>

  </div>

</div></div>

<div class="container mt50"><div id="copyright" class="row">
<div class="col-lg-12">

  <div style="float: left">© 2018 - copyright. All rights reserved.</div>
  <div style="float: right"> <a href="wizualni.pl">Design by Wizualni.pl</a></div>
</div>
</div>
</div>

</footer>
<?php wp_footer(); ?>

<!-- <script src="http://localhost:35729/livereload.js"></script> -->
</body>
</html>
