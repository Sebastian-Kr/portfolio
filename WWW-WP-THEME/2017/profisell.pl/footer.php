

<footer id="prgrm-footer" class="">

<div class="container">

<div class="row logo">
<div class="col-lg-12">  <img src="<?php echo get_template_directory_uri() ?>/img/home/profisell24.svg" alt=""></div></div>

<div class="row">

<div id="col1" class="col-lg-3 col-sm-5 ">
<?php echo dynamic_sidebar( 'footer1' ); ?>
</div>
<div class="col-lg-2 col-sm-4 foot-menu pl5proc">
  <a href="<?php echo home_url() ?>">Home</a>
  <a href="<?php echo home_url() ?>/#onas">O nas</a>
  <a href="<?php echo home_url() ?>/#jakdzialmy">Jak działamy?</a>
</div>
<div class="col-md-2 col-sm-3 foot-menu">
  <a href="<?php echo home_url() ?>/klienci-indywidualni">Klienci indywidualni</a>
  <a href="<?php echo home_url() ?>/firmy-projektowe/">Firmy</a>
</div>
<div id="col4" class="col-lg-2 col-sm-4"> <a href="http://profisell24.pl/" target="blank"><?php echo dynamic_sidebar('footer4'); ?></a></div>
<div id="col5" class="col-lg-2 col-sm-4"> <?php echo dynamic_sidebar('footer5'); ?></div>
<div id="col6" class="col-lg-1 col-sm-4"> <?php echo dynamic_sidebar('footer6'); ?></div>
</div></div>

<div class="container"><div id="copyright" class="row">
<div class="col-lg-12">
  <div class="">© 2017 - ProfiSell. All rights reserved.</div>
  <div class="">Designed by <a href="wizualni.pl">wizualni.pl</a></div>
</div>
</div></div>
</footer>


<?php wp_footer(); ?>


<!-- <script src="http://localhost:35729/livereload.js"></script> -->

</body>
</html>
