<?php get_header(); ?>

<?php get_template_part( 'content', 'men' );?>

 <!-- ==================================
      MAIN SLIDER
      ================================== -->
      <div id="main-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#main-slider" data-slide-to="0" class="active"></li>
           <li data-target="#main-slider" data-slide-to="1"></li>
          <li data-target="#main-slider" data-slide-to="2"></li>
          <li data-target="#main-slider" data-slide-to="3"></li>

        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active" style='background-image: url("<?php the_field('pcf-sf1');?>")'>
            <div class="carousel-caption">
              <div class="square-cont">
              <h2 class="square"> <?php the_field('pcf-st1'); ?></h2>
              </div>
            </div>

          </div>
          <div class="item" style='background-image: url("<?php the_field('pcf-sf2');?>")'>

            <div class="carousel-caption">
              <div class="square-cont">
              <h2 class="square"> <?php the_field('pcf-st2'); ?></h2>
              </div>
            </div>

          </div>
          <div class="item" style='background-image: url("<?php the_field('pcf-sf3');?>")'>
            <div class="carousel-caption">
              <div class="square-cont">
              <h2 class="square"> <?php the_field('pcf-st3'); ?></h2>
              </div>
            </div>


          </div>

          <div class="item" style='background-image: url("<?php the_field('pcf-sf4');?>")'>
            <div class="carousel-caption">
              <div class="square-cont">
              <h2 class="square"> <?php the_field('pcf-st4'); ?></h2>
              </div>
            </div>


          </div>

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

  <div class="col-sm-1"><div class="icon icon1"></div></div>
    <div class="col-sm-5 text">
      <h2><?php the_field('pcf3'); ?></h2>
      <p class="small"><?php the_field('pcf4'); ?></p>
    </div>
</div><div class="row iconrow1">

    <div class="col-sm-1"><div class="icon icon1"></div></div>
      <div class="col-sm-5 text">
        <h2><?php the_field('pcf5'); ?></h2>
        <p class="small"><?php the_field('pcf6'); ?></p>
      </div>

      <div class="col-sm-1"><div class="icon icon1"></div></div>
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

<section id="more-offer">
<div class="parallax par vcc scale-xl pb2" style='background-image: url("<?php the_field('pcf-so-f');?>")'>
<div class="container"><h3 class="header1 mt2"><?php the_field('pcf-so-t'); ?></h3>
<!-- HR special section -->
<div class="hr_special2">
<img src="<?php echo  get_template_directory_uri() ?>/img/section-line-decoration.png" alt="Kancelaria Kraków">
</div>
<!-- HR special section -->
<div class="intro text">
  <p class="middle-text mt2"><?php the_field('pcf-so-c'); ?></p>
</div>

<div class="row ofr mt3">
  <div class="col-sm-6 col-md-4 col-md-offset-2"><a href="<?php echo the_field('pcf-of-link1') ?>"><div class="button-light "><p><?php echo the_field('pcf-so-n1') ?></p></div></a></div>
  <div class="col-sm-6 col-md-4"><a href="<?php echo the_field('pcf-of-link2') ?>"><div class="button-light button-const"><p><?php echo the_field('pcf-so-n2') ?></p></div></a></div>
</div>
<div class="intro text">
  <p class="middle-text mt2"><?php the_field('pcf-so-dok-c'); ?></p>
</div>
<a href="<?php echo the_field('pcf-of-link3') ?>"><div class="button-light mt"><p><?php echo the_field('pcf-so-n3') ?></p></div></a>


</div>
</div>
</section>
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
