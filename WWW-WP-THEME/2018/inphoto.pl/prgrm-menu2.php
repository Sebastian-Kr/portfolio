
<div id="main-menu2">
<div id="navigation-container">
<!-- =============MAIN MENU ============== -->


<div class="body-menu">

<nav id="navbar" class=" container-fluid navbar navbar-expand-lg navbar-light ">


  <a class="navbar-brand navbar-brand2" href="<?php echo home_url() ?>">
      <img src="<?php echo get_template_directory_uri() ?>/img/inphoto-logo.svg" alt="">
    </a>




        <div class="collapse navbar-collapse" id="navbarNav">

      <ul id="menu-menu-glowne" class="open-menu nav">

      <li class="<?php if (is_front_page()) echo 'current-menu-item';?>"><a href="<?php echo home_url() ?>">Home</a></li>
      <li class="<?php if (is_page('10')) echo 'current-menu-item';?>"><a href="<?php echo get_permalink('10') ?>"><?php echo __('[:pl]Portret[:en]Portrait'); ?></a></li>
      <li class="<?php if (is_page('13')) echo 'current-menu-item';?>"><a href="<?php echo get_permalink('13') ?>"><?php echo __('[:pl]Wydarzenia[:en]Events'); ?></a></li>
      <li class="<?php if (is_page('16')) echo 'current-menu-item';?>"><a href="<?php echo get_permalink('16') ?>"><?php echo __('[:pl]Architektura[:en]Architecture'); ?></a></li>
      <li class="<?php if (is_page('20')) echo 'current-menu-item';?>"><a href="<?php echo get_permalink('20') ?>"><?php echo __('[:pl]Reklama[:en]Advertising'); ?></a></li>
      <li class="<?php if (is_page('28')) echo 'current-menu-item';?>"><a href="<?php echo get_permalink('28') ?>"><?php echo __('[:pl]Film[:en]Video'); ?></a></li>
      <li class="<?php if (is_page('31')) echo 'current-menu-item';?>"><a href="<?php echo get_permalink('31') ?>"><?php echo __('[:pl]Współpraca[:en]Cooperation'); ?></a></li>
      <li class="<?php if (is_page('23')) echo 'current-menu-item';?>"><a href="<?php echo get_permalink('23') ?>"><?php echo __('[:pl]Kontakt[:en]Contact'); ?></a></li>

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

    <div id="lang"><?php if ( function_exists ( 'wpm_language_switcher' ) ) wpm_language_switcher (); ?></div>


    <a target="blank" href="<?php the_field('facebook_url', 6)?>"><div class="facebook"></div></a>
    <a target="blank" href="<?php the_field('instagram_url', 6)?>"><div class="instagram"></div></a>

    </div>


  </nav>
</div>
<div class="clearfix"></div>
</div>

</div>
