<?php
/*
Template Name: Firmy / Agencje
*/
?>

<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>



<!--===========================================header==================  -->
<section id="header-normal" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>')">
  <div class="container mscal"><div class="row">
 <div class="col-lg-6">
    <div id="arrow-normal">
   <h1><?php echo the_title() ?></h1>
   <h4><?php echo the_field('prog_subtitle') ?></h4>
  </div>
 </div>
 <div class="col-lg-6"></div>
</div></div></section>
<!--=========================================== end header==================  -->


<!-- ===================== PARALLAX EFFECT ============================-->
<!-- <div id="parallax_cont"> -->
<div id="parallax" class="parallax">
  <img src="<?php echo get_template_directory_uri()?>/img/litera_b.svg" alt="">
</div>
<div id="parallax3" class="parallax">
  <img src="<?php echo get_template_directory_uri()?>/img/litera_w.svg" alt="">
</div>

<div id="parallax2" class="parallax">
  <img src="<?php echo get_template_directory_uri()?>/img/litera_o.svg" alt="">
</div>
<div id="parallax4" class="parallax">
  <img src="<?php echo get_template_directory_uri()?>/img/litera_a.svg" alt="">
</div>
<!-- </div> -->

<!-- ===================== END PARALLAX EFFECT ============================-->


<!--============================= skew foto ===========================  -->

<div id="obs_why">
<section id="why" ><div class="cont_skew container-fluid mb4"><div class="row">

  <div class=" col-sm-6">
</div>

   <div class="col-sm-6" style="background-image: url('')">
     <img src="<?php echo the_field('progr_main-fot2')?>" alt="">
     <section id="mil" class="bgc3"><p> DRUKUJEMY <span>1 000 000</span> <BR> ARKUSZY PAPIERU <BR> DZIENNIE</p></section>
   </div>
</div></div>
   <div id="why-text" class="container"><div class="row">

     <div class="col-sm-6"><div class="text_skew">
     <h2><?php echo the_field('prog_head_main1') ?></h2>
     <div class="hr_vert orphan">
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
        </div></div>
<div class="clearfix"></div>
      </div>

        <div class="col-sm-6"></div>
   </div>

 </div>

</section>
</div>

<!--============================= end skew foto ===========================  -->

<!-- SEKCJA ZAPEWNIAMY -->
<div id="secnor"><section id="sec1"><div class="container">
  <h2 id="clear" class=" ml-15 mt mb2"><?php echo the_field('prog_header1') ?></h2>
  <div class="hr-mobi"></div>
  <div id="prgrm_sicon" class="row hr_vert">
   <div class="col-sm-6"><div class="head">
     <?php if (get_the_ID()==3509):?><img src="<?php echo get_template_directory_uri()?>/img/pomoc.svg" alt=""><?php endif; ?>
     <?php if (get_the_ID()==3507):?><img src="<?php echo get_template_directory_uri()?>/img/terminy.svg" alt=""><?php endif; ?>
     <h4><?php  echo the_field('prog_tr1') ?></h4></div></div>
   <div class="col-sm-6"><div class="head">
     <?php if (get_the_ID()==3509):?><img src="<?php echo get_template_directory_uri()?>/img/pakowanie.svg" alt=""><?php endif; ?>
     <?php if (get_the_ID()==3507):?><img src="<?php echo get_template_directory_uri()?>/img/siec_kontaktow.svg" alt=""><?php endif; ?>
       <h4><?php  echo the_field('prog_tr2') ?></h4></div></div>

 <div class="col-sm-6"><div class="head">
   <?php if (get_the_ID()==3509):?><img src="<?php echo get_template_directory_uri()?>/img/kompletowanie.svg" alt=""><?php endif; ?>
   <?php if (get_the_ID()==3507):?><img src="<?php echo get_template_directory_uri()?>/img/wysylka_klient.svg" alt=""><?php endif; ?>
   <h4><?php  echo the_field('prog_tr3') ?></h4></div></div>
 <div class="col-sm-6"><div class="head">
   <?php if (get_the_ID()==3509):?><img src="<?php echo get_template_directory_uri()?>/img/wysylka.svg" alt=""><?php endif; ?>
   <?php if (get_the_ID()==3507):?><img src="<?php echo get_template_directory_uri()?>/img/rozmiar_zamowienia.svg" alt=""><?php endif; ?>
   <h4><?php  echo the_field('prog_tr4') ?></h4></div></div>
</div>

</div></section></div>

<!-- SEKCJA GWARANTUJEMY WAM  -->

<div id="secnor2"><section id="sec8">
 <div class="container">  <h2 class="ml-15 mt mb"><?php echo the_field('header-section') ?></h2>  <div class="hr-mobi"></div></div>
  <div class="container ">
  <div class="hr_vert">
 <div class="row">
   <div class="col-sm-3">
     <?php if (get_the_ID()==3509):?><img src="<?php echo get_template_directory_uri()?>/img/automatyka.svg" alt=""><?php endif; ?>
     <?php if (get_the_ID()==3507):?><img src="<?php echo get_template_directory_uri()?>/img/partnerstwo.svg" alt=""><?php endif; ?>
   </div>
   <div class="col-sm-9"><h3><?php echo the_field('prog_hd1') ?></h3>


         <?php if ( class_exists( 'iworks_orphan' ) ){
            $orphan = new iworks_orphan();
            echo $orphan->replace( get_field('prog_cnt1'));
           }
           else {
            echo the_field('prog_cnt1');
           }?>

   </div>
 </div>

 <div class="row">
   <div class="col-sm-3">
     <?php if (get_the_ID()==3509):?><img src="<?php echo get_template_directory_uri()?>/img/optymalizacja.svg" alt=""><?php endif; ?>
     <?php if (get_the_ID()==3507):?><img src="<?php echo get_template_directory_uri()?>/img/swoboda.svg" alt=""><?php endif; ?>
   </div>
   <div class="col-sm-9"><h3><?php echo the_field('prog_hd2') ?></h3>
          <?php if ( class_exists( 'iworks_orphan' ) ){
             $orphan = new iworks_orphan();
             echo $orphan->replace( get_field('prog_cnt2'));
            }
            else {
             echo the_field('prog_cnt2');
            }?></div>
 </div>

 <div class="row">
   <div class="col-sm-3">
    <?php if (get_the_ID()==3509):?> <img src="<?php echo get_template_directory_uri()?>/img/rzetelnosc.svg" alt=""><?php endif; ?>
    <?php if (get_the_ID()==3507):?> <img src="<?php echo get_template_directory_uri()?>/img/wizja.svg" alt=""><?php endif; ?>
   </div>
   <div class="col-sm-9"><h3><?php echo the_field('prog_hd3') ?></h3>
          <?php if ( class_exists( 'iworks_orphan' ) ){
             $orphan = new iworks_orphan();
             echo $orphan->replace( get_field('prog_cnt3'));
            }
            else {
             echo the_field('prog_cnt3');
            }?></div>
 </div>

</div></div></section></div>


</div><!-- end parallax cont -->


<section id="mil2" class="bgc3">
  <div class="container"><div class="row">
  <p> DRUKUJEMY <span>1 000 000</span> <BR> ARKUSZY PAPIERU <BR> DZIENNIE</p><div id="cont24">24/7</div><div id="hr5"></div></div></div>
</section>


<?php get_footer(); ?>
