

<footer id="prgrm-footer" class="">

<div class="container">
<div class="row mt40">



  <div id="col1" class="col-lg-5 col-sm-6 ">
   <?php  dynamic_sidebar('stopka_kolumna_1'); ?>
  </div>

  <div id="col2" class="offset-lg-1 col-lg-3 col-sm-6 social_icon">
    <?php  dynamic_sidebar('stopka_kolumna_2'); ?>

  </div>


   <div id="col3" class="col-lg-3 col-sm-6 ">
	 <?php  dynamic_sidebar( 'stopka_kolumna_3' ); ?>
	</div>



</div></div>

<div class="container mt50"><div id="copyright" class="row">
<div class="col-lg-12">

  <div style="float: left">© <?php echo the_date('Y') ?> - copyright. All rights reserved.</div>
  <div style="float: right"> <a href="http://progremo.pl">Progremo.pl - Tworzenie stron www</a></div>
</div>
</div>
</div>

</footer>


<?php wp_footer(); ?>




<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>
