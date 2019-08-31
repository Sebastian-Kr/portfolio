<?php /*Template Name: Tester*/?>


<?php get_header(); ?>
<?php get_template_part('special_modules/prgrm', 'header');?>
<?php get_template_part('special_modules/prgrm', 'main');?>
<div class="container">
<div class="row mt50"><h2>KLOCKI </h2></div>
  <div class="row">


<div class="col-md-6">
<h6>.btn_pink</h6>
<button class="btn_pink">Zobacz więcej</button>
<h6>.btn_pink_arrow</h6>
<button class="btn_pink_arrow">Zobacz więcej</button>
<h6>.btn_pink_arrow2</h6>
<button class="btn_pink_arrow2">Zobacz więcej</button>
<h6>.btn_orange</h6>
<button class="btn_orange">Zobacz więcej</button>
<h6>.btn_orange_big</h6>
<button class="btn_orange_big">KUP BILET</button>

</div><div class="col-md-6">

<h6>.arrow_left</h6>
<button class="arrow_left"></button>

<h6>.arrow_right</h6>
<button class="arrow_right"></button>

<h6>.arrows</h6>
<div class="arrows">
  <a href="#"><button class="arrow_left"></button></a>
  <a href="#"><button class="arrow_right"></button></a>
</div>

<h6>.return</h6>

<a href="<?php echo home_url() ?>/media-o-nas/">
<div class="return">
    <button class="arrow_left"></button>
    <h6>POWRÓT</h6>
</div>
</a>



<h6>.play_icon</h6>
<button class="play_icon"></button>

<h6>.play_icon_big</h6>
<button class="play_icon_big"></button>

</div>
</div></div>

<div class="container-fluid"><div class="row">
<div class="col-md-12 mt50"><h2>.tiles_pink_border</h2></div>

<div class="col-md-4">
<a href="#"><div class="glass_down tiles tiles_pink_border">
  <div class="bg_container">
    <div class="bg_box" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/kafel_06.jpg')"></div>
  </div>
  <h6>Wpis z 20.03.2018</h6>
  <h5>Tytuł artykułu lorem</h5>
</div></a></div>

<div class="col-md-4">
<a href="#"><div class="glass_down tiles tiles_pink_border">
  <div class="bg_container">
    <div class="bg_box" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/kafel_06.jpg')"></div>
  </div>
  <div class="film_box"></div>
  <h6>Wpis z 20.03.2018</h6>
  <h5>Tytuł artykułu lorem</h5>
</div></a></div>

</div></div><!-- end container -->


<div class="container-fluid"><div class="row">
<div class="col-md-12 mt50"><h2>.tiles_orange_border</h2></div>

<div class="col-md-6">
<a href="#"><div class="glass_down tiles tiles_orange_border">
  <div class="bg_container">
    <div class="bg_box" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/kafel_06.jpg')"></div>
  </div>
  <h3>Tytuł artykułu lorem</h3>
  <h5>Wpis z 20.03.2018</h5>
</div></a></div>

<div class="col-md-6">
<a href="#"><div class="glass_down tiles tiles_orange_border">
  <div class="bg_container">
    <div class="bg_box" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/kafel_06.jpg')"></div>
  </div>
  <h3>Tytuł artykułu lorem</h3>
  <h5>Wpis z 20.03.2018</h5>
</div></a></div>

</div></div><!-- end container -->



<div class="container"><div class="row">
<div class="col-md-12 mt50"><h2>.tiles_catalog</h2></div>

<div class="col-lg-6 col-xl-4">

  <div class="glass_up tiles_catalog">
  <div class="bg_container">
    <div class="bg_box" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/kafel_06.jpg')"></div>
  </div>
  <h6>Wpis z 20.03.2018</h6>
  <h5>Tytuł artykułu lorem</h5>
</div>

<div class="watch_movie">
<button class="btn_pink">Pobierz katalog</button>
  <div class="play_box">
    <span>Obejrzyj film</span>
    <div class="play_icon"></div>
  </div>
</div>
</div>



</div></div><!-- end container -->



<div class="container">
  <div class="row mt50">
    <div class="col-md-12">
      <h2>GENERATOR</h2>
    </div>
  </div>
</div>
<?php get_template_part( 'special_section_gen/content', 'generator' );?>
<?php get_footer(); ?>
