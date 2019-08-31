<?php /*Template Name: Home page*/?>

<?php get_header(); ?>
<section id="home" class="slider_id1 imgbox_slider imgbox_slider3 section_box dark_bg center_content header_box">


<div class="slides_box"></div>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div   class="header_content animation-target">
        <div class="arrow arrow-left"></div>
        <div class="arrow arrow-right"></div>
        <?php
        if ( have_posts() ) {
          while ( have_posts() ) {
            the_post();
        if (get_the_content()){
                  the_content();
        } // end is content statment
          } // end while
        } // end if
        ?>
      </div>
    </div>
  </div>
</div>
</section>





<section id="section1" class=" sec_std" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bg-sekcja1.jpg')">
  <div id="inwestycja" class="section_box container"><div class="animate row mb100 mmb20">
<div class="col-md-6 ">


  <div class="slider_id2 imgbox_slider">
    <div class="arrow arrow-left"></div>
    <div class="arrow arrow-right"></div>
  <div class="slides_box"></div>
  </div>





</div>
<div class="col-md-1 d-none d-lg-block"></div>
<div class="col-md-5 ">

  <?php the_field('opis_inwestycji')?>
</div>
</div></div>

<div id="lokalizacja" class="section_box container"><div class="row animate">
<div class="col-md-6 ">
<?php the_field('lokalizacja')?>
</div>
<div class="col-md-1 d-none d-lg-block"></div>
<div class="col-md-6 col-lg-5"><img class="mmt20" src="<?php echo get_template_directory_uri() ?>/img/mapa.png" alt=""></div>
</div></div>

</section>



<section id="winnica" class="hight_section section_box winnica pt0 pb0 dark_bg  sec_std">
  <div class="winnica_bg"></div>
    <div class="container  "><div class="row">
   <div class="col-md-5"></div>
    <div class="col-md-7 animate">

    <?php the_field('winnica')?>


    </div>
    </div></div>
</section>


<section id="busko_zdroj" class=" mpb0 section_box sec_std o_busku-zdroju" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/mapa_01.jpg')">
<div class="container"><div class="row">
<div class="col-md-8 col-lg-4 ">
  <div class="bar_header">
  <div class="bg_box"></div>
  <h2 class="">O Busku Zdroju</h2>
  </div>
  <p class="animate"><?php the_field('o_busku-zdroju')?></p>
</div>

<div class="p0_mobile col-md-12 d-md-block d-lg-none">
  <img src="<?php echo get_template_directory_uri() ?>/img/mapa-mobile-1.jpg" alt="">
</div>
</div></div>
</section>

<section class=" sec_std o_busku_atrakcje mpb0 mpt0">
<div class="container">
      <?php if ( have_rows('o_busku-zdroju_atrakcje') ): ?>
          <?php while ( have_rows('o_busku-zdroju_atrakcje') ) : the_row(); ?>

        <div class="row animate">
            <div class="col-md-6" style="background-image: url('<?php the_sub_field('o_busku-zdroju_atrakcje-zdjecie')?>')"></div>
            <div class="col-md-6">
             <h3 class="underscore2"><?php the_sub_field('o_busku-zdroju_atrakcje-tytul')?></h3>
             <p><?php the_sub_field('o_busku-zdroju_atrakcje-opis')?></p>
          </div>
        </div>
          <?php endwhile; ?>
      <?php endif; ?>


</div>
</section>


<section  id="dla_kogo" class="hight_section section_box pt0 pb0 dark_bg center_content sec_std parallax-window " data-natural-width="100" data-speed="0.2" data-parallax="scroll" data-image-src="<?php the_field('parallaxa_section_bg')?>">
    <div class="container  "><div class="row animate">
    <div class="col-lg-10 offset-lg-1 ">
<?php the_field('parallaxa_section')?>
    </div>
    </div></div>
</section>


<section id="wynajem" class="section_box bsec_std wynajem">
  <div class="container"><div class="row">
<div class="col-lg-6 animate">
  <?php the_field('zysk_z_wynajmu_przez_caly_rok')?>
