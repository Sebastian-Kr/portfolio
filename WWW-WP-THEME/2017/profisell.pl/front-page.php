<?php get_header(); ?>


  <?php // ========================================================================
    //  SECTION - header
    // =========================================================================  ?>
<section id="main-header" class="section s1" style="background-image: url('<?php echo home_url() ?>/wp-content/themes/prgrm-theme/img/bg-front.jpg')">


  <div id="home-page" class="container" >
    <div class="row align-items-center">
      <div class=" col-lg-5 col-xl-7">
        <h1 class="dum"><?php echo the_field('progremo_title') ?></h1>
        <h5 class="dum"><?php echo the_field('progremo_subtitle') ?></h5>
<a href="<?php echo home_url() ?>/#kontakt"><button type="button" class="btn btn-secondary"><span>Kontakt z doradcą</span></button></a>
<a href="<?php echo home_url() ?>/#jakdzialamy"><button type="button" class="btn btn-info">Jak działamy?</button></a>


      </div>
      <div class=" col-lg-7 col-xl-5">
        <img src="<?php echo home_url() ?>/wp-content/themes/prgrm-theme/img/home/profisell-postacie.png" alt="">
      </div>
    </div>
  </div>


</section>

   <?php // ========================================================================
     //  END SECTION - header
     // =========================================================================  ?>


<?php // ========================================================================
//  SECTION - o nas
// =========================================================================  ?>
<div id="o-nas"></div>
<section id="onas" class="section s2">
<div class="container"><div class="row align-items-center">
<div class="col-lg-6">
  <h2 class="dum">O nas</h2>

<p>
<?php if ( class_exists( 'iworks_orphan' ) ){
   $orphan = new iworks_orphan();
   echo $orphan->replace( get_field('progremo_content1'));
  }
  else {
   echo the_field('progremo_content1');
  }?>
</p>

<a href="/zespol"><button type="button" class="btn btn-secondary">Poznaj nasz zespół</button></a>
</div>
<div class="col-lg-6">
  <div class="embed-responsive embed-responsive-16by9">

<iframe src="https://player.vimeo.com/video/264218307" width="640" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>
</div>
</div></div>
</section>
<?php // ========================================================================
//  END SECTION - o nas
// =========================================================================  ?>

<?php // ========================================================================
//  SECTION - jak działamy
// =========================================================================  ?>
<div id="jak-dzialamy"></div>
<section id="jakdzialamy" class="bg-standard section s3">

  <div id="arrow"><img src="<?php echo get_template_directory_uri() ?>/img/home/arrow-profisell.svg" alt=""></div>

<div class="container">

<div class="row one">
<div class="col-sm-5 col-lg-6 col-xl-5 ">
  <h2 class="dum" id="jakdzialamy-header" >Jak działamy?</h2>
  <div class="b-number">01</div>
  <img src="<?php echo get_template_directory_uri() ?>/img/home/profisell-person-01-kadr.png" alt="">
</div>
<div class="col-xl-1 hidden-md"></div>
<div class="col-sm-7 col-lg-6 col-xl-6 icon-box-list absolut2">
<div class="b-number mobile">01</div>
<div class="icon-box">
  <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/home/icon-random.svg" alt=""></div>
  <h3><?php echo the_field('progremo_jd_t1') ?></h3>
  <p><?php echo the_field('progremo_jd_o1') ?></p>
</div>

<div class="icon-box">
  <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/home/icon-random-lop.svg" alt=""></div>
  <h3><?php echo the_field('progremo_jd_t2') ?></h3>
  <p><?php echo the_field('progremo_jd_o2') ?></p>
</div>


<div class="icon-box">
  <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/home/icon-random-car.svg" alt=""></div>
  <h3><?php echo the_field('progremo_jd_t3') ?></h3>
  <p><?php echo the_field('progremo_jd_o3') ?></p>
</div>


</div>

</div>

<div class="row two">

 <div class="col-sm-7 col-lg-6 col-xl-5 icon-box-list">
