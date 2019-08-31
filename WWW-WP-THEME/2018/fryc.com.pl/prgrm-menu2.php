<div id="homepage"></div>
<div id="main-menu2">
<div id="navigation-container">
<!-- =============MAIN MENU ============== -->


<div class="body-menu ">

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
  <li><a  class="<?php if (is_page(5)) echo 'activeItem';?>" href="<?php echo home_url();?>">Home</a></li>
  <li><a class="dynamicItem <?php if (is_page(95)) echo 'activeItem';?>" href="<?php echo get_permalink(95) ?>">O nas</a></li>
  <li><a class="dynamicItem <?php if (is_page(98)) echo 'activeItem';?>" href="<?php echo get_permalink(98) ?>">Park maszynowy</a></li>
  <li><a class="dynamicItem <?php if (is_page(101)) echo 'activeItem';?>" href="<?php echo get_permalink(101) ?>">Realizacje</a></li>
  <li><a class="dynamicItem <?php if (is_page(104)) echo 'activeItem';?>" href="<?php echo get_permalink(104) ?>">Kontakt</a></li>
  </ul>

  </div>
  <a class="fb_menu_link" href="<?php the_field('facebook_link')?>"><img src="<?php echo get_template_directory_uri() ?>/img/fb.svg" alt=""></a>

  </nav>
</div>
<div class="clearfix"></div>
</div>

</div>
