<div id="homepage"></div>
<!-- =============MAIN MENU ============== -->
<nav id="main-menu3" class="">
  <a class="navbar-brand navbar-brand2 desktop-brand" href="<?php echo home_url() ?>">
    <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="">
  </a>

<div id="mobile_bar">
  <a  href="<?php echo home_url() ?>">
    <?php if (is_front_page()): ?>
      <img class="mobile_logo"  src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="">
    <?php else: ?>
    <img class="mobile_logo"  src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="">
    <?php endif; ?>
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
<div id="menu_container">
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</div>

</nav>