</div>
<div class="col-md-12 d-md-block d-lg-none">
  <img src="<?php echo get_template_directory_uri() ?>/img/mapa-mobile-2.jpg" alt="">
</div>
  </div></div>

<div class="kalkulator_box animate" >
  <div class="container">
    <div class="row">
      <div class="col-md-7">

        <div class="kalkulator_bg"></div>

<div class="kalkulator_content">
  <h2 class="underscore3">Ile tygodni w roku chcesz <br>korzystać z mieszkania?</h2>
  <div id="kalkulator-slider" class="dragdealer mt80">
    <div class="start">52</div>
    <div class="stop">0</div>
    <div id="kalkulator_slider_content" class="handle content">1</div>
  </div>
  <p class="font1 pt20">W każdym tygodniu, w którym nie korzystasz z mieszkania, możesz czerpać korzyści z jego najmu.</p>
  <h4>Spodziewany przychód z najmu: <span id="kalkulator_score">20 354zł</span></h4>

</div>

      </div>

      <div class="col-md-5  zabytki_w_okolicy_col">
  <?php the_field('zabytki_w_okolicy')?>
      </div>
    </div>
  </div>
</div>

</section>

<section class="sec_std pb20 pt20">
  <div id="architektura" class="animate section_box container"><div class="row mb100">
    <div class="col-lg-4 ">
    <?php the_field('architektura')?>
    </div>
    <div class="col-lg-1"></div>
<div class=" col-lg-7">
  <div class="slider_id3 imgbox_slider imgbox_slider2 ">
    <div class="arrow arrow-left"></div>
    <div class="arrow arrow-right"></div>
  <div class="slides_box slide_box_small"></div>
  </div>
</div>

</div></div>
</section>


<section id="mieszkania" class="section_box sec_std dark_bg custom_pricetable_section">
  <div class="container"><div class="row animate">
<div class="col-md-6">
  <?php the_field('pricetable_title')?>
  <?php the_field('pricetable_desc')?>
</div>
<div class="col-md-6">
  <img src="<?php echo get_template_directory_uri() ?>/img/rzut-domow.png" alt="">
</div>

  </div></div>

  <!-- STD PRICETABLE -->
  <?php get_template_part('content', 'pricetable') ?>
  <!-- STD PRICETABLE END -->

</section>

<section class="sec_std dark_bg section_box pt80" id="wnetrza">
  <div class="container">
    <div class="row animate">
      <div class="col-md-12">
        <h2 class="underscore3 mb50">Wnętrza</h2>
      </div>
    </div>
    <div class="row">

      <div class="col-md-6">

        <div class="slider_id4 imgbox_slider">
          <div class="arrow arrow-left"></div>
          <div class="arrow arrow-right"></div>
        <div class="slides_box"></div>
        </div>

      </div>
      <div class="col-md-6 col-lg-5">
    <?php the_field('wnetrza')?>

      </div>

    </div>
  </div>
</section>



<section id="standard_box" class="kontakt_section sec_std">
  <div   id="standard" class=" section_box container "><div class=" row">
<div class="col-md-12 animate">
  <h2 class="underscore">Standard mieszkań</h2>
</div></div>
<div class="row">
  <?php if ( have_rows('tech_loop') ): ?>
      <?php while ( have_rows('tech_loop') ) : the_row(); ?>
<div class="item col-md-6 mpt30 pt40 animate">
  <h6><?php the_sub_field('tech_item_title')?></h6>
  <p><?php the_sub_field('tech_item_content')?></p>
</div>
      <?php endwhile; ?>
  <?php endif; ?>
</div>
  </div>

  <div id="kontakt" class=" container section_box ">

  <div class="row">
<div  class="col-lg-5 animate">
<div id="kontakt_content" >
  <?php the_field('contact1_content')?>


</div>

</div>
<div class="col-lg-7 dark_bg">
  <div class="kontakt-form-bg"></div>
  <div id="kontakt-form" >
    <h2 class="underscore3">lub wypełnij formularz</h2>
  <?php echo do_shortcode('[contact-form-7 id="81" title="Formularz 1"]') ?>
</div>
</div>
  </div></div>
</section>

  <?php get_footer(); ?>