<div class="b-number mobile">02</div>
   <div class="icon-box">
     <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/home/icon-random-sr.svg" alt=""></div>
     <h3><?php echo the_field('progremo_jd_t4') ?></h3>
     <p><?php echo the_field('progremo_jd_o4') ?></p>
   </div>

   <div class="icon-box">
     <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/home/icon-random-gr.svg" alt=""></div>
     <h3><?php echo the_field('progremo_jd_t5') ?></h3>
     <p><?php echo the_field('progremo_jd_o5') ?></p>
   </div>


   <div class="icon-box">
     <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/home/icon-random-ko.svg" alt=""></div>
     <h3><?php echo the_field('progremo_jd_t6') ?></h3>
     <p><?php echo the_field('progremo_jd_o6') ?></p>
   </div>

 </div>
<div class=" col-xl-2 hidden-md"></div>
   <div class="col-sm-5 col-lg-6 col-xl-5">
<div class="absolut1">
  <div class="b-number">02</div>
  <img src="<?php echo get_template_directory_uri() ?>/img/home/profisell-person-02-kadr.png" alt="">
</div>

   </div>
</div></div>
</section>
<?php // ========================================================================
//  END SECTION -jak działamy
// =========================================================================  ?>

<?php // ========================================================================
//  SECTION - wyróżnienie
// =========================================================================  ?>
<section id="grant">
<div class="container"><div class="row">

<div class="col-md-12"><?php echo the_field('progremo_wyr') ?></div>
</div></div>
</section>
<?php // ========================================================================
//  END SECTION -wyróżnienie
// =========================================================================  ?>

<?php // ========================================================================
//  SECTION - kafelki
// =========================================================================  ?>
<section id="full-till-box">
<div class="container-fluid"><div class="row">

<div class="col-md-6 till till-left">
    <a href="<?php echo home_url() ?>/klienci-indywidualni">
  <div class="till-bg" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/home/mask-indywidualni.jpg')"></div>
<div class="till_caption">
  <h3>Klienci indywidualni</h3>
<button type="button" class="btn btn-secondary">Dowiedz się więcej</button>
</div>
</a>
</div>


<div class="col-md-6 till till-right" >
    <a href="<?php echo home_url() ?>/firmy-projektowe">
  <div class="till-bg" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/home/mask-architekci.jpg')"></div>

<div class="till_caption">
  <h3><?php if ( class_exists( 'iworks_orphan' ) ){
     $orphan = new iworks_orphan();
     echo $orphan->replace( 'Firmy projektowe i wykończeniowe');
    }
    else {
     echo 'Firmy projektowe i wykończeniowe';
    }?></h3>
<button type="button" class="btn btn-secondary">Dowiedz się więcej</button>
</div>

</a>
</div>
</div></div>
</section>
<?php // ========================================================================
//  END SECTION -kafelki
// =========================================================================  ?>


<div class="multi-section-container">

<?php // ========================================================================
//  SECTION - kontakt
// =========================================================================  ?>
<div id="kontakt-profisell" ></div>
<section id="kontakt" class="section s4 pb40">
<div class="container">
<div class="row"><div class="col-lg-12"><div class="dum h1 h1-mark">Kontakt</div></div></div>
<div class="row">

<div class="col-lg-4">
  <img src="<?php echo get_template_directory_uri() ?>/img/home/profisell-logo.svg" alt="">
<?php echo the_field('progremo_knt1') ?>

</div>
<div class="col-lg-4">
<?php echo the_field('progremo_knt2') ?>
</div>
<div class="col-lg-4">
<?php echo the_field('progremo_knt3') ?>
<div id="social_box">
  <a target="blank" href="https://www.facebook.com/maxelektroolkusz/"><img src="<?php echo get_template_directory_uri()?>/img/fb.svg" alt=""></a>
  <span>|</span>
  <a target="blank" href="https://allegro.pl/uzytkownik/Electrosubiekt?order=m"><img src="<?php echo get_template_directory_uri()?>/img/allegro.svg" alt=""></a>
</div>
</div>

</div></div>
</section>
<?php // ========================================================================
//  END SECTION -kontakt
// =========================================================================  ?>

<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section id="kontakt-form" class="pt10">
<div class="container"><div class="row">
<div class="col-lg-6 ">

<?php echo do_shortcode('[contact-form-7 id="4" title="Formularz 1"]') ?>


</div>
<div class="col-lg-6 mobihide">    <div id="map"></div></div>

</div></div>
</section>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>
</div>
  <?php get_footer(); ?>
