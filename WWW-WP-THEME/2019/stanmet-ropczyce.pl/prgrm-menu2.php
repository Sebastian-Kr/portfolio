
<div id="main-menu2">
<div id="navigation-container">
<!-- =============MAIN MENU ============== -->


<div class="body-menu">

<nav id="navbar" class=" container-fluid navbar navbar-expand-lg navbar-light ">


  <a id="text-logo" class="navbar-brand navbar-brand2" href="<?php echo home_url() ?>">
    <h2>balustrady, bramy, furtki</h2>
      <h1><span>STAN</span>MET</h1>
      <h2><span>ROPCZYCE</span></h2>
    </a>




        <div class="collapse navbar-collapse" id="navbarNav">

      <ul id="menu-menu-glowne" class="open-menu nav">

      <li class="<?php if (is_front_page()) echo 'current-menu-item';?>"><a href="<?php echo home_url() ?>">Strona główna</a></li>
      <li class="<?php if (is_page('10')) echo 'current-menu-item';?>"><a href="<?php echo get_permalink('10') ?>"><?php echo __('Ogrodzenia'); ?></a></li>
      <li class="<?php if (is_page('13')) echo 'current-menu-item';?>"><a href="<?php echo get_permalink('13') ?>"><?php echo __('Balustrady'); ?></a></li>
      <li class="<?php if (is_page('16')) echo 'current-menu-item';?>"><a href="<?php echo get_permalink('16') ?>"><?php echo __('Bramy i furtki'); ?></a></li>
      <li class="<?php if (is_page('23')) echo 'current-menu-item';?>"><a href="<?php echo get_permalink('23') ?>"><?php echo __('Kontakt'); ?></a></li>

      </ul>
      </div>

    <div id="controls">
      <div class="toggle_desktop_menu">
      <div id="nav-icon2">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      </div>
    <div class="menu_title">menu</div>
    </div>


    </div>


  </nav>
</div>
<div class="clearfix"></div>
</div>

</div>
