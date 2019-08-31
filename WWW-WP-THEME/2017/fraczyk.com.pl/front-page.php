<?php get_header(); ?>

<?php get_template_part( 'content', 'men' );?>

 <!-- ==================================
      MAIN SLIDER
      ================================== -->
      <div id="main-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#main-slider" data-slide-to="0" class="active"></li>


      <?php if (get_field('pcf-sf2')): ?>
           <li data-target="#main-slider" data-slide-to="1"></li>
         <?php endif; ?>


       <?php if (get_field('pcf-sf3')): ?>
          <li data-target="#main-slider" data-slide-to="2"></li>
        <?php endif; ?>


      <?php if (get_field('pcf-sf4')): ?>
          <li data-target="#main-slider" data-slide-to="3"></li>
        <?php endif; ?>

        </ol>
        <div class="carousel-inner" role="listbox">

          <?php if (get_field('pcf-sf1')): ?>

          <div class="item active" style='background-image: url("<?php the_field('pcf-sf1');?>")'>
            <div class="carousel-caption">
              <div class="square-cont">
              <h2 class="square"> <?php the_field('pcf-st1'); ?></h2>
              </div>
              <h6 class="main_subtitle"><?php echo the_field('pcf-sd-txt1') ?></h6>
            </div>

          </div>
                <?php endif; ?>


                    <?php if (get_field('pcf-sf2')): ?>
          <div class="item" style='background-image: url("<?php the_field('pcf-sf2');?>")'>

            <div class="carousel-caption">
              <div class="square-cont">
              <h2 class="square"> <?php the_field('pcf-st2'); ?></h2>
 </div>

      <h6 class="main_subtitle"><?php echo the_field('pcf-sd-txt2') ?></h6>
            </div>

          </div>
  <?php endif; ?>

                    <?php if (get_field('pcf-sf3')): ?>
          <div class="item" style='background-image: url("<?php the_field('pcf-sf3');?>")'>
            <div class="carousel-caption">
              <div class="square-cont">
              <h2 class="square"> <?php the_field('pcf-st3'); ?></h2>
              </div>
              <h6 class="main_subtitle"><?php echo the_field('pcf-sd-txt3') ?></h6>
            </div>
          </div>
                      <?php endif; ?>


                    <?php if (get_field('pcf-sf4')): ?>
          <div class="item" style='background-image: url("<?php the_field('pcf-sf4');?>")'>
            <div class="carousel-caption">
              <div class="square-cont">
              <h2 class="square"> <?php the_field('pcf-st4'); ?></h2>

 </div>
            <h6 class="main_subtitle"><?php echo the_field('pcf-sd-txt4') ?></h6>
            </div>
          </div>
                    <?php endif; ?>

        </div>
<!-- end slider container-->
      </div>

      <!-- ===============================
      END MAIN SLIDER
      ==================================== -->


<section class="char char2 pb2">


<div class="container character">
<h1 class="heading"><?php the_field('pcf-k1'); ?></h1>

<!-- HR special section -->
<div class="hr_special2">
<img src="<?php echo  get_template_directory_uri() ?>/img/section-line-decoration.png" alt="Kancelaria Kraków">
</div>
<!-- HR special section -->

<div class="row border-part-row">
  <div class="col-sm-12 text">
<p class="middle-text mb2"><?php the_field('pcf-k2'); ?></p>
</div>
<!-- <div class="col-sm-6  text border-part">
<?php the_field('pcf-k3'); ?>

<div class="hideborder-right"></div>
<div class="hideborder-bottom-right"></div>
</div> -->
</div>

<div class="row iconrow1">


<div class="col-sm-1"><div class="icon icon1"></div></div>
  <div class="col-sm-5 text">
    <h2><?php the_field('pcf1'); ?></h2>
    <p class="small"><?php the_field('pcf2'); ?></p>
  </div>

  <div class="col-sm-1"><div class="icon icon2"></div></div>
    <div class="col-sm-5 text">
      <h2><?php the_field('pcf3'); ?></h2>
      <p class="small"><?php the_field('pcf4'); ?></p>
    </div>
