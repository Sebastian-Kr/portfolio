<div id="homepage"></div>
<!-- =============MAIN MENU ============== -->
<nav id="main-menu3" class="">
  <a class="navbar-brand navbar-brand2 desktop-brand" href="<?php echo home_url() ?>">
    <img src="<?php echo get_template_directory_uri() ?>/img/logo_menu.png" alt="">
  </a>

<div id="mobile_bar">
  <a  href="<?php echo home_url() ?>">
    <?php if (is_front_page()): ?>
      <img class="mobile_logo"  src="<?php echo get_template_directory_uri() ?>/img/AV.png" alt="">
    <?php else: ?>
    <img class="mobile_logo"  src="<?php echo get_template_directory_uri() ?>/img/logo_menu.png" alt="">
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
      <div class="lang-box right-box">
        <div id="lang"><?php if ( function_exists ( 'wpm_language_switcher' ) ) wpm_language_switcher (); ?></div>
      </div>
      <a target="_blank" href="<?php the_field('facebook_link', 826)?>">
        <img class="social_media_link" src="<?php echo get_template_directory_uri() ?>/img/FB_icona_menu.png" alt="">
      </a>
      <a target="_blank" href="<?php the_field('instagram_link', 826)?>">
        <img class="social_media_link" src="<?php echo get_template_directory_uri() ?>/img/IN_icona_menu.png" alt="">
      </a>
</div>

</nav>
