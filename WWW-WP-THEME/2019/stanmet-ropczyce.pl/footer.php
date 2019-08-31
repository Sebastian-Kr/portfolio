

<footer id="prgrm-footer" class="">

<div class="container">
<div class="row mt40">


  <div id="col1" class="col-md-4 ">

     <a id="text-logo" class="navbar-brand navbar-brand2" href="<?php echo home_url() ?>">
       <h2>balustrady, bramy, furtki</h2>
         <h1><span>STAN</span>MET</h1>
         <h2><span>ROPCZYCE</span></h2>
       </a>

  </div>




   <div id="col3" class="col-md-3 ">
     <a href="<?php echo get_permalink('10') ?>"><?php echo __('Ogrodzenia'); ?></a>
     <a href="<?php echo get_permalink('13') ?>"><?php echo __('Balustrady'); ?></a>
     <a href="<?php echo get_permalink('16') ?>"><?php echo __('Bramy i furtki'); ?></a>

	</div>



  <div id="col5" class="col-md-4 ">
<?php dynamic_sidebar('stopka_kolumna_5') ?>
  </div>

</div></div>


<div class="container mt50"><div id="copyright" class="row">
<div class="col-lg-12">

  <div style="float: left">© <?php echo date("Y") ?> - STAN-MET Stanisław Krajewski.</div>
  <div style="float: right"> <a href="http://progremo.pl">Wdrożenie PROGREMO.PL - strony internetowe | aplikacje e-commerce</a></div>
</div>
</div>
</div>

</footer>
<?php wp_footer(); ?>
<script src="http://localhost:35729/livereload.js">  </script>

</body>
</html>
