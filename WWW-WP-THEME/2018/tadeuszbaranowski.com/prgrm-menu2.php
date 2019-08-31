
<div id="main-menu2">
<div id="navigation-container">
<!-- =============MAIN MENU ============== -->


<div class="body-menu <?php if (is_front_page()) {echo 'frontpage';} ?>">

<nav id="navbar" class=" container-fluid navbar navbar-expand-lg navbar-light ">


  <a class="navbar-brand navbar-brand2" href="<?php echo home_url() ?>">
      <img src="<?php echo get_template_directory_uri() ?>/img/T.Baranowski_logo.svg" alt="">
    </a>




        <div class="collapse navbar-collapse" id="navbarNav">

      <ul id="menu-menu-glowne" class="open-menu nav">

      <li class="<?php if (is_front_page()) echo 'current-menu-item';?>"><a href="<?php echo home_url() ?>">HOME</a></li>
      <li class="<?php if (is_page('16')) echo 'current-menu-item';?>"><a href="<?php echo get_permalink('16') ?>"><?php echo __('[:pl]ATELIER[:en]ATELIER'); ?></a></li>
      <li class="<?php if (is_page('412')) echo 'current-menu-item';?>"><a href="<?php echo get_permalink('412') ?>"><?php echo __('[:pl]O MNIE[:en]ABOUT ME'); ?></a></li>
      <li class="<?php if (is_page('436')) echo 'current-menu-item';?>"><a href="<?php echo get_permalink('436') ?>"><?php echo __('[:pl]WYSTAWY[:en]EXHIBITIONS'); ?></a></li>
      <li class="<?php if (is_page('23')) echo 'current-menu-item';?>"><a href="<?php echo get_permalink('23') ?>"><?php echo __('[:pl]KONTAKT[:en]CONTACT'); ?></a></li>

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
    <div class="menu_title">MENU</div>
    </div>

    <div id="lang"><?php if ( function_exists ( 'wpm_language_switcher' ) ) wpm_language_switcher (); ?></div>


    <a target="blank" href="<?php the_field('link_facebook', 23)?>"><div class="facebook"></div></a>
    <a target="blank" href="<?php the_field('link_instagram', 23)?>"><div class="instagram"></div></a>

    </div>


  </nav>
</div>
<div class="clearfix"></div>
</div>

</div>
