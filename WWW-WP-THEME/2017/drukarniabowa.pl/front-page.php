<?php get_header(); ?>

<?php get_template_part( 'content', 'men' );?>

<!--===========================================header==================  -->
<section id="header-fp" class="mt2" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>')">
  <div class="container mscal"><div class="row">
 <div class="col-sm-6">
   <div id="arrow-normal"><h1><?php echo the_field('prog_h1') ?><p><?php echo the_field('prog_h2') ?></p></h1></div>
   <div id="sub3" class="mobihide vpc1">
     <div id="arrow-fp"><img class="prgrm-pp" src="<?php echo get_template_directory_uri()?>/img/strzalka_w_dol.png" alt=""></div>
     <div id="arrow-text">
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
 <div class="col-sm-6 mobihide vpc2 del2"><img id="header-logo" src="<?php echo get_template_directory_uri()?>/img/logo_duze.svg" alt=""></div>
</div></div></section>


<!--============================= skew foto ===========================  -->
<!-- <section id="why">

</section> -->


<div id="front_why">
<section id="why">

  <div class="cont_skew container-fluid mb4">
  <div class="row">
   <div class=" col-sm-6"></div>
   <div class="col-sm-6">
     <img src="<?php echo get_template_directory_uri()?>/img/foto_drukarnia.jpg" alt="">
   </div></div></div>

   <div id="why-text" class="container "><div class="row">

     <div class="col-sm-6"><div class="text_skew vpc3 del2">
     <h2>O was</h2>
     <div class="hr_vert orphan">



 <?php if ( class_exists( 'iworks_orphan' ) ){
    $orphan = new iworks_orphan();
    echo $orphan->replace( get_field('prog_content1'));
   }
   else {
    echo the_field('prog_content1');
   }?>


</div>
        </div></div>

        <div class="col-sm-6"></div>
   </div></div>

</section>
</div>



<div class="container mt1 mb2 mscal"><div class="middle-text vpc3 del1"><h4 id="cyt12" class="m00">


<?php if ( class_exists( 'iworks_orphan' ) ){
   $orphan = new iworks_orphan();
   echo $orphan->replace( get_field('prog_subhead'));
  }
  else {
   echo the_field('prog_subhead');
  }?>

</h4></div></div>

<!--============================= skew foto ===========================  -->


<!-- Kafelki ====================================-->

<div class="container-fluid all-tiles"><div class="row">

<div class="col-sm-6">
  <a href="<?php echo get_page_link(3509)?>">
<div class="front-tiles">
<div>
 <h2>Firmy<br> produkcyjne</h2>
   <img class="prgrm-pp" src="<?php echo get_template_directory_uri()?>/img/strzalka_firmy.png" alt="">
</div>
<div class="front-tiles-bg" style="background-image: url('<?php echo the_field('prog_fot1') ?>')"></div>
</div></a>
</div>

<div class="col-sm-6">
  <a href="<?php echo get_page_link(3507)?>">
<div class="front-tiles">

<div>
 <h2>Agencje <br>reklamowe</h2>
   <img class="prgrm-pp" src="<?php echo get_template_directory_uri()?>/img/strzalka_agencje.png" alt="">
</div>
<div class="front-tiles-bg" style="background-image: url('<?php echo the_field('prog_fot2') ?>')"></div>
</div></a>
</div>


</div></div>

<!-- koniec Kafelki ====================================-->




<!--====================BO WARTOŚCI SĄ WCENIE ==============  -->
<div id="bowa"  class="container mscal">
  <div class="row">
    <div id="sec1" class="col-sm-12"><h2><span>BO</span> WArtości są w cenie</h2></div>
</div>

<div class="row">
<div class="col-sm-4">
  <div class="head">
    <img src="<?php echo get_template_directory_uri()?>/img/terminowosc.svg" alt="">
    <h4><?php echo the_field('prog_nag1') ?></h4>
  </div>
  <div class="hr_vert">

    <?php if ( class_exists( 'iworks_orphan' ) ){
       $orphan = new iworks_orphan();
       echo $orphan->replace( get_field('prog_tr1'));
      }
      else {
       echo the_field('prog_tr1');
      }?>

  </div>
</div>


<div class="col-sm-4">
  <div class="head mobc">
    <img src="<?php echo get_template_directory_uri()?>/img/jakosc.svg" alt="">
    <h4><?php echo the_field('prog_nag2') ?></h4>
  </div>
  <div class="hr_vert">

    <?php if ( class_exists( 'iworks_orphan' ) ){
       $orphan = new iworks_orphan();
       echo $orphan->replace( get_field('prog_tr2'));
      }
      else {
       echo the_field('prog_tr2');
      }?>

  </div>
</div>

<div class="col-sm-4">
  <div class="head">
    <img src="<?php echo get_template_directory_uri()?>/img/elastycznosc.svg" alt="">
    <h4><?php echo the_field('prog_nag3') ?></h4>
  </div>
  <div class="hr_vert orphans">


        <?php if ( class_exists( 'iworks_orphan' ) ){
           $orphan = new iworks_orphan();
           echo $orphan->replace( get_field('prog_tr3'));
          }
          else {
           echo the_field('prog_tr3');
          }?>
  </div>
</div>
</div>
</div>



<?php get_footer(); ?>
