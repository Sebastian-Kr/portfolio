<?php
// special class for custom post type
$css_special_class = '';
if (is_singular('medianews')) {$css_special_class = 'medianews';}
if (is_singular('spektakle')) {$css_special_class = 'spektakle';}

?>


<div id="main-menu2" class="<?php echo $css_special_class ?>">
<div id="navigation-container">
<!-- =============MAIN MENU ============== -->


<div class="body-menu">

<nav class="navbar navbar-expand-lg navbar-light bg-light">


  <a class="navbar-brand " href="<?php echo home_url() ?>">
      <img src="<?php echo get_template_directory_uri() ?>/img/materia-logo-menu.svg" alt="">
    </a>

    <a class="navbar-brand navbar-brand2" href="<?php echo home_url() ?>">
        <img src="<?php echo get_template_directory_uri() ?>/img/groteska-menu.svg" alt="">
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

<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

  </div>



  <a href="<?php the_field('facebook_link', 2)?>">
    <div class="facebook_icon"></div></a>

    <div class="lang-box right-box">
      <div id="lang"><?php if ( function_exists ( 'wpm_language_switcher' ) ) wpm_language_switcher (); ?></div>
    </div>

  </nav>
</div>
<div class="clearfix"></div>
</div>

</div>
