<div id="navigation-container">
<!-- =============MAIN MENU ============== -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">


<a class="navbar-brand" href="<?php echo home_url() ?>">
    <img class="logo" src="<?php echo get_template_directory_uri() ?>/img/logo-menu.svg" alt="">
    <img class="sublogo" src="<?php echo get_template_directory_uri() ?>/img/we-deliver.svg" alt="">
  </a>


  <div id="nav-icon2">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  </div>

   <?php  dynamic_sidebar( 'menu_lewa' ); ?>
  <div class="collapse navbar-collapse" id="navbarNav">

<ul id="menu-menu-glowne" class="open-menu nav">

  <li class="<?php if (get_the_ID()==2) echo 'activeItem' ?>" ><a href="<?php echo get_permalink('2') ?>"><?php echo get_the_title('2') ?></a></li>
  <li class="<?php if (get_the_ID()==5) echo 'activeItem' ?>" ><a href="<?php echo get_permalink('5') ?>"><?php echo get_the_title('5') ?></a></li>
  <li class="<?php if (get_the_ID()==8) echo 'activeItem' ?>" ><a href="<?php echo get_permalink('8') ?>"><?php echo get_the_title('8') ?></a></li>
  <li class="<?php if (get_the_ID()==11) echo 'activeItem' ?>" ><a href="<?php echo get_permalink('11') ?>"><?php echo get_the_title('11') ?></a></li>
  <li class="<?php if (get_the_ID()==14) echo 'activeItem' ?>" ><a href="<?php echo get_permalink('14') ?>"><?php echo get_the_title('14') ?></a></li>
  <li class="<?php if (get_the_ID()==17) echo 'activeItem' ?>" ><a href="<?php echo get_permalink('17') ?>"><?php echo get_the_title('17') ?></a></li>
</ul>  </div>
<a class="iconbox" href="<?php the_field('linkedin_link', 17)?>"><img src="<?php echo get_template_directory_uri() ?>/img//linkedin-color.svg" alt=""></a>
   <?php  dynamic_sidebar( 'menu_prawa' ); ?>


</nav>
</div>