</div><div class="row iconrow1">

    <div class="col-sm-1"><div class="icon icon3"></div></div>
      <div class="col-sm-5 text">
        <h2><?php the_field('pcf5'); ?></h2>
        <p class="small"><?php the_field('pcf6'); ?></p>
      </div>

      <div class="col-sm-1"><div class="icon icon4"></div></div>
        <div class="col-sm-5 text">
          <h2><?php the_field('pcf7'); ?></h2>
          <p class="small"><?php the_field('pcf8'); ?></p>
        </div>



</div>
<!-- end row -->
</div>

<a href="<?php echo the_field('pcf-hm-link1') ?>"><div class="button-light"><p><?php echo the_field('pcf-hm-1') ?></p></div></a>
</section>
<!--
/*========================================================================
  END CHARACTER SECTION
=========================================================================*/ -->

<!--=======================================
PARALAX 1
==========================================-->

<!-- <section id="more-offer">
<div class="parallax par vcc scale-xl pb2" style='background-image: url("<?php the_field('pcf-so-f');?>")'>
<div class="container"><h3 class="header1 mt2"><?php the_field('pcf-so-t'); ?></h3> -->
<!-- HR special section -->
<!-- <div class="hr_special2">
<img src="<?php echo  get_template_directory_uri() ?>/img/section-line-decoration.png" alt="Kancelaria Kraków">
</div> -->
<!-- HR special section -->
<!-- <div class="intro text">
  <p class="middle-text"><?php the_field('pcf-so-c'); ?></p>
</div>

<div class="row ofr mt30">
  <div class="col-sm-6 col-md-4 col-md-offset-2"><a href="<?php echo the_field('pcf-of-link1') ?>"><div class="button-light "><p><?php echo the_field('pcf-so-n1') ?></p></div></a></div>
  <div class="col-sm-6 col-md-4"><a href="<?php echo the_field('pcf-of-link2') ?>"><div class="button-light button-const"><p><?php echo the_field('pcf-so-n2') ?></p></div></a></div>
</div>
<div class="intro text">
  <p class="middle-text"><?php the_field('pcf-so-dok-c'); ?></p>
</div>
<a href="<?php echo the_field('pcf-of-link3') ?>"><div class="button-light mt"><p><?php echo the_field('pcf-so-n3') ?></p></div></a>


</div>
</div>
</section> -->
  <!--=======================================
  SUBOFFER
  ==========================================-->

<section class="suboffer pb2" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/kancelaria-fraczek.jpg')">
  <div class="container">

<div class="row border-part-row">
  <div class="col-sm-6 text">
<h4 class="heading header1"><?php the_field('pcf-sc-n'); ?></h4>
<!-- HR special section -->
<div class="hr_special2">
<img src="<?php echo  get_template_directory_uri() ?>/img/section-line-decoration.png" alt="Kancelaria Kraków">
</div>
<!-- HR special section -->



<p class="mt mb"><mark><?php the_field('pcf-sc-t1'); ?><mark></p>
<p class="mb"><?php the_field('pcf-sc-t2'); ?></p>


<?php get_template_part('content','slider2') ?>



</div>
<div class="col-sm-6">



</div>
</div>
<!-- end row -->
</div>
<!-- end container -->
</section>

