<?php get_header(); ?>

<?php get_template_part( 'content', 'men' );?>

<!-- ==================================
     MAIN SLIDER
     ================================== -->
     <!-- <div id="loader-wrapper">
     <div class="load">
    <img src="<?php  echo get_template_directory_uri();?>/img/preloader-logo.png" alt="">

<div id="progress-bar"></div>
</div>
     </div> -->



     <div id="main-slider" class="carousel slide" data-ride="carousel">
       <!-- Indicators -->
       <!-- <ol class="carousel-indicators">
         <li data-target="#main-slider" data-slide-to="0" class="active"></li>
         <li data-target="#main-slider" data-slide-to="1"></li>
          <li data-target="#main-slider" data-slide-to="2"></li>

       </ol> -->
       <div class="carousel-inner" role="listbox">
         <div class="item active" style='background-image: url("<?php the_field('pcf-sf1');?>")'>
           <div class="carousel-caption">
             <div><h2><?php the_field('pcf-st1'); ?></h2></div>
           </div>

         </div>
         <div class="item" style='background-image: url("<?php the_field('pcf-sf2');?>")'>

           <div class="carousel-caption">
                   <div><h2><?php the_field('pcf-st2'); ?></h2></div>
           </div>

         </div>
         <!-- <div class="item" style='background-image: url("<?php the_field('pcf-sf3');?>")'>
           <div class="carousel-caption">
                   <div><h2> <?php the_field('pcf-st3'); ?></h2></div>
           </div>

         </div> -->
<!--

         			<a class="left carousel-control" href="#main-slider" data-slide="prev">
         	<span class="glyphicon glyphicon-chevron-left"></span>
         	<span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#main-slider" data-slide="next">
         	<span class="glyphicon glyphicon-chevron-right"></span>
         	<span class="sr-only">Next</span>
         </a> -->

       </div>

     </div>
     <!-- ===============================
     END MAIN SLIDER
     ==================================== -->

      <!--=======================================================================
        CHARACTER SECTION
      =========================================================================*/ -->

<section class="">


<div class="container-fluid character">
<!--
<h1 class="heading"><?php the_field('pcf-k1'); ?></h1> -->
<div class="semisepar"></div>

<div class="row iconrow1 rw">

  <div class="col-md-3 col-sm-6 text">
    <div class="icon icon1"></div>
    <h2><?php the_field('pcf1'); ?></h2>
    <img src="<?php the_field('pcf-w-f1') ?>" alt="projektowanie-wnetrz-architekt">
<p><?php the_field('pcf2'); ?></p>
  </div>



    <div class="col-md-3 col-sm-6 text">
      <div class="icon icon2"></div>
      <h2><?php the_field('pcf3'); ?></h2>
          <img src="<?php the_field('pcf-w-f2') ?>" alt="projektowanie-wnetrz-architekt">
  <p><?php the_field('pcf4'); ?></p>
    </div>



    <div class="col-md-3 col-sm-6 text">
      <div class="icon icon3"></div>

      <h2><?php the_field('pcf5'); ?></h2>
          <img src="<?php the_field('pcf-w-f3') ?>" alt="projektowanie-wnetrz-architekt">
  <p><?php the_field('pcf6'); ?></p>
    </div>

    <div class="col-md-3 col-sm-6 text">
      <div class="icon  icon4"></div>

      <h2><?php the_field('pcf7'); ?></h2>
          <img src="<?php the_field('pcf-w-f4') ?>" alt="projektowanie-wnetrz-architekt">
    <p><?php the_field('pcf8'); ?></p>
    </div>




</div>
<!-- end row -->
</div>
</section>
<!--END CHARACTER SECTION-->

<!--====================================================================
MODULE 1 SECTION
========================================================================-->
<section id="gallery">

<div class="container-fluid mt">
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
</section>
<!--END MODULE 1 SECTION -->

<!--======================================================================
  PORTFOLIO SECTION
