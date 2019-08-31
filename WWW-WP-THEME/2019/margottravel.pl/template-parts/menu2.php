<div id="homepage"></div>
<div id="main-menu2">
<div id="navigation-container" class="start_menu">
<!-- =============MAIN MENU ============== -->


<div class="body-menu">
<nav class=" navbar navbar-expand-lg navbar-light ">


  <a class="navbar_brand" href="<?php echo home_url() ?>">
      <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="">
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

  <li  data-target="start" class="scroll-button">
    <a  class="<?php if (is_front_page()) {echo 'activeItem';} ?>" data-activeSection="s1" href="<?php echo get_home_url();?>">Home</a>
  </li>

  <li  data-target="inspiracje" class="scroll-button">
    <a  data-activeSection="inspiracje" href="<?php echo get_home_url();?>/#inspiracje">Inspiracje</a>
  </li>

  <li  class="">
    <a  class="<?php if (is_page(20)) {echo 'activeItem';} ?>" data-activeSection="s3" href="<?php echo get_permalink( 20 ) ?>">Poznaj Margot</a>
  </li>

  <li  data-target="kontakt" class="scroll-button">
    <a  data-activeSection="s4" href="<?php echo get_home_url();?>/#kontakt">Kontakt</a>
  </li>

  <li  class="client_panel">
    <a  data-activeSection="s5" href="<?php echo get_permalink( 137 ) ?>">Panel klienta</a>
  </li>

  </ul>
  </div>



  </nav>
</div>
<div class="clearfix"></div>
</div>

</div>