<div id="nasi-klienci">
  <div class="container">
  <h4 class="header1"><?php echo the_field('pcf-hed1') ?></h4>
      <!-- HR special section -->
      <div class="hr_special2">
      <img src="<?php echo  get_template_directory_uri() ?>/img/section-line-decoration.png" alt="Kancelaria Kraków">
      </div>

      <p class="subheader"><?php echo the_field('pcf-con1') ?></p>
  </div>

  <section class="ul-square">
    <div class="container"><div class="row">
  <div class="col-sm-6 col-md-3">
    <ul>
      <?php if (get_field('pcf12')) : ?><li><p><?php echo the_field('pcf12') ?></p></li><?php endif ;?>
    <?php if (get_field('pcf13')) : ?><li><p><?php echo the_field('pcf13') ?></p></li><?php endif ;?>
      <?php if (get_field('pcf14')) : ?><li><p><?php echo the_field('pcf14') ?></p></li><?php endif ;?>
      <?php if (get_field('pcf15')) : ?><li><p><?php echo the_field('pcf15') ?></p></li><?php endif ;?>

      <?php if (get_field('add-pcf12')) : ?><li><p><?php echo the_field('add-pcf12') ?></p></li><?php endif ;?>
    <?php if (get_field('add-pcf13')) : ?><li><p><?php echo the_field('add-pcf13') ?></p></li><?php endif ;?>
      <?php if (get_field('add-pcf14')) : ?><li><p><?php echo the_field('add-pcf14') ?></p></li><?php endif ;?>
      <?php if (get_field('add-pcf15')) : ?><li><p><?php echo the_field('add-pcf15') ?></p></li><?php endif ;?>

      <?php if (get_field('add2-pcf12')) : ?><li><p><?php echo the_field('add2-pcf12') ?></p></li><?php endif ;?>
    <?php if (get_field('add2-pcf13')) : ?><li><p><?php echo the_field('add2-pcf13') ?></p></li><?php endif ;?>
      <?php if (get_field('add2-pcf14')) : ?><li><p><?php echo the_field('add2-pcf14') ?></p></li><?php endif ;?>
      <?php if (get_field('add2-pcf15')) : ?><li><p><?php echo the_field('add2-pcf15') ?></p></li><?php endif ;?>

    </ul>
  </div>

  <div class="col-sm-6 col-md-3">
    <ul>
      <?php if (get_field('pcf16')) : ?><li><p><?php echo the_field('pcf16') ?></p></li><?php endif ;?>
    <?php if (get_field('pcf17')) : ?><li><p><?php echo the_field('pcf17') ?></p></li><?php endif ;?>
      <?php if (get_field('pcf18')) : ?><li><p><?php echo the_field('pcf18') ?></p></li><?php endif ;?>
      <?php if (get_field('pcf19')) : ?><li><p><?php echo the_field('pcf19') ?></p></li><?php endif ;?>

      <?php if (get_field('add-pcf16')) : ?><li><p><?php echo the_field('add-pcf16') ?></p></li><?php endif ;?>
    <?php if (get_field('add-pcf17')) : ?><li><p><?php echo the_field('add-pcf17') ?></p></li><?php endif ;?>
      <?php if (get_field('add-pcf18')) : ?><li><p><?php echo the_field('add-pcf18') ?></p></li><?php endif ;?>
      <?php if (get_field('add-pcf19')) : ?><li><p><?php echo the_field('add-pcf19') ?></p></li><?php endif ;?>

      <?php if (get_field('add2-pcf16')) : ?><li><p><?php echo the_field('add2-pcf16') ?></p></li><?php endif ;?>
    <?php if (get_field('add2-pcf17')) : ?><li><p><?php echo the_field('add2-pcf17') ?></p></li><?php endif ;?>
      <?php if (get_field('add2-pcf18')) : ?><li><p><?php echo the_field('add2-pcf18') ?></p></li><?php endif ;?>
      <?php if (get_field('add2-pcf19')) : ?><li><p><?php echo the_field('add2-pcf19') ?></p></li><?php endif ;?>

    </ul>
  </div>


  <div class="col-sm-6 col-md-3">
    <ul>
      <?php if (get_field('pcf20')) : ?><li><p><?php echo the_field('pcf20') ?></p></li><?php endif ;?>
      <?php if (get_field('pcf21')) : ?><li><p><?php echo the_field('pcf21') ?></p></li><?php endif ;?>
      <?php if (get_field('pcf22')) : ?><li><p><?php echo the_field('pcf22') ?></p></li><?php endif ;?>
      <?php if (get_field('pcf22b')) : ?><li><p><?php echo the_field('pcf22b') ?></p></li><?php endif ;?>

      <?php if (get_field('add-pcf20')) : ?><li><p><?php echo the_field('add-pcf20') ?></p></li><?php endif ;?>
      <?php if (get_field('add-pcf21')) : ?><li><p><?php echo the_field('add-pcf21') ?></p></li><?php endif ;?>
      <?php if (get_field('add-pcf22')) : ?><li><p><?php echo the_field('add-pcf22') ?></p></li><?php endif ;?>
      <?php if (get_field('add-pcf22b')) : ?><li><p><?php echo the_field('add-pcf22b') ?></p></li><?php endif ;?>

      <?php if (get_field('add2-pcf20')) : ?><li><p><?php echo the_field('add2-pcf20') ?></p></li><?php endif ;?>
      <?php if (get_field('add2-pcf21')) : ?><li><p><?php echo the_field('add2-pcf21') ?></p></li><?php endif ;?>
      <?php if (get_field('add2-pcf22')) : ?><li><p><?php echo the_field('add2-pcf22') ?></p></li><?php endif ;?>
      <?php if (get_field('add2-pcf22b')) : ?><li><p><?php echo the_field('add2-pcf22b') ?></p></li><?php endif ;?>


    </ul>
  </div>

  <div class="col-sm-6 col-md-3">
    <ul>
      <?php if (get_field('pcf1')) : ?><li><p><?php echo the_field('pcf23') ?></p></li><?php endif ;?>
      <?php if (get_field('pcf1')) : ?><li><p><?php echo the_field('pcf24') ?></p></li><?php endif ;?>
      <?php if (get_field('pcf1')) : ?><li><p><?php echo the_field('pcf25') ?></p></li><?php endif ;?>
      <?php if (get_field('pcf25b')) : ?><li><p><?php echo the_field('pcf25b') ?></p></li><?php endif ;?>

      <?php if (get_field('add-pcf23')) : ?><li><p><?php echo the_field('add-pcf23') ?></p></li><?php endif ;?>
      <?php if (get_field('add-pcf24')) : ?><li><p><?php echo the_field('add-pcf24') ?></p></li><?php endif ;?>
      <?php if (get_field('add-pcf25')) : ?><li><p><?php echo the_field('add-pcf25') ?></p></li><?php endif ;?>
      <?php if (get_field('add-pcf25b')) : ?><li><p><?php echo the_field('add-pcf25b') ?></p></li><?php endif ;?>

      <?php if (get_field('add2-pcf23')) : ?><li><p><?php echo the_field('add2-pcf23') ?></p></li><?php endif ;?>
      <?php if (get_field('add2-pcf24')) : ?><li><p><?php echo the_field('add2-pcf24') ?></p></li><?php endif ;?>
      <?php if (get_field('add2-pcf25')) : ?><li><p><?php echo the_field('add2-pcf25') ?></p></li><?php endif ;?>
      <?php if (get_field('add2-pcf25b')) : ?><li><p><?php echo the_field('add2-pcf25b') ?></p></li><?php endif ;?>

    </ul>
  </div>

    </div></div>
  </section>

