
<!-- =============MAIN MENU ============== -->
<div id="home"></div>
<div id="wrapper" class="active">

  <!-- FULL BAR TOP -->
   <div class="container pretopmenu">

  <a href="<?php echo home_url(); ?>"><div id="logo-top" class="logo logo2"></div></a>

  <div class="top-contact">

       <p><span>Poniedziałek - Piątek 7:00 - 17:00</span>
       <span>Sobota 7:00 - 13:00</span></p>
        <p><span class="glyphicon glyphicon glyphicon-time" aria-hidden="true"></span></p>
  </div>

 <div class="top-contact short">

      <p><span>ul. Parkowa 1/4 Ropczyce</span>
      <span>Sielec 10a Sędziszów Młp.</span></p>
        <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></p>
 </div>

 <div class="top-contact">

   <p><span><a href="tel:+48172218923">17 221 89 23</a></span>
   <span><a href="tel:+48602185069">(+48) 602 185 069</a></span></p>
    <p><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></p>

 </div>

   </div>

  <!-- END FULL BAR TOP -->


<div id="sidebar-wrapper" class="dark-menu">
    <div class="container">
     <div class="row ">
        <nav id="menu-menu-glowne2" class="nav">

          <a class="header-logo" href="<?php echo home_url(); ?>">
              <div class="logo logo2"></div>

          </a>
             <?php wp_nav_menu(array(

               'theme_location'=>'header-menu',
               'menu_id' => false,
               'menu_class' => 'sidebar-nav',
               'container_id' => 'prgrm_main_nav',
               'container_class' => false,

             )); ?>


        </nav>
    </div>
</div>
</div>


<div class="content-header">
    <div id="hsome">
    <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
        <!-- <i class="fa fa-bars"></i> -->
    </a>
  </div>
    <a class="header-logo" href="<?php echo home_url(); ?>">
        <div class="logo"></div>

    </a>
</div>
</div>
