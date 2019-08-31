<div id="navigation-container">
<!-- =============MAIN MENU ============== -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">


<a class="navbar-brand" href="<?php echo home_url() ?>">
    <img src="<?php echo get_template_directory_uri() ?>/img/logo-menu.png" alt="">
  </a>


  <div id="nav-icon2">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  </div>

   <?php  dynamic_sidebar( 'menu_lewa' ); ?>
  <div class="collapse navbar-collapse" id="navbarNav">

<ul id="menu-menu-glowne" class="open-menu nav">
<li id="menu-home" class=""><a title="" class="activeItem" href="<?php  if ((is_front_page())) {echo '#home';} else {echo home_url();}?>">HOME</a></li>
<li id="menu-galeria"><a title="" class=" dynamicItem" href="<?php if (!(is_front_page())) {echo home_url().'/';} ?>#gallery-square-fixed">GALERIA</a></li>
<li id="menu-kontakt"><a title="" class=" dynamicItem" href="<?php if (!(is_front_page())) {echo home_url().'/';} ?>#kontakt-info">KONTAKT</a></li>
</ul>  </div>
   <?php  dynamic_sidebar( 'menu_prawa' ); ?>

<?php get_template_part('special_modules/content', 'open')?>


</nav>
</div>
