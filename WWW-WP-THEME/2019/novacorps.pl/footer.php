


<footer id="prgrm-footer" class="">

<div class="container">
<div class="row">



  <div id="col1" class="col-lg-4">
   <!-- <?php  dynamic_sidebar('stopka_kolumna_1'); ?> -->
   <a class="brand-img" href="<?php home_url() ?>">
     <img src="<?php echo get_template_directory_uri() ?>/img/logo-stopka.svg" alt="">
   </a>
   <p>
<?php the_field('footer-col1', 906)?>

   </p>
  </div>

  <div id="col2" class="col-lg-2 menu_footer">
<h4 class="line">Nawigacja</h4>
<?php the_field('footer-col2', 906)?>
  </div>


   <div id="col3" class="col-lg-2 ">
     <h4 class="line">Nasze inwestycje</h4>
     <?php the_field('footer-col3', 906)?>

	</div>


  <div id="col4" class="col-lg-2 ">
    <h4 class="line">Kontakt</h4>
    <?php the_field('footer-col4', 906)?>

  </div>


  <div id="col5" class="col-lg-2 ">
   <h4 class="line">Social media</h4>
   <a target="_blank" class="facebook-icon" href="<?php the_field('facebook_link', 906)?>"></a>
 </div>

</div></div>

<div class="container mt50"><div id="copyright2" class="row">
<div class="col-lg-12 text-center">

<div class="flex_center">
  <p><?php echo date("Y"); ?> © <span>Nova Corps</span>  All rights reserved. </p>
  <div class="author">Powered by&nbsp;<a target="blank" href="https://progremo.pl/"><h2>Progremo.pl</h2></a></div>
  <div class="author"> Projekt&nbsp;<a target="blank" href="https://wizualni.pl/"><h2>Wizualni.pl</h2></a></div>
</div>

</div>
</div>
</div>

</footer>





<?php wp_footer(); ?>

</body>
</html>
