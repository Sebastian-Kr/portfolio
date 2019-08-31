<div id="navigation-container">
<!-- =============MAIN MENU ============== -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="<?php bloginfo('url')?>">
    <img src="<?php echo get_template_directory_uri()?>/img/home/profisell-logo.svg" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse <?php if (is_front_page()) { echo 'null-underscore';} ?>" id="navbarNav">



<?php /* Primary navigation */
// wp_nav_menu( array(
//   'menu' => 'top_menu',
//   'depth' => 2,
//   'container' => false,
//   'menu_class' => 'nav',
//   //Process nav menu using our custom nav walker
//   'walker' => new wp_bootstrap_navwalker())
// );
?>

<ul id="menu-menu-glowne" class="nav">
<li class="current-menu-item active"><a title="HOME" href="http://localhost/wordpress/profisell/" >HOME</a></li>
<li><a href="http://localhost/wordpress/profisell/#onas">O NAS</a></li>
<li><a href="http://localhost/wordpress/profisell/#jakdzialamy">JAK DZIAŁAMY?</a></li>
<li><a href="http://localhost/wordpress/profisell/klienci-indywidualni/" >KLIENCI INDYWIDUALNI</a></li>
<li><a href="http://localhost/wordpress/profisell/firmy-projektowe/" >FIRMY PROJEKTOWE</a></li>
<li><a href="http://localhost/wordpress/profisell/zespol/" >NASZ ZESPÓŁ</a></li>
<li id="kontaktlink"><a href="http://localhost/wordpress/profisell/#kontakt" >KONTAKT</a></li>
</ul>



  </div>


</nav>
  <div id="logoshop">
<a href="http://profisell24.pl/" target="_blank">
  <img src="<?php echo get_template_directory_uri()?>/img/home/profisell24-footer.svg" alt="">
</a>
</div>

</div>
