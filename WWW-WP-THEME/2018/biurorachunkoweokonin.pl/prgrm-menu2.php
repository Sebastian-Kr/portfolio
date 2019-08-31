<div id="homepage"></div>
<div id="main-menu2">
<div id="navigation-container">
<!-- =============MAIN MENU ============== -->

<div class="container pretopmenu">

    <a class="navbar-brand" href="<?php echo home_url() ?>">
      <img src="<?php echo get_template_directory_uri() ?>/img/logo100.png" alt="">
      <p>Biuro rachunkowe Sroka</p>
    </a>
 <div class="top-contact">

<?php the_field('menu-col3', 18) ?>
<span  id="hov" class="snip1489"></span>
       <!-- <ion-icon name="add-circle"></ion-icon> -->
 </div>

<div class="top-contact short">

<?php the_field('menu-col2', 18) ?>
<span  id="home" class="snip1489"></span>
</div>
<div class="top-contact ">
<?php the_field('menu-col1', 18) ?>
<span  id="page" class="snip1489"></span>
</div>

  </div>
<div class="clearfix"></div>
<div class="body-menu">

<nav class=" container navbar navbar-expand-lg navbar-light bg-light">


  <a class="navbar-brand navbar-brand2" href="<?php echo home_url() ?>">
      <img src="<?php echo get_template_directory_uri() ?>/img/logo100.png" alt="">
          <p>Biuro rachunkowe Sroka</p>
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

  <!-- <li id="homepage" class=""><a title="" class="activeItem" href="<?php  if ((is_front_page())) {echo '#homepage';} else {echo home_url();}?>">HOME</a></li> -->
  <!-- <li id="kotwica" class=""><a title="" class="dynamicItem" href="<?php  if ((is_front_page())) {echo '#kotwica-target';} else {echo home_url();}?>">KOTWICA</a></li> -->
  <!-- <li><a href="<?php echo get_permalink('611') ?>">Aktualności</a></li> -->
  <!-- <li><a href="<?php echo get_permalink('621') ?>">Galerie</a></li> -->
  <!-- <li><a href="<?php echo get_permalink('682') ?>">Mody</a></li> -->

  <!-- Home biuro--> <li class="<?php if (get_the_ID()==887) echo 'activeItem' ?>" ><a href="<?php echo get_permalink('887') ?>"><?php echo get_the_title('887') ?></a></li>
  <!--O firmie --> <li class="<?php if (get_the_ID()==792) echo 'activeItem' ?>" ><a href="<?php echo get_permalink('792') ?>"><?php echo get_the_title('792') ?></a></li>
  <!-- Oferta--> <li class="<?php if (get_the_ID()==799) echo 'activeItem' ?>" ><a href="<?php echo get_permalink('799') ?>"><?php echo get_the_title('799') ?></a></li>
  <!-- Pytania--> <li class="<?php if (get_the_ID()==788) echo 'activeItem' ?>" ><a href="<?php echo get_permalink('788') ?>"><?php echo get_the_title('788') ?></a></li>
  <!--Dokementy --> <li class="<?php if (get_the_ID()==813) echo 'activeItem' ?>" ><a href="<?php echo get_permalink('813') ?>"><?php echo get_the_title('813') ?></a></li>
  <!--Kontakt --> <li class="<?php if (get_the_ID()==18) echo 'activeItem' ?>" ><a href="<?php echo get_permalink('18') ?>"><?php echo get_the_title('18') ?></a></li>

  </ul>
  </div>


  </nav>
</div>
<div class="clearfix"></div>
</div>

</div>
