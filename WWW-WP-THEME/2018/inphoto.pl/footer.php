

<footer id="prgrm-footer" class="">

<div class="container">
<div class="row mt40">

<div class="col-md-12 mb40"><img src="<?php echo get_template_directory_uri() ?>/img/inphoto-logo-stopka.svg" alt=""></div>

  <div id="col1" class="col-lg-3 col-sm-4 ">
   <?php  dynamic_sidebar('stopka_kolumna_1'); ?>

  </div>

  <div id="col2" class="col-lg-3 col-sm-4 social_icon">
    <?php  dynamic_sidebar('stopka_kolumna_2'); ?>
  </div>


   <div id="col3" class="col-lg-2 col-sm-4 ">
     <a href="<?php echo get_permalink('10') ?>"><?php echo __('[:pl]Portret[:en]Portrait'); ?></a>
     <a href="<?php echo get_permalink('13') ?>"><?php echo __('[:pl]Wydarzenia[:en]Events'); ?></a>
     <a href="<?php echo get_permalink('16') ?>"><?php echo __('[:pl]Architektura[:en]Architecture'); ?></a>

	</div>


  <div id="col4" class="col-lg-2 col-sm-4 ">
    <a href="<?php echo get_permalink('20') ?>"><?php echo __('[:pl]Reklama[:en]Advertising'); ?></a>
    <a href="<?php echo get_permalink('28') ?>"><?php echo __('[:pl]Film[:en]Video'); ?></a>
    <a href="<?php echo get_permalink('31') ?>"><?php echo __('[:pl]Współpraca[:en]Cooperation'); ?></a>

  </div>

  <div id="col5" class="col-lg-2 col-sm-4 ">
<?php dynamic_sidebar('stopka_kolumna_5') ?>
  </div>

</div></div>
<?php dynamic_sidebar('facebook_url') ?>
<?php dynamic_sidebar('instagram_url') ?>


<div class="container mt50"><div id="copyright" class="row">
<div class="col-lg-12">

  <div style="float: left">© <?php echo date("Y") ?> - INPHOTO by Paweł Sarota.</div>
  <div style="float: right"> <a href="http://wizualni.pl">Design by wizualni.pl</a></div>
</div>
</div>
</div>

</footer>
<!-- <script src="http://localhost:35729/livereload.js">  </script> -->
<?php wp_footer(); ?>

</body>
</html>
