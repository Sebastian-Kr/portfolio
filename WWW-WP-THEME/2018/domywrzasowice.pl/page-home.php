<?php /*Template Name: Home page*/?>

<?php get_header(); ?>

<?php get_template_part( 'special_modules/prgrm', 'main' );?>

<section id="home" class="dark_bg center_content header_box">
<div class="header_content">
  <?php the_field('header_content')?>
  <h1>Domy Wrząsowice</h1>
  <h3 class="mt20 mb10">Nowoczesne domy w zaciszu przyrody</h3>
  <div id="header_button" class="button_std btn btn_header">Dowiedz się więcej</div>
</div>
<div id="anchor_subheader" class="header_subtitle"><?php the_field('header_content2')?></div>
</section>

<section id="inwestycja" class="dark_bg sec_std" style="background-image: url('<?php the_field('section1_bg')?>')">
  <div class="container"><div class="row">
<div class="col-lg-6 col-md-8">
  <h2><?php the_field('section1_title')?></h2>
  <?php the_field('section1_content')?>
</div>
<div class="col-md-6"></div>
  </div></div>
</section>


<section id="lokalizacja" class="sec_std" style="background-image: url('<?php the_field('section2_bg')?>')">
  <div class="container"><div class="row">
<div class="col-md-4">
  <h2><?php the_field('section2_title')?></h2>
  <?php the_field('section2_content')?>
  <div class="legend_box" >
  <div><img src="<?php echo get_template_directory_uri() ?>/img/8.svg" alt=""><p>  Swoszowice</p></div>
  <div><img src="<?php echo get_template_directory_uri() ?>/img/10.svg" alt=""><p>  Autostrada</p></div>
  <div><img src="<?php echo get_template_directory_uri() ?>/img/20.svg" alt=""><p>  Borek Fałęcki</p></div>
  <div><img src="<?php echo get_template_directory_uri() ?>/img/20.svg" alt=""><p>  Ruczaj</p></div>
  <div><img src="<?php echo get_template_directory_uri() ?>/img/20.svg" alt=""><p>  Bonarka</p></div>
  <div><img src="<?php echo get_template_directory_uri() ?>/img/30.svg" alt=""><p>  Rynek Główny</p></div>
  </div>
</div>
<div class="col-md-8"></div>
  </div></div>
  <div class="mobile_map" style="background-image: url('<?php the_field('section2_bg')?>')"></div>
</section>



<section  class="pt0 pb0 dark_bg center_content sec_std parallax-window " data-natural-width="100" data-speed="0.2" data-parallax="scroll" data-image-src="<?php the_field('section3_bg')?>">
    <div class="container pt70 pb70 "><div class="row">
    <div class="col-md-12">
    <h2><?php the_field('section3_title')?></h2>
    <?php the_field('section3_content')?>
    </div>
    </div></div>
</section>

<!--
<section  class="pt0 pb0 dark_bg center_content sec_std" >
  <div class="parallax-window" data-parallax="scroll" data-image-src="<?php the_field('section3_bg')?>">
    <div class="container pt70 pb70"><div class="row">
    <div class="col-md-12">
    <h2><?php the_field('section3_title')?></h2>
    <?php the_field('section3_content')?>
    </div>
    </div></div>
  </div>
</section> -->



<section id="okolica" class="sec_std" style="background-image: url('<?php the_field('section4_bg')?>')">
  <div class="container"><div class="row">
<div class="col-md-4">
  <h2><?php the_field('section4_title')?></h2>
  <?php the_field('section4_content')?>
  <div class="legend_box">
    <div><img src="<?php echo get_template_directory_uri() ?>/img/icon1.svg" alt=""><p>  Sklep spożywczy</p></div>
  <div><img src="<?php echo get_template_directory_uri() ?>/img/icon2.svg" alt=""><p>Salon fryzjerski</p></div>
  <div><img src="<?php echo get_template_directory_uri() ?>/img/icon3.svg" alt=""><p>Restauracja</p></div>
  <div><img src="<?php echo get_template_directory_uri() ?>/img/icon4.svg" alt=""><p>Przystanek autobusowy</p></div>
  <div><img src="<?php echo get_template_directory_uri() ?>/img/icon5.svg" alt=""><p>Apteka</p></div>
  <div><img src="<?php echo get_template_directory_uri() ?>/img/icon6.svg" alt=""><p>Przedszkole</p></div>
  <div><img src="<?php echo get_template_directory_uri() ?>/img/icon7.svg" alt=""><p>Szkoła podstawowa</p></div>
  <div><img src="<?php echo get_template_directory_uri() ?>/img/icon8.svg" alt=""><p>Victoria Center Primary School</p></div>
  </div>
</div>
<div class="col-md-8"></div>
  </div></div>
    <div class="mobile_map" style="background-image: url('<?php the_field('section4_bg')?>')"></div>
</section>


<!-- PROGREMO LIGHTBOX BEGIN -->
<?php get_template_part('content', 'std_gallery') ?>
<!-- PROGREMO LIGHTBOX END -->


<section id="domy" class="sec_std">
  <!-- DESKTOP VERSION -->
  <div class="container"><div class="row">
<div class="col-md-12">
  <h2><?php the_field('pricetable_title')?></h2>
<img class="mt0" src="<?php the_field('pricetable_img')?>" alt="">

