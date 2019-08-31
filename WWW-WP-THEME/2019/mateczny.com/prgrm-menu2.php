<div id="homepage"></div>
<div id="main-menu2">
<div id="navigation-container" class="start_menu">
<!-- =============MAIN MENU ============== -->
<a class="brand_box" href="<?php echo home_url() ?>">
    <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Mateczny Office Kraków - lokale biurowe dla biznesu"="">
</a>

<div class="body-menu">
<nav class=" navbar navbar-expand-lg navbar-light ">


  <a class="navbar_brand" href="<?php echo home_url() ?>">
      <img src="<?php echo get_template_directory_uri() ?>/img/logo-menu.svg" alt="Mateczny Office Kraków - lokale biurowe dla biznesu"="">
    </a>


    <div id="nav-icon2">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    </div>

  <div class="collapse navbar-collapse" id="navbarNav">

  <ul id="menu-menu-glowne" class="open-menu nav">
  <li id="section1_link" class=""><a title="" class="activeItem" href="<?php  if (!(is_front_page())) {echo home_url();}?>#section1"><?php echo __('[:pl]Lokalizacja[:en]Location'); ?></a></li>
  <li id="section2_link" class=""><a title="" class="dynamicItem" href="<?php  if (!(is_front_page())) {echo home_url();}?>#section2_anchor"><?php echo __('[:pl]Budynek[:en]Building'); ?></a></li>
  <li id="section3_link" class=""><a title="" class="dynamicItem" href="<?php  if (!(is_front_page())) {echo home_url();}?>#section3_anchor"><?php echo __('[:pl]Otoczenie[:en]Environment'); ?></a></li>
  <li id="section4_link" class=""><a title="" class="dynamicItem" href="<?php  if (!(is_front_page())) {echo home_url();}?>#section4"><?php echo __('[:pl]Wnętrza[:en]Interiors'); ?></a></li>
  <li id="section5_link" class=""><a title="" class="dynamicItem" href="<?php  if (!(is_front_page())) {echo home_url();}?>#section5"><?php echo __('[:pl]Lokale[:en]Units'); ?></a></li>
  <li id="section6_link" class=""><a title="" class="dynamicItem" href="<?php  if (!(is_front_page())) {echo home_url();}?>#section6"><?php echo __('[:pl]Standard[:en]Standard'); ?></a></li>
  <li id="section7_link" class=""><a title="" class="dynamicItem" href="<?php  if (!(is_front_page())) {echo home_url();}?>#section7"><?php echo __('[:pl]Deweloper[:en]Developer'); ?></a></li>
  <li id="section8_link" class=""><a title="" class="dynamicItem" href="<?php  if (!(is_front_page())) {echo home_url();}?>#section8"><?php echo __('[:pl]Kontakt[:en]Contact'); ?></a></li>
  </ul>
  </div>

  <div class="lang-box right-box">
      <div id="lang"><?php if ( function_exists ( 'wpm_language_switcher' ) ) wpm_language_switcher (); ?></div>
    </div>



  </nav>
</div>
<div class="clearfix"></div>
</div>

</div>
