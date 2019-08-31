<div id="homepage"></div>
<!-- =============MAIN MENU ============== -->
<nav id="main-menu3" class="">
  <a class="navbar-brand navbar-brand2 desktop-brand" href="<?php echo home_url() ?>">
    <img src="<?php echo get_template_directory_uri() ?>/img/logo71.png" alt="">
  </a>

<div id="mobile_bar">
  <a  href="<?php echo home_url() ?>">
    <img src="<?php echo get_template_directory_uri() ?>/img/AV.png" alt="">
  </a>

  <div id="nav-icon2">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
<div id="prgrm_mobile_menu_container">
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      <div class="lang-box right-box"><?php echo __('[:pl]język[:en]language:'); ?>:
        <div id="lang"><?php if ( function_exists ( 'wpm_language_switcher' ) ) wpm_language_switcher (); ?></div>
      </div>
</div>

</nav>
