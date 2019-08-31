<header class="main-menu-desktop">

<div class="container"><div class="row">
  <a href="<?php echo home_url(); ?>" class="menu-logo">
    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="">
  </a>

    <nav>
      <ul>
        <a data-activeSection="oferta-sec" href="<?php echo get_home_url(); ?>/#oferta"><li>Oferta</li></a>
        <a data-activeSection="inwestycje-sec" href="<?php echo get_home_url(); ?>/#inwestycje"><li>Zrealizowane inwestycje</li></a>
        <a data-activeSection="o-nas-sec" href="<?php echo get_home_url(); ?>/#o-nas"><li>O nas</li></a>
        <a data-activeSection="kontakt-sec" href="<?php echo get_home_url(); ?>/#kontakt"><li>Kontakt</li></a>
      </ul>
    </nav>

    <div class="add_info_box">
      <a class="icon icon_phone"  href="tel:+48504430038"><span>+48</span> 504 430 038</a>
      <a class="icon icon_phone"  href="tel:+48605403070"><span>+48</span> 605 403 070</a>
    </div>
</div></div>

</header>



<!-- ////////////////////////////////////////////// -->

<header class="main-menu-mobile">

<div class="menu-bar">
  <div class="menu-logo">
    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="">
  </div>

  <div class="menu-button">
    <p>MENU</p>
    <div id="nav-icon2">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    </div>
  </div>

</div>


<!-- ////////////////////////////////////////////// -->
<div class="menu-blackdrop"></div>
<div class="menu-dropdown-box ">


  <nav>
    <div class="add-info-item-title">Menu</div>
    <ul>

      <a href="<?php echo get_home_url(); ?>/#oferta"><li>Nasza oferta</li></a>
      <a href="<?php echo get_home_url(); ?>/#inwestycje"><li>Zrealizowane inwestycje</li></a>
      <a href="<?php echo get_home_url(); ?>/#o-nas"><li>O nas</li></a>
      <a href="<?php echo get_home_url(); ?>/#kontakt"><li>Kontakt</li></a>

    </ul>
  </nav>

  <div class="add-info-box">

      <div class="add-info-item-box add-info-hide-first">
        <div class="add-info-item-title">Kontakt</div>
        <a class="add-info-item icon icon_phone"  href="tel:+48504430038">+48 504 430 038</a>
        <a class="add-info-item icon icon_phone"  href="tel:+48605403070">+48 605 403 070</a>
        <a class="add-info-item icon icon_envelop" href="mailto:kontakt@novacorps.pl">kontakt@novacorps.pl</a>
      </div>

      <div class="add-info-item-box">
       <div class="add-info-item-title">Social media</div>
       <a class="add-info-item icon icon_facebook" href="<?php the_field('facebook_link')?>" target="blank">/novacorps</a>
      </div>
<!--
      <div class="lang-box">
      <img src="<?php echo get_template_directory_uri(); ?>/img/lang.svg" alt="">
      <span class="avtive-lang">PL</span>
      <img src="<?php echo get_template_directory_uri(); ?>/img/spacer.png" alt="">
      <a href="http://brokreacja.com">ENG</a>
      </div> -->

  </div>


</div>
</header>
