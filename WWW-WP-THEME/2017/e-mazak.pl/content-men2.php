
<!-- =============MAIN MENU ============== -->
<div id="home"></div>
<div id="wrapper" class="active">

  <!-- FULL BAR TOP -->
   <div class="container pretopmenu">

  <a href="<?php echo home_url(); ?>"><div id="logo-top" class="logo logo2"></div></a>

  <div class="top-contact">


<?php the_field('menu_box1', 18) ?>
       <!-- <p><span>Poniedziałek - Piątek 8:00 - 16:00</span>
       <span>Sobota 8:00 - 13:00</span></p> -->
<span  id="hov" class="snip1489"></span>
        <!-- <ion-icon name="add-circle"></ion-icon> -->
  </div>

 <div class="top-contact short">

<?php the_field('menu_box2', 18) ?>
      <!-- <p><span>ul. Rynek 14</span>
      <span>39-120 Sędziszów Młp.</span></p> -->
<span  id="home" class="snip1489"></span>
 </div>
 <div class="top-contact ">
   <?php the_field('menu_box3', 18) ?>
   <!-- <p><span><a href="tel:+4822222222">17 222 22 22</a></span> -->
   <!-- <span><a href="tel:+48777777777">(+48) 777 777 777</a></span></p> -->
<span  id="page" class="snip1489"></span>
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