=========================================================================*/ -->
<!-- <a name="portfolio"></a> -->

<section id="portfolio">
<div class="separ "></div>
<h2 class="title">PORTFOLIO</h2>
<h5 class="shadow">PRZESTRZEŃ Z INDYWIDUALNYM CHARAKTEREM</h5>
<div class="quarsepar"></div>
<h5 class="shadow">WNĘTRZA PRYWATNE</h5>
<div class="separ"></div>


<?php get_template_part( 'content', 'news' );?>

<div class="semisepar"></div>

<h5 class="shadow">WNĘTRZA PUBLICZNE</h5>
<div class="semisepar"></div>
<?php get_template_part( 'content', 'news2' );?>

</section>
<!--END PORTFOLIO SECTION -->

<div id="omnie"></div>
<!--=======================================================================
    ABOUT US SECTION
  =========================================================================*/ -->

  <section id="aboutus" class="mt">


<h2 class="title">O MNIE</h2>
<h5><?php the_field('pcf-om1')?></h5>

    <div class=" block mt container-fluid">
      <div class="row">
            <div class="col-sm-1"></div>
<div class="col-sm-2">

  <img src="<?php the_field('pcf-om3') ?>" alt="Architekt wtętrz, Marika Kafar">

</div>
<div class="col-sm-8">
<div class="intro"><p><?php echo the_field('pcf-om2');?></p></div>
<p><?php echo the_field('pcf-om4');?></p>
<!--END ABOUT US SECTION-->
</div>
    <div class="col-sm-1"></div>
</div></div>
</section>
<!-- ========================================================================
    PROJECT STAGES SECTION
  =========================================================================*/ -->
<div id="etapy-projektu"></div>
  <h2 class="title mt">ETAPY PROJEKTU</h2>

<section class="block mt stage-offer shadow-btn">

<div class="container-fluid">

  <div class="row">
    <div class="col-sm-1"></div>
  <div class="col-sm-2">
    <img src="<?php the_field('pcf-ep-f1') ?>" alt="">
  </div>
  <div class="col-sm-8">
    <?php the_field('pcf-ep-o1') ?>
  </div>
<div class="col-sm-1"></div>
</div>


<div class="row">
  <div class="col-sm-1"></div>
<div class="col-sm-2">
  <img src="<?php the_field('pcf-ep-f2') ?>" alt="">
</div>
<div class="col-sm-8">
  <?php the_field('pcf-ep-o2') ?>
</div>
<div class="col-sm-1"></div>
</div>

<div class="row">
  <div class="col-sm-1"></div>
<div class="col-sm-2">
  <img src="<?php the_field('pcf-ep-f3') ?>" alt="">
</div>
<div class="col-sm-8">
  <?php the_field('pcf-ep-o3') ?>
</div>
<div class="col-sm-1"></div>
</div>

<div class="row">
  <div class="col-sm-1"></div>
<div class="col-sm-2">
  <img src="<?php the_field('pcf-ep-f4') ?>" alt="">
</div>
<div class="col-sm-8">
  <?php the_field('pcf-ep-o4') ?>
</div>
<div class="col-sm-1"></div>
</div>


<div class="row">
  <div class="col-sm-1"></div>
<div class="col-sm-2">
  <img src="<?php the_field('pcf-ep-f5') ?>" alt="">
</div>
<div class="col-sm-8">
  <?php the_field('pcf-ep-o5') ?>
</div>
<div class="col-sm-1"></div>
</div>


</div>



</section>
<!-- END PROJECT STAGES SECTION -->




<!-- ========================================================================
   OFFER  SECTION
  =========================================================================*/ -->