</div>
<!-- REFERENCJE -->
<div id="referencje" >

<div class="container"><div class="row mb4">
<div class="col-md-6">
<!-- img-gallery -->
<div id="full_ref">

   <?php
   $id_img = 2;
   $img_code = 'pcf-ref-'.$id_img;
   echo wp_get_attachment_image(get_field($img_code), 'full');
   ?>

 </div>
   <!-- img-gallery -->
</div>

  <div class="col-md-6">
<h4 class="header1"><?php echo the_field('pcf-ref-n') ?></h4>
    <!-- HR special section -->
    <div class="hr_special2">
    <img src="<?php echo  get_template_directory_uri() ?>/img/section-line-decoration.png" alt="Kancelaria Kraków">
    </div>
    <!-- HR special section -->
<p class=""><?php echo the_field('pcf-ref-t') ?></p>
<?php get_template_part('content','slider2-2') ?>

</div>

</div>
<h4 class="header1"><?php echo the_field('contact-h') ?></h4>

</div>


<div class="post" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/kancelaria-prawna-krakow-kontakt.png')"></div>


</div>
<!-- /REFERENCJE  -->




<section id="contact-section">
  <div class="contact-data">
    <?php the_field('contact-data') ?>

<div class="hideborder-right"></div>
<div class="hideborder-top-right"></div>
<div class="hideborder-vertic"></div>
  </div>

  <div class="contact-cta heading">
    <a href="<?php echo esc_url( get_permalink(10) ); ?>">
   <?php the_field('link_cta') ?>
  <div class="hideborder-top-left"></div>
  <div class="hideborder-left"></div>
  <div class="hideborder-bottom-right"></div>
  <div class="hideborder-right"></div>
  <div class="hideborder-vertic"></div>
  </a>
</div>

</section>







<?php get_footer(); ?>
