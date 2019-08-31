<div id="homepage" ></div>
<!-- =============MAIN MENU ============== -->
<nav id="main-menu4" class="container">

<div class="menu_container" >
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      <div class="lang-box right-box">
        <div id="lang"><?php if ( function_exists ( 'wpm_language_switcher' ) ) wpm_language_switcher (); ?></div>
      </div>
</div>

<div class="logo">
  <a class="" href="<?php echo home_url() ?>">
    <img src="<?php echo get_template_directory_uri() ?>/img/logo_menu.png" alt="">
  </a>
</div>

<div class="contact_box">
  <!-- <div class="social_box">
    <a href="<?php the_field('facebook_link')?>"><img src="<?php echo get_template_directory_uri() ?>/img/FB.png" alt=""></a>
    <a href="<?php the_field('instagram_link')?>"><img src="<?php echo get_template_directory_uri() ?>/img/IN.png" alt=""></a>
  </div> -->
  <p><a href="tel:+48791780980">+48 791 780 980</a></p>
</div>

</nav>
