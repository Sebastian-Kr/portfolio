<div id="homepage"></div>
<div id="main-menu2">
<div id="navigation-container" class="start_menu">
<!-- =============MAIN MENU ============== -->


<div class="body-menu">
<nav class=" navbar navbar-expand-lg navbar-light ">


  <a class="navbar_brand" href="<?php echo home_url() ?>">
      <img src="<?php echo get_template_directory_uri() ?>/img/bw-logo-min-2.png" alt="">
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



     <li  data-target="plan" class="scroll-button">
       <a  class="c-border-big" data-activeSection="plan" href="<?php echo get_home_url();?>/#plan">PLAN OBIEKTU I WYSTAWCY</a>
     </li>

    <li  data-target="harmonogram" class="scroll-button">
      <a  data-activeSection="harmonogram" href="<?php echo get_home_url();?>/#harmonogram">HARMONOGRAM</a>
    </li>


         <li  data-target="atrakcje" class="scroll-button">
           <a  data-activeSection="atrakcje" href="<?php echo get_home_url();?>/#atrakcje">ATRAKCJE</a>
         </li>

     <li  data-target="gadzety" class="scroll-button">
       <a  data-activeSection="gadzety" href="<?php echo get_home_url();?>/#gadzety">GADŻETY</a>
     </li>



     <li><a class="btn-special" target="blank" href="<?php the_field('buy_ticket_link2')?>">KUP BILET</a></li>

     <li  data-target="kontakt" class="scroll-button">
       <a  data-activeSection="kontakt" href="<?php echo get_home_url();?>/#kontakt">KONTAKT</a>
     </li>
     </ul>
  </div>

  <a class="facebook_box" href="<?php the_field('facebook_link')?>">
    <div class="facebook_icon" ></div>
  </a>

  </nav>




</div>
<div class="clearfix"></div>
</div>

</div>
