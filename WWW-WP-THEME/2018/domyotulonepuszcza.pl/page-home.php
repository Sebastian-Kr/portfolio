<?php /*Template Name: Home page*/?>

<?php get_header(); ?>

<?php get_template_part( 'special_modules/prgrm', 'main' );?>


<a href="#kontakt">
  <div id="contact_widget" class="button_std">
    <img src="<?php echo get_template_directory_uri() ?>/img/phone-1.svg" alt="">
    <span>Skontaktuj się!</span>

  </div>
</a>

<section id="home" class=" dark_bg center_content header_box">
<div class=" animation-target header_content">
  <?php the_field('header_content')?>
  <h1>Domy otulone puszczą</h1>
  <h3 class=" mt20 mb10 font-weight-normal">Rodzinna oaza blisko centrum Niepołomic. Miejska wygoda i leśny spokój jednocześnie. </h3>
  <div id="header_button" class="button_std btn btn_header">
    <span>Dowiedz się więcej</span></div>
</div>
</section>
<div id="anchor_inw"></div>
<section id="inwestycja" class="animate dark_bg sec_std" style="background-image: url('<?php the_field('section1_bg')?>')">
  <div class="container"><div class="row">
<div class=" col-lg-6 col-md-8">
  <div class=" h2_box">
    <img src="<?php echo get_template_directory_uri() ?>/img/icon-1.svg" alt="">
  <h2><?php the_field('section1_title')?></h2>
</div>
  <?php the_field('section1_content')?>
</div>
<div class="col-md-6"></div>
  </div></div>
</section>


<section id="lokalizacja" class=" center_content sec_std" style="background-image: url('<?php the_field('section2_bg')?>')">
  <div class="container"><div class="row">
<div class="animate col-lg-6 offset-lg-3 col-md-8 offset-md-2">
  <div class="h2_box flex_center">
    <img src="<?php echo get_template_directory_uri() ?>/img/icon-2.svg" alt="">
  <h2><?php the_field('section2_title')?></h2>
</div>
  <?php the_field('section2_content')?>

</div>

  </div></div>
  <!-- <div class="mobile_map" style="background-image: url('<?php the_field('section2_bg')?>')"></div> -->
</section>



<section  id="przyroda" class="pt0 pb0 dark_bg right_content sec_std parallax-window " data-natural-width="100" data-speed="0.2" data-parallax="scroll" data-image-src="<?php the_field('section3_bg')?>">
    <div class="container pt70 pb70 "><div class="row">
    <div class="animate col-md-8 offset-md-4 col-lg-6 offset-lg-6">
      <div class="h2_box">
        <h2><?php the_field('section3_title')?></h2>
        <img src="<?php echo get_template_directory_uri() ?>/img/icon-3.svg" alt="">
      </div>
    <?php the_field('section3_content')?>
    </div>
    </div></div>
</section>





<section id="okolica" class="sec_std">
  <div id="okolica_bg_box"></div>
  <div class="container"><div class="row">
<div class=" col-md-4">
  <div class="h2_box">
    <img src="<?php echo get_template_directory_uri() ?>/img/icon-4.svg" alt="">
  <h2><?php the_field('section4_title')?></h2>
</div>
  <?php the_field('section4_content')?>
</div>
<div class="col-md-1 "></div>
<div class="col-sm-6 col-md-3">
  <div class="legend_box ">
  <div><img src="<?php echo get_template_directory_uri() ?>/img/i1.svg" alt=""><p>Szkoła</p></div>
  <div><img src="<?php echo get_template_directory_uri() ?>/img/i2.svg" alt=""><p>Przedszkole</p></div>
  <div><img src="<?php echo get_template_directory_uri() ?>/img/i3.svg" alt=""><p>Przystanek</p></div>
  <div><img src="<?php echo get_template_directory_uri() ?>/img/i4.svg" alt=""><p>Stacja paliw</p></div>
  <div><img src="<?php echo get_template_directory_uri() ?>/img/i5.svg" alt=""><p>Apteka</p></div>
  </div>
</div>

<div class="col-sm-6 col-md-3">
  <div class="legend_box">
  <div><img src="<?php echo get_template_directory_uri() ?>/img/i6.svg" alt=""><p>Kościół</p></div>
  <div><img src="<?php echo get_template_directory_uri() ?>/img/i7.svg" alt=""><p>Sklep</p></div>
  <div><img src="<?php echo get_template_directory_uri() ?>/img/i8.svg" alt=""><p>Restauracja</p></div>
  <div><img src="<?php echo get_template_directory_uri() ?>/img/i8.svg" alt=""><p>Fryzjer</p></div>
  </div>
</div>
  </div></div>
    <div class="mobile_map"></div>
</section>


<!-- PROGREMO LIGHTBOX BEGIN GALERIA-->
<?php get_template_part('content', 'std_gallery') ?>
<!-- PROGREMO LIGHTBOX END GALERIA-->


