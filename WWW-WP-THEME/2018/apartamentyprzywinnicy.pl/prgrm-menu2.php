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
  <li><a class="activeItem"  href="<?php  if ((is_front_page())) {echo '#home';} else {echo home_url();}?>">Home</a></li>
  <li><a class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#inwestycja';} else {echo home_url();}?>">Inwestycja</a></li>
  <li><a class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#lokalizacja';} else {echo home_url();}?>">Lokalizacja</a></li>
  <li><a class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#winnica';} else {echo home_url();}?>">Winnica</a></li>
  <li><a class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#busko_zdroj';} else {echo home_url();}?>">Busko Zdrój</a></li>
  <li><a class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#wynajem';} else {echo home_url();}?>">Wynajem</a></li>
  <li><a class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#mieszkania';} else {echo home_url();}?>">Mieszkania</a></li>
  <li><a class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#wnetrza';} else {echo home_url();}?>">Wnętrza</a></li>
  <li><a class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#standard';} else {echo home_url();}?>">Standard</a></li>
  <li><a class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#kontakt';} else {echo home_url();}?>">Kontakt</a></li>
  </ul>
  </div>


  </nav>
</div>
<div class="clearfix"></div>
</div>

</div>
