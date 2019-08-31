<div id="navigation-container">
<!-- =============MAIN MENU ============== -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="<?php bloginfo('url')?>">
    <img src="<?php echo get_template_directory_uri()?>/img/grafor-kurs-rysunku-i-malarstwa-krakow-logo-black.png" alt="Krakowski kurs rysunku i malarstwa Dla kandydatów na ASP i inne uczelnie artystyczne">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">


<?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'top_menu',
  'depth' => 2,
  'container' => false,
  'menu_class' => 'nav',
  'menu_id' => 'menu-menu-glowne',
  'walker' => new wp_bootstrap_navwalker())
);
?>
  </div>

</nav>
  <div id="logoshop"><a href="<?php echo get_permalink(217) ?>">
   <img src="<?php echo get_template_directory_uri()?>/img/grafor-kurs-rysunku-i-malarstwa-krakow-calendar.svg" alt="Kurs rysunku Kraków ASP">
   <p>TERMINY</p>
 </div></a>
</div>

<a href="<?php echo get_permalink(23) ?>">
<div id="reservation_widget">
  <p>REZERWACJA</p>
  <img src="<?php echo get_template_directory_uri()?>/img/grafor-kurs-rysunku-i-malarstwa-krakow-arrow.svg" alt="Grafor - kurs rysunku na ASP i inne uczelnie">
</div></a>
