


<footer id="prgrm-footer" class="">

<div class="container">
<div class="row">



  <div id="col1" class="col-lg-4">
    <?php the_field('footer-col1', 906)?>


  </div>

  <div id="col2" class="col-lg-2 menu_footer">

<?php the_field('footer-col2', 906)?>

<a href="<?php echo home_url(); ?>">Strona główna</a>
<a href="<?php echo home_url(); ?>trasy-przejazdow/">Trasy przejazdów</a>
<a href="<?php echo home_url(); ?>o-nas/">O nas</a>
<a class="scroll" href="<?php echo home_url(); ?>kontakt/">Kontakt</a>

  </div>


   <div id="col3" class="col-lg-3 ">
     <?php the_field('footer-col3', 906)?>

	</div>


  <div id="col4" class="col-lg-3 ">
    <?php the_field('footer-col4', 906)?>

  </div>



</div></div>

<div class="container mt50"><div id="copyright2" class="row">
<div class="col-lg-12 text-center">

<div class="flex_center">
  <p><?php echo date("Y"); ?> © <span>Euro-Bus Józef Gac</span>  All rights reserved. </p>
  <div class="author"><br><a target="blank" href="https://progremo.pl/"><h2>Progremo.pl - strony internetowe, aplikacje e-commerce</h2></a></div>
</div>

</div>
</div>
</div>

</footer>


<?php wp_footer(); ?>

</body>
</html>