<div class="pricetable d-none d-sm-block">
  <div class="pricetable_header">
    <div class="ht_box">Numer domu</div>
    <div class="ht_box">Pow. działki</div>
    <div class="ht_box">Pow. mieszkania</div>
    <div class="ht_box">Cena</div>
    <div class="ht_box">Status</div>
    <div class="ht_box">Rzut domu</div>
  </div>
<?php if ( have_rows('pricetable_loop') ): ?>
    <?php while ( have_rows('pricetable_loop') ) : the_row(); ?>
<div class="pricetable_row <?php the_sub_field('pricetable_status') ?>">
  <div class="td_box"><?php the_sub_field('pricetable_nr') ?></div>
  <div class="td_box"><?php the_sub_field('pricetable_pow') ?></div>
  <div class="td_box"><?php the_sub_field('pricetable_pow2') ?></div>
  <div class="td_box">
    <?php if (get_sub_field('pricetable_status')=='wolny') {
      the_sub_field('pricetable_price');
    }
else echo '-';
    ?>
  </div>
<div class="td_box">  <?php the_sub_field('pricetable_status') ?></div>
  <div class="td_box"><a href="<?php the_sub_field('pricetable_pdf') ?>" target="blank">Pobierz</a></div>
</div>
    <?php endwhile; ?>
<?php endif; ?>
</div>

<!-- MOBILE VERSION -->
<div class="mobile_version pricetable d-block d-sm-none">
<?php if ( have_rows('pricetable_loop') ): ?>
    <?php while ( have_rows('pricetable_loop') ) : the_row(); ?>
<div class="pricetable_row <?php the_sub_field('pricetable_status') ?>">
  <div class="td_box">    <?php the_sub_field('pricetable_nr') ?></div>
  <div class="td_box"><div class="ht_box">Pow. działki</div><div class="td_box_content"><?php the_sub_field('pricetable_pow') ?></div></div>
  <div class="td_box"><div class="ht_box">Pow. mieszkania</div><div class="td_box_content"><?php the_sub_field('pricetable_pow2') ?></div></div>
  <div class="td_box">  <div class="ht_box">Cena</div><div class="td_box_content">
    <?php if (get_sub_field('pricetable_status')=='wolny') {
      the_sub_field('pricetable_price');
    }
else echo '-';
    ?>
  </div></div>
<div class="td_box">    <div class="ht_box">Status</div><div class="td_box_content"><?php the_sub_field('pricetable_status') ?></div></div>
  <div class="td_box"><a href="<?php the_sub_field('pricetable_pdf') ?>" target="blank">Pobierz</a></div>
</div>
    <?php endwhile; ?>
<?php endif; ?>
</div>


</div>
  </div></div>


</section>



<section  class="center_content sec_std" style="background-image: url('<?php the_field('section6_bg')?>')">
  <div class="container"><div class="row">
<div class="col-md-12">
  <h2><?php the_field('section6_title')?></h2>
  <?php the_field('section6_content')?>
</div>
  </div></div>
</section>



<section id="technologia" class="dark_bg sec_std" style="background-image: url('<?php the_field('section3_bg')?>')">
  <div class="container"><div class="row">
<div class="col-md-12">
  <h2>Technologia</h2>
</div></div>
<div class="row">
  <?php if ( have_rows('tech_loop') ): ?>
      <?php while ( have_rows('tech_loop') ) : the_row(); ?>
<div class="col-md-6 pt40">
  <h6><?php the_sub_field('tech_item_title')?></h6>
  <p><?php the_sub_field('tech_item_content')?></p>
</div>
      <?php endwhile; ?>
  <?php endif; ?>
</div>
  </div></div>
</section>



<section id="inwestor" class="sec_std" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bg5.jpg')">
  <div class="container intro"><div class="row">
<div class="col-md-7">
  <h2><?php the_field('section7_title')?></h2>
  <?php the_field('section7_content')?>
</div>

<div class="col-md-5 flex_center">
  <img src="<?php the_field('section7_bg')?>" alt="">
</div>
  </div></div>


  <div class="container">
    <div class="row">
      <?php if ( have_rows('portfolio_loop') ): ?>
          <?php while ( have_rows('portfolio_loop') ) : the_row(); ?>
            <div class="col-md-6 pt50 ">
              <img src="<?php the_sub_field('portfolio_item_img'); ?>" alt="">
              <h5><?php the_sub_field('portfolio_item_title'); ?></h5>
              <p><?php the_sub_field('portfolio_item_content'); ?></p>
            </div>
          <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>


<section id="kontakt" class="dark_bg sec_std" style="background-image: url('<?php the_field('contact_bg')?>')">
  <div class="container"><div class="row"><div class="col-md-12"><h2>Kontakt</h2></div></div>
  <div class="row">
<div class="col-md-3">
<?php the_field('contact1_content')?>



</div>
<div class="col-md-3">
<?php the_field('contact2_content')?>


</div>

  </div></div>

  <div class="container mt70">
    <div class="row">
      <div class="col-md-6">
        <div id="kontakt-form" >
        <?php echo do_shortcode('[contact-form-7 id="81" title="Formularz 1"]') ?>
</div>
      </div>
      <div class="col-md-6"><div id="map"></div></div>
    </div>
  </div>
</section>

  <?php get_footer(); ?>
