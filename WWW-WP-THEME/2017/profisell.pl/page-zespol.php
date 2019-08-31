<?php /* Template Name: ZESPÓŁ */?>
<?php get_header(); ?>
<section id="header-zespol" class="bg-standard">

<div class="container caption">
  <img class="minimobihide" src="<?php echo home_url() ?>/wp-content/themes/prgrm-theme/img/home/profisell-postacie.png" alt="">
  <div class="float-right content">
  <h1 class="dum2"><?php echo get_the_title();?></h1>
  <h5 class="dum2"><?php echo the_field('progremo_subtitle') ?></h5>
  </div>
</div>
</section>


<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section class="zespol-content"><div class="container">
<div class="row">
   <div class="col-sm-4 col-lg-3 offset-lg-1 foto">
     <img id="grzegorz" src="<?php echo get_template_directory_uri()?>/img/zespol/1-kadr.png" alt="">
   </div>
   <div class="col-sm-8 col-lg-5 content">
     <h3><?php echo the_field('progremo_name1') ?></h3>
     <h6><?php echo the_field('progremo_spec1') ?></h6>
     <p><?php ssacf('progremo_desc1') ?></p>
   </div>
</div>
</div></section>

<section class="zespol-content inverse"><div class="container">
<div class="row">
   <div class="col-sm-4 col-lg-3 offset-lg-1 foto">
     <img src="<?php echo get_template_directory_uri()?>/img/zespol/2-1-kadr.png" alt="">
   </div>
   <div class="col-sm-8 col-lg-5 content">
     <h3><?php echo the_field('progremo_name2') ?></h3>
     <h6><?php echo the_field('progremo_spec2') ?></h6>
     <p><?php ssacf('progremo_desc2') ?></p>
   </div>
</div>
</div></section>

<section class="zespol-content"><div class="container">
<div class="row">
   <div class="col-sm-4 col-lg-3 offset-lg-1 foto">
     <img id="emilia" src="<?php echo get_template_directory_uri()?>/img/zespol/3-kadr.png" alt="">
   </div>
   <div class="col-sm-8 col-lg-5 content">
     <h3><?php echo the_field('progremo_name3') ?></h3>
     <h6><?php echo the_field('progremo_spec3') ?></h6>
     <p><?php ssacf('progremo_desc3') ?></p>
   </div>
</div>
</div></section>


<section class="zespol-content inverse"><div class="container">
<div class="row">
   <div class="col-sm-4 col-lg-3 offset-lg-1 foto">
     <img src="<?php echo get_template_directory_uri()?>/img/zespol/4-kadr.png" alt="">
   </div>
   <div class="col-sm-8 col-lg-5 content">
     <h3><?php echo the_field('progremo_name4') ?></h3>
     <h6><?php echo the_field('progremo_spec4') ?></h6>
<p><?php ssacf('progremo_desc4') ?></p>
   </div>
</div>
</div></section>


<section class="zespol-content"><div class="container">
<div class="row">
   <div class="col-sm-4 col-lg-4 offset-lg-1 foto">
     <img id="karol" src="<?php echo get_template_directory_uri()?>/img/zespol/5-kadr.png" alt="">
   </div>
   <div class="col-sm-8 col-lg-5 content">
     <h3><?php echo the_field('progremo_name5') ?></h3>
     <h6><?php echo the_field('progremo_spec5') ?></h6>
<p><?php ssacf('progremo_desc5') ?></p>
  </div>
</div>
</div></section>


<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>


<div class="semisepar"></div>

  <?php get_footer(); ?>

  <?php // ========================================================================
    //  SAMPLE SECTION
    // =========================================================================  ?>


   <?php // ========================================================================
     //  END SAMPLE SECTION
     // =========================================================================  ?>
