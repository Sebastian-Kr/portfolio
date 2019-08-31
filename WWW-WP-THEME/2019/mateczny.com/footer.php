

<footer id="prgrm-footer" class="">



<div class="container">
  <div class="row">
    <div class="col-md-12">
      <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Mateczny Office Kraków - lokale biurowe dla biznesu">
    </div>
  </div>
<div class="row mt40 ">



  <div id="col1" class="col-lg-3 col-sm-6 ">
   <?php  dynamic_sidebar('stopka_kolumna_1'); ?>
  </div>

  <div id="col2" class="col-lg-3 col-sm-6 social_icon">

    <a title="" class="activeItem" href="<?php  if (!(is_front_page())) {echo home_url();}?>#section1"><?php echo __('[:pl]Lokalizacja[:en]Location'); ?></a>
    <a title="" class="dynamicItem" href="<?php  if (!(is_front_page())) {echo home_url();}?>#section2_anchor"><?php echo __('[:pl]Budynek[:en]Building'); ?></a>
    <a title="" class="dynamicItem" href="<?php  if (!(is_front_page())) {echo home_url();}?>#section3_anchor"><?php echo __('[:pl]Otoczenie[:en]Environment'); ?></a>
    <a title="" class="dynamicItem" href="<?php  if (!(is_front_page())) {echo home_url();}?>#section4"><?php echo __('[:pl]Wnętrza[:en]Interiors'); ?></a>

  </div>


  <div id="col3" class="col-lg-3 col-sm-6 social_icon">
    <a title="" class="dynamicItem" href="<?php  if (!(is_front_page())) {echo home_url();}?>#section5"><?php echo __('[:pl]Lokale[:en]Local'); ?></a>
    <a title="" class="dynamicItem" href="<?php  if (!(is_front_page())) {echo home_url();}?>#section6"><?php echo __('[:pl]Standard[:en]Standard'); ?></a>
    <a title="" class="dynamicItem" href="<?php  if (!(is_front_page())) {echo home_url();}?>#section7"><?php echo __('[:pl]Deweloper[:en]Developer'); ?></a>
    <a title="" class="dynamicItem" href="<?php  if (!(is_front_page())) {echo home_url();}?>#section8"><?php echo __('[:pl]Kontakt[:en]Contact'); ?></a>
  </div>
<div id="col4" class="col-lg-3 col-sm-6 social_icon">
  <a href="<?php the_field('facebook_link')?>">
    <div class="facebook_image">Facebook</div>
  </a>
</div>



</div>
</div>

<div class="container mt50">
  <div id="copyright" class="row">
    <div class="col-lg-12">
      <div style="float: left">© 2019 - copyright. All rights reserved.</div>
      <div style="float: right"> <a href="https://wizualni.pl">Design by Wizualni.pl</a></div>
    </div>
  </div>
</div>




</footer>



<?php wp_footer(); ?>

</body>

</html>