<div id="oferta"></div>
<h2 class="title mt oferta">OFERTA</h2>
<section class="block shadow-btn">
<div class="container-fluid mt stage-offer">


    <div class="row">
      <div class="col-sm-1"></div>
    <div class="col-sm-2">
      <img src="<?php the_field('pcf-o-f1') ?>" alt="">
    </div>
    <div class="col-sm-8">
      <?php the_field('pcf-o-o1') ?>
    </div>
  <div class="col-sm-1"></div>
  </div>


  <div class="row">
    <div class="col-sm-1"></div>
  <div class="col-sm-2">
    <img src="<?php the_field('pcf-o-f2') ?>" alt="">
  </div>
  <div class="col-sm-8">
    <?php the_field('pcf-o-o2') ?>
  </div>
  <div class="col-sm-1"></div>
  </div>

  <div class="row">
    <div class="col-sm-1"></div>
  <div class="col-sm-2">
    <img src="<?php the_field('pcf-o-f3') ?>" alt="">
  </div>
  <div class="col-sm-8">
    <?php the_field('pcf-o-o3') ?>
  </div>
  <div class="col-sm-1"></div>
  </div>

  <div class="row">
    <div class="col-sm-1"></div>
  <div class="col-sm-2">
    <img src="<?php the_field('pcf-o-f4') ?>" alt="">
  </div>
  <div class="col-sm-8">
    <?php the_field('pcf-o-o4') ?>
  </div>
  <div class="col-sm-1"></div>
  </div>

</div>



</section>
<!-- END  OFFER SECTION -->


<!-- ========================================================================
   REFERENCE  SECTION
  =========================================================================*/ -->
<div id="referencje"></div>
<h2 class="title mt">REFERENCJE</h2>
<section id="reffer" class="mt block shadow-btn ">

<?php if (get_field('pcf-r-p1')) {

echo '<a target="blank" href="';
echo the_field('pcf-r-p1');
echo '"><p><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>';
echo the_field('pcf-r-o1');
echo '</p></a>';
}
?>

<?php if (get_field('pcf-r-o2')) {

echo '<a target="blank" href="';
echo the_field('pcf-r-p2');
echo '"><p><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>';
echo the_field('pcf-r-o2');
echo '</p></a>';
}
?>

<?php if (get_field('pcf-r-o3')) {

echo '<a target="blank" href="';
echo the_field('pcf-r-p3');
echo '"><p><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>';
echo the_field('pcf-r-o3');
echo '</p></a>';
}
?>

<?php if (get_field('pcf-r-o4')) {

echo '<a target="blank" href="';
echo the_field('pcf-r-p4');
echo '"><p><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>';
echo the_field('pcf-r-o4');
echo '</p></a>';
}
?>

<?php if (get_field('pcf-r-o5')) {

echo '<a target="blank" href="';
echo the_field('pcf-r-p5');
echo '"><p>';
echo the_field('pcf-r-o5');
echo '</p></a>';
}
?>




</section>

<!-- END REFERENCE SECTION -->


<!-- ========================================================================
   CONTACT SECTION
  =========================================================================*/ -->
<div id="kontakt"></div>
<h2 class="title mt">KONTAKT</h2>
<section id="contact" class="mt ">

  <div class="container-fluid block shadow-btn">

    <div class="row padtb">
      <div class="col-md-1 mibihide"></div>
    <div class="col-md-6">
      <?php echo do_shortcode('[contact-form-7 id="119" html_id="contact-form-1234" title="Formularz 1"]'); ?>
    </div>

<div class="col-md-5">

<address>
  <span class="adress">MARIKA KAFAR</span>
  <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><a href="tel:+48668176888 ">+48 668 176 888 </a></p>
   <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>PRYMASA AUGUSTA HLONDA 8, WARSZAWA, 02-972 </p>
    <p><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span>09:00 - 19:00</p>
  <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  <a href="mailto:marika.kafar@gmail.com">marika.kafar@gmail.com</a></p>
</address>

</div>

  </div></div>
</section>
<div class="separ"></div>

  <!-- END CONTACT SECTION -->

<?php get_footer(); ?>
