<?php /*Template Name: Home page*/?>

<?php get_header(); ?>

<?php get_template_part('special_modules/prgrm', 'main');?>

<div class="home_container">
  <div class="header_downolad_box">
    <div class="cta">
      <span>
        <?php echo __('[:pl]Pobierz&nbsp;katalog[:en]Download&nbsp;catalog'); ?></span>
      <span>
        <?php echo __('[:pl]Pobierz katalog[:en]Download catalog'); ?></span>
    </div>
    <a id="header_catalog" target="blank" href="<?php the_field('header_download_cat')?>">
      <img src="<?php the_field('catalog_icon')?>" alt="Mateczny Office Kraków - lokale biurowe dla biznesu">
    </a>
  </div>

  <section id="home" class="dark_bg center_content header_box">
    <div class="header_content">
      <?php the_field('header_content')?>
      <div id="header_button"></div>
    </div>
  </section>
</div>

<div id="anchor_subheader"></div>

<section id="section1" class="dark_bg sec_std menu_anchor">
  <div class="localization_float_image lazy_loader" <?php prgrm_srcSet('section1_bg');?>></div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 ">
        <h2 class="special_header"><span>01</span>
          <?php the_field('section1_title')?>
        </h2>
        <?php the_field('section1_content')?>
      </div>
      <div class="col-md-6"></div>
    </div>
  </div>
</section>


<section id="section2" class="sec_std dark_bg lazy_loader">
        <div id="section2_anchor" class="menu_anchor" ></div>

  <img class="foto1 lazy_loader" <?php prgrm_srcSet('section2_bg', 'section2_bg_mobile' ) ?> alt="Mateczny Office Kraków - lokale biurowe dla biznesu" src="<?php echo get_template_directory_uri() ?>/img/loader.svg">

  <div class="container float_container">
    <div class="row">
      <div class=" col-lg-8 col-xl-6">
        <h2 class="special_header"><span>02</span>
          <?php the_field('section2_title')?>
        </h2>
        <?php the_field('section2_content')?>

      </div>

    </div>
  </div>

  <img class="foto2 lazy_loader" <?php prgrm_srcSet('section3_bg', 'section3_bg_mobile' ) ?> alt="Mateczny Office Kraków - lokale biurowe dla biznesu" src="<?php echo get_template_directory_uri() ?>/img/loader.svg">


</section>


<section id="section3" class="dark_bg center_content sec_std dark_bg pb0 menu_anchor" >
  <div class="menu_anchor" id="section3_anchor"></div>
  <div class="container float_container ">
    <div class="row">
      <div class="col-md-12 col-lg-10 offset-lg-1">
        <h2 class="special_header"><span class="d-block">03</span>
          <?php the_field('section3_title')?>
        </h2>
        <?php the_field('section3_content')?>
      </div>
    </div>
  </div>

  <img class="foto2 lazy_loader" <?php prgrm_srcSet('section_map_img', 'section_map_img_mobile' ) ?>
  alt="Mateczny Office Kraków - lokale biurowe dla biznesu"
  src="
  <?php echo get_template_directory_uri() ?>/img/loader.svg">
</section>




<section id="section4" class="sec_std dark_bg menu_anchor">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-xl-6">
        <h2 class="special_header"><span>04</span>
          <?php the_field('section4_title')?>
        </h2>
        <?php the_field('section4_content')?>
      </div>
    </div>
  </div>

  <div class="slider_section4">
    <?php if (have_rows('gallery_loop')): ?>
    <?php while (have_rows('gallery_loop')) : the_row(); ?>
    <div class="slider_item lazy_loader_gallery" <?php prgrm_srcSetgallery('gallery_item_large'); ?>
      style="background-image: url('<?php echo get_template_directory_uri() ?>/img/loader.svg')">
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>

</section>




<section id="section5" class="pb0 pt0 menu_anchor">

<!-- <img src="<?php echo get_template_directory_uri() ?>/img/05.jpg" alt=""> -->
  <!-- build_app start -->
  <?php
  include('buildApp/build_app_index.php');
  ?>
  <!-- build_app end -->
</section>



<section id="section6" class="dark_bg sec_std pb0 menu_anchor">
  <div class="container ">
    <div class="row">
      <div class="col-md-12">
        <h2 class="special_header"><span>06</span>
          <?php echo __('[:pl]Standard[:en]Standard'); ?>
        </h2>
      </div>
    </div>
    <div class="row mt30 mb30">
      <?php if (have_rows('tech_loop')): ?>
      <?php while (have_rows('tech_loop')) : the_row(); ?>
      <div class="col-lg-6  mb40 mb40 tech_loop_item">
        <h6>
          <?php the_sub_field('tech_item_title')?>
        </h6>
        <p>
          <?php the_sub_field('tech_item_content')?>
        </p>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="row">
      <div class="col-md-12">
        <a  id="standard_catalog"  class="btn" target="blank" href="<?php the_field('standard_file')?>">
          <span>
            <?php echo __('[:pl]Pobierz standard wykończenia[:en]Download the finishing standard'); ?></span>
        </a>
      </div>
    </div>
  </div>
  </div>



  <?php get_template_part('content', 'caroGallery') ?>


</section>


<section id="section7" class="menu_anchor sec_std lazy_loader" <?php prgrm_srcSet('section7_bg', 'section7_bg_mobile' ) ?>>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="special_header"><span>07</span>
          <?php the_field('section7_title')?>
        </h2>

      </div>
    </div>
    <div class="row inverse_mobile">

      <div class="col-lg-7">
        <?php the_field('section7_content')?>
        <a target="blank" href="http://www.grimbud.pl"><div class="logo2_box"></div></a>
      </div>

      <div class="col-lg-5 ">
        <a target="blank" href="http://www.merari.pl"><div class="logo_box"></div></a>
      </div>
    </div>
  </div>
</section>



<section id="section8" class="dark_bg sec_std lazy_loader menu_anchor" <?php prgrm_srcSet('contact_bg', 'contact_bg_mobile' ) ?>>

  <div  class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="special_header"><span>08</span>
          <?php the_field('section8_title')?>
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4 col-lg-3">
        <?php the_field('contact1_content')?>

      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <?php the_field('contact2_content')?>

      </div>

    </div>
  </div>

  <div class="container mt30">
    <div class="row">
      <div class="col-lg-6">
        <div id="kontakt-form2">
          <?php echo do_shortcode('[contact-form-7 id="81" title="Formularz 1"]') ?>
        </div>
      </div>
      <div class="col-lg-6">
        <div id="map"></div>
        <div class="law_info">
          <?php echo __('[:pl]Przedstawione na stronie materiały mają charakter wyłącznie informacyjny i nie stanowią oferty w rozumieniu Kodeksu Cywilnego.[:en]The materials presented on the website are for information purposes only and do not constitute an offer within the meaning of the Civil Code.'); ?>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
