
<footer id="prgrm-footer" class="">



<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="<?php echo home_url() ?>">
          <img class="logo" src="<?php echo get_template_directory_uri() ?>/img/margot-stopka.svg" alt="">
      </a>

    </div>
  </div>
<div class="row mt40 ">



  <div id="col1" class="col-lg-3 col-sm-6 ">
   <?php  dynamic_sidebar('stopka_kolumna_1'); ?>

  </div>

  <div id="col2" class="col-lg-3 col-sm-6 ">
   <?php  dynamic_sidebar('stopka_kolumna_2'); ?>
  </div>

  <div id="col3" class="col-lg-2 col-sm-6 social_icon">
<?php  dynamic_sidebar('stopka_kolumna_3'); ?>
  </div>


  <div id="col4" class="col-lg-2 col-sm-6 social_icon">
<?php  dynamic_sidebar('stopka_kolumna_4'); ?>
  </div>


<div id="col5" class="col-lg-2 col-sm-6 social_icon">
  <a target="blank" href="<?php the_field('facebook_link', 8)?>">
    <img class="mb10" src="<?php echo get_template_directory_uri() ?>/img/fb.svg" alt="">
  </a>

  <a target="blank" href="<?php the_field('instagram_link', 8)?>">
    <img class="mb10" src="<?php echo get_template_directory_uri() ?>/img/inst.svg" alt="">
  </a>


</div>



</div>
</div>




</footer>

<div id="copyright2" class="dark-box" >
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div>@ <?php echo the_date('Y'); ?> - Margot Travel - All rights reserved<span> | </span>
        <a href="<?php echo get_permalink(204) ?>">Polityka prywatności</a> <span> | </span>
        <a target="blank" href="<?php the_field('pdf_1_link')?>">Wpis do Rejestru Organizatorów Turystyki</a> <span> | </span>
        <a target="blank" href="<?php the_field('pdf_2_link')?>">Gwarancja Ubezpieczeniowa</a>

      </div>
      <div> <a href="https://wizualni.pl">Design by Wizualni.pl</a></div>
    </div>
  </div>
</div>
</div>


<?php wp_footer(); ?>
<script type="text/javascript" src="http://localhost:35729/livereload.js"></script>
</body>

</html>
