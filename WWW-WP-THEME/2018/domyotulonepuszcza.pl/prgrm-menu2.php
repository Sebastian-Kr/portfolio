<div id="homepage"></div>
<div id="main-menu2">
<div id="navigation-container">
<!-- =============MAIN MENU ============== -->


<div class="body-menu">

<nav class=" navbar navbar-expand-lg navbar-light ">


  <a class="navbar-brand navbar-brand2" href="<?php echo home_url() ?>">
      <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="">
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

  <ul id="menu-menu-glowne" class="open-menu nav">
  <li id="home_link" class=""><a title="" class="activeItem" href="<?php  if ((is_front_page())) {echo '#home';} else {echo home_url();}?>">Home</a></li>
  <li id="inwestycja_link" class=""><a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#inwestycja';} else {echo home_url();}?>">O inwestycji</a></li>
  <li id="lokalizacja_link" class=""><a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#lokalizacja';} else {echo home_url();}?>">Lokalizacja</a></li>
  <li id="okolica_link" class=""><a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#przyroda';} else {echo home_url();}?>">Przyroda</a></li>
  <li id="okolica_link" class=""><a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#okolica';} else {echo home_url();}?>">Okolica</a></li>
  <li id="galeria_link" class=""><a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#galeria';} else {echo home_url();}?>">Galeria</a></li>
  <li id="domy_link" class=""><a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#domy';} else {echo home_url();}?>">Domy</a></li>
  <li id="domy_link" class=""><a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#wnetrza';} else {echo home_url();}?>">Wnętrza</a></li>
  <li id="technologia_link" class=""><a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#technologia';} else {echo home_url();}?>">Technologia</a></li>
  <li id="inwestor_link" class=""><a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#inwestor';} else {echo home_url();}?>">Inwestor</a></li>
  <li id="kontakt_link" class=""><a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#kontakt';} else {echo home_url();}?>">Kontakt</a></li>
  </ul>
  </div>
  <a class="fb_menu_link" href="<?php the_field('facebook_link')?>"><img src="<?php echo get_template_directory_uri() ?>/img/fb.svg" alt=""></a>


  </nav>
</div>
<div class="clearfix"></div>
</div>

</div>
