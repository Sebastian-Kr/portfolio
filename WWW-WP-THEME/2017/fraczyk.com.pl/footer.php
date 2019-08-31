<footer id="prgrm-footer" style="background-color: #333;">

<a id="kontakt-hook" name="kontakt"></a>


<div class="container">
  <div class="row">
  <div class="col-sm-3">

      <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/krajowa_izba_radcow_fraczek-kancelaria-2.png" alt=""> -->
      <?php
      if (is_active_sidebar('footer1')) {
      dynamic_sidebar('footer1');
      }
      ?>
  </div>

  <div class="col-sm-3">
<h5>Menu</h5>
    <?php wp_nav_menu(array(

      'theme_location'=>'footer-menu',
      'menu_id' => false,
      'menu_class' => 'footer-nav',
      'container_id' => 'prgrm_foot_nav',
      'container_class' => false,

    )); ?>

  </div>

  <!-- <div class="clearfix visible-sm"></div> -->


  <div class="col-sm-6">
      <?php
      if (is_active_sidebar('footer3')) {
      dynamic_sidebar('footer3');
      }
      ?>
  </div>


  </div>
</div>

<div class="container-fluid copy"><div class="row">
  <div class="col-sm-6">Kancelaria Frączyk & Partnerzy (c) Wszelkie prawa zastrzeżone 2017r.</div>
  <div class="col-sm-6">Projektowanie stron internetowych: <a href="http://www.holybear.pl/">HB!Creative</a></div>
</div></div>


</footer>


<?php wp_footer(); ?>


<?php

 if( is_page('10') or is_page('198') or is_page('388') )
echo '<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRGDWjnkZHZBUVC00XzwEFXi1UMx1PZUg" type="text/javascript"></script>';
?>


</script>
</body>
</html>
