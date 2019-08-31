<div id="navigation-container">
<!-- =============MAIN MENU ============== -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">


<a class="navbar-brand" href="<?php bloginfo('url')?>">
    <img src="<?php echo get_template_directory_uri()?>/img/logo.svg" alt="">
  </a>
  <button class="navbar-toggler" type="button">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">

<!-- <div class="container"><div class="row"> -->

<?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'top_menu',
  'depth' => 2,
  'container' => false,
  'menu_class' => 'nav',
  'menu_id' => 'menu-menu-glowne',
  //Process nav menu using our custom nav walker
  'walker' => new wp_bootstrap_navwalker())
);
?>

<!-- <div id="search_menu">      <?php get_search_form(); ?></div> -->
<div id="search_menu">    <?php echo do_shortcode('[ivory-search id="560" title="Default Search of"]') ?></div>
  </div>




</nav>
</div>
