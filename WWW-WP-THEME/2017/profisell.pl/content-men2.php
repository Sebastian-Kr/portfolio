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
<li id="homelink"  class="<?php if( $post->ID == 2)  {echo 'class="current-menu-item"';}?>"><a title="HOME" href="<?php echo home_url() ?>/#home-page" >HOME</a></li>
<li id="onaslink" ><a href="<?php echo home_url() ?>/#o-nas">O NAS</a></li>
<li id="jakdzialamylink" ><a href="<?php echo home_url() ?>/#jak-dzialamy">JAK DZIAŁAMY?</a></li>
<li class="<?php if( is_page(75))  {echo 'current-menu-item';}?>"><a href="<?php echo home_url() ?>/klienci-indywidualni/" >KLIENCI INDYWIDUALNI</a></li>
<li class="<?php if( is_page(78))  {echo 'current-menu-item';}?>"><a href="<?php echo home_url() ?>/firmy-projektowe/" >FIRMY PROJEKTOWE</a></li>
<li class="<?php if( is_page(81))  {echo 'current-menu-item';}?>"><a href="<?php echo home_url() ?>/zespol/" >NASZ ZESPÓŁ</a></li>
<li id="kontaktlink"><a href="<?php echo home_url() ?>/#kontakt-profisell">KONTAKT</li></a>
</ul>



  </div>


</nav>
  <div id="logoshop">
<a href="http://profisell24.pl/" target="_blank">
  <img src="<?php echo get_template_directory_uri()?>/img/home/profisell24-footer.svg" alt="">
</a>
</div>

</div>
