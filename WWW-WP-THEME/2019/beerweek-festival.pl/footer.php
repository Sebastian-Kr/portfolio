
<footer id="prgrm-footer" style="background-image: url('<?php the_field('header_bg')?>')">



<div class="container">
<div class="row mt40 ">



  <div id="col1" class="col-md-4 col-lg-2 col-sm-4 ">
<img class="logo" src="<?php echo get_template_directory_uri() ?>/img/bw2015.png" alt="">
  </div>

  <div id="col2" class="col-md-4 col-lg-2 col-sm-4 ">
    <?php  dynamic_sidebar('stopka_kolumna_1'); ?>
  </div>


  <div id="col3" class="col-md-4 col-lg-2 col-sm-4 ">
<h4 class="line">SOCIAL MEDIA</h4>
<a class="facebook_icon" href="<?php the_field('facebook_link')?>"></a>
  </div>

<div id="col4" class="col-lg-6">
  <?php  dynamic_sidebar('stopka_kolumna_3'); ?>
</div>



</div>
</div>

<div class="container mt30 ">
  <div id="copyright" class="row">
    <div class="col-lg-12">
      <div style="float: left">Copyright © BeerWeek <?php echo date("Y"); ?>. All rights reserved.
      <a style="display:inline" href="http://beerweek-festival.pl/Regulamin_beerweek_05.pdf" target="_blank">Regulamin</a>
    </div>
      <div style="float: right"> <a href="https://wizualni.pl">Projekt: Wizualni.pl</a></div>
    </div>
  </div>
</div>




</footer>


<?php wp_footer(); ?>
</body>

</html>