<section id="domy" class="sec_std">
  <!-- DESKTOP VERSION -->
  <div class="container">

<div class="row animate"><div class=" col-md-6 col-lg-5">
  <div class="h2_box">
    <img src="<?php echo get_template_directory_uri() ?>/img/icon-6.svg" alt="">
  <h2><?php the_field('pricetable_title')?></h2>
</div>
  <p><?php the_field('pricetable_desc')?></p>
</div>

<div class=" col-md-6 offset-lg-1 ">
  <img class="mt0" src="<?php the_field('pricetable_img')?>" alt="">

</div>
</div>

<div class="row"><div class="col-md-12">
<div class="animate pricetable d-none d-sm-block">
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
  <div class="td_relative_box">
    <?php if (get_sub_field('pricetable_status') == 'wolny'): ?>
      <a href="<?php the_sub_field('pricetable_pdf') ?>" target="blank"><div class="td_box  button_std"><span>Pobierz</span></div></a>
    <?php else: ?>
      <div class="td_box  button_std"><span>Pobierz</span></div>
    <?php endif; ?>
  </div>
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

  <?php if (get_sub_field('pricetable_status') == 'wolny'): ?>
    <a href="<?php the_sub_field('pricetable_pdf') ?>" target="blank">
      <div class="td_box">Pobierz</div></a>
  <?php else: ?>
  <div class="td_box ">Pobierz</div>
<?php endif; ?>
</div>
    <?php endwhile; ?>
<?php endif; ?>
</div>


</div>
  </div></div>


</section>



<section  id="finansowanie" class="dark_bg center_content pb80 sec_std" style="background-image: url('<?php the_field('section6_bg')?>')">
  <div class="container"><div class="row">
<div class="animate col-md-12 col-lg-10 offset-lg-1">
  <div class="h2_box">
    <img src="<?php echo get_template_directory_uri() ?>/img/icon-7.svg" alt="">
  <h2><?php the_field('section6_title')?></h2>
</div>
  <?php the_field('section6_content')?>
</div>
  </div></div>
</section>

<!-- PROGREMO LIGHTBOX BEGIN -->
<div id="galeria2">
  <?php get_template_part('content', 'std_gallery2') ?>
</div>
<!-- PROGREMO LIGHTBOX END -->



<section id="technologia" class=" sec_std" style="background-image: url('<?php the_field('tech_bg')?>')">
  <div class="container"><div class="row">
<div class="animate col-md-12">
  <div class="h2_box">
    <img src="<?php echo get_template_directory_uri() ?>/img/icon-9.svg" alt="">
  <h2>Technologia</h2>
</div>
</div></div>
<div class="row animate">
  <?php if ( have_rows('tech_loop') ): ?>
      <?php while ( have_rows('tech_loop') ) : the_row(); ?>
<div class=" col-md-5 offset-sm-2 offset-md-1 pt40">
  <h6><?php the_sub_field('tech_item_title')?></h6>
  <p><?php the_sub_field('tech_item_content')?></p>
</div>
      <?php endwhile; ?>
  <?php endif; ?>
</div>
  </div></div>
</section>



<section id="inwestor" class=" dark_bg sec_std" style="background-image: url('<?php the_field('section7_bg')?>')">
  <div class="container animate">
    <div class="row"><div class=" col-md-12">
      <div class="h2_box mb50">
        <img src="<?php echo get_template_directory_uri() ?>/img/icon-10.svg" alt="">
      <h2><?php the_field('section7_title')?></h2>
    </div>
    </div></div>
    <div class="row">
<div class="col-md-6 ">

  <?php the_field('section7_content')?>
</div>

<div class="col-md-6 flex_center">
  <img class="logo" src="<?php the_field('section7_img')?>" alt="">
</div>
  </div>
</div>


  <div class="container animate">
    <div class="row">
      <?php if ( have_rows('portfolio_loop') ): ?>
          <?php while ( have_rows('portfolio_loop') ) : the_row(); ?>
            <div class="col-md-6 pt50 ">
              <a href="<?php the_sub_field('portfolio_item_url') ?>">
              <img src="<?php the_sub_field('portfolio_item_img'); ?>" alt="">
              <h5><?php the_sub_field('portfolio_item_title'); ?></h5>
              </a>
              <p><?php the_sub_field('portfolio_item_content'); ?></p>
            </div>
          <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>


<section id="kontakt" class="sec_std " style="background-image: url('<?php the_field('contact_bg')?>')">
  <div class="container animate"><div class="row"><div class=" col-md-12">
    <div class="h2_box mb50">
      <img src="<?php echo get_template_directory_uri() ?>/img/icon-1.svg" alt="">
      <h2>Kontakt</h2>
    </div>

  </div></div>
  <div class="row ">
<div class="col-md-3">
<?php the_field('contact1_content')?>



</div>
<div class="col-md-3">
<?php the_field('contact2_content')?>


</div>

  </div></div>

  <div class="container mt70 animate">
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
