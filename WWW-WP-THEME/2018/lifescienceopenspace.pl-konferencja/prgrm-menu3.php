<div id="navigation-container">
<!-- =============MAIN MENU ============== -->
<nav class="navbar navbar-expand-lg navbar-light bg-ligh ">
<div class="container">


  <div class="logo_box">
    <a class="navbar-brand" href="<?php echo home_url() ?>">
        <img src="<?php echo get_template_directory_uri() ?>/img/logo_LSOS_duze.png" alt="">
    </a>
  </div>
  <div class="box-shadow"></div>


<div class="right_side">

    <div id="lang"><?php if ( function_exists ( 'wpm_language_switcher' ) ) wpm_language_switcher (); ?></div>
      <div id="nav-icon2">
      <span></span>
      <span></span>
      <span></span>
      </div>
</div>

</div>
</nav>
</div>


<div id="side_bar_menu">
  <ul id="menu-menu-glowne" class="open-menu nav scroll_menu">
  <li id="menu-okonferencji" ><a href="<?php  echo home_url();?>/#okonferencji">O Konferencji</a></li>
  <li id="menu-katPrezentacji" ><a href="<?php  echo home_url();?>/#kategorieprezentacji">Kategorie Prezentacji</a></li>
  <li id="menu-tematy" ><a href="<?php  echo home_url();?>/#tematysesji">Tematy Sesji</a></li>
  <li id="menu-nagrody" ><a href="<?php  echo home_url();?>/#nagrody">Nagrody</a></li>
  <li id="menu-program" ><a href="<?php  echo home_url();?>/#program">Program</a></li>
  <li id="menu-prelegenci" ><a href="<?php  echo home_url();?>/#prelegenci">Prelegenci</a></li>
  <li id="menu-rejestracja" ><a href="<?php  echo home_url();?>/#rejestracja">ZAREJESTRUJ SIĘ!</a></li>
  <li id="menu-partnerzy" ><a href="<?php  echo home_url();?>/#partnerzy">Partnerzy</a></li>
  <li id="menu-wolontariat" ><a href="<?php  echo home_url();?>/#wolontariat">Wolontariat</a></li>
  </ul>

</div>
