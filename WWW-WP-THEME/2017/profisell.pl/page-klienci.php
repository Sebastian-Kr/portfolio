<?php /* Template Name: KLIENCI */?>
<?php get_header(); ?>
<?php get_template_part('content', 'header');?>


<?php // ========================================================================
//  SECTION - opis główny
// =========================================================================  ?>
<section id="customer-content-overflow">
<div class="container"><div class="row">

<div class="col-lg-6"><?php if ( class_exists( 'iworks_orphan' ) ){
   $orphan = new iworks_orphan();
   echo $orphan->replace( get_field('progremo_maindesc'));
  }
  else {
   echo the_field('progremo_maindesc');
  }?></div>
<?php if (is_page(75)): ?>
  <div id="person-m" classs="col-md-6"><img src="<?php echo get_template_directory_uri()?>/img/indywidualni/profisell-gosc-01.png" alt=""></div>
  <!-- <div id="person-m" class="col-md-6" style="background-image: url('<?php echo get_template_directory_uri()?>/img/indywidualni/profisell-gosc-01.png')"></div> -->

<?php endif; ?>

<?php if (is_page(78)): ?>
  <div id="person-f" class="col-md-6"><img src="<?php echo get_template_directory_uri()?>/img/firmy/profisell-pani-01.png" alt=""></div>
<?php endif; ?>

</div></div>
</section>
<?php // ========================================================================
//  END SECTION -opis główny
// =========================================================================  ?>


<?php // ========================================================================
//  SECTION - wyróżniki
// =========================================================================  ?>
<section id="special" class="bg-standard">
<div class="container">
  <div class="row"><div class="col-lg-12"><h3 class="mb50"><?php echo the_field('progremo_wyr_title') ?></h3></div></div>
  <div class="row"><div class="col-xl-5 col-md-6">

<?php if (get_field('progremo_desc1')): ?>
  <div class="icon-box">
    <div class="icon"><img src="<?php echo get_template_directory_uri()?>/img/indywidualni/profisell-icon-random.svg" alt=""></div>
    <p><?php ssacf('progremo_desc1') ?></p>
  </div>
<?php endif; ?>
</div>
<div class="col-md-6 col-xl-5 offset-xl-2">




<?php if (get_field('progremo_desc2')): ?>
  <div class="icon-box">
    <div class="icon"><img src="<?php echo get_template_directory_uri()?>/img/indywidualni/profisell-icon-random.svg" alt=""></div>
    <p><?php ssacf('progremo_desc2') ?></p>
  </div>
<?php endif; ?>
</div></div>
  <div class="row"><div class="col-xl-5 col-md-6">

<?php if (get_field('progremo_desc3')): ?>
  <div class="icon-box">
    <div class="icon"><img src="<?php echo get_template_directory_uri()?>/img/indywidualni/profisell-icon-random.svg" alt=""></div>
    <p><?php ssacf('progremo_desc3') ?></p>
  </div>
<?php endif; ?>

</div>
<div class="col-md-6 col-xl-5 offset-xl-2">



<?php if (get_field('progremo_desc4')): ?>
  <div class="icon-box">
    <div class="icon"><img src="<?php echo get_template_directory_uri()?>/img/indywidualni/profisell-icon-random.svg" alt=""></div>
    <p><?php ssacf('progremo_desc4') ?></p>
  </div>
<?php endif; ?>
</div></div>
  <div class="row"><div class="col-xl-5 col-md-6">

    <?php if (get_field('progremo_desc5')): ?>
      <div class="icon-box">
        <div class="icon"><img src="<?php echo get_template_directory_uri()?>/img/indywidualni/profisell-icon-random.svg" alt=""></div>
        <p><?php ssacf('progremo_desc5') ?></p>
      </div>
    <?php endif; ?>

  </div>
  <div class="col-md-6 col-xl-5 offset-xl-2">



    <?php if (get_field('progremo_desc6')): ?>
      <div class="icon-box">
        <div class="icon"><img src="<?php echo get_template_directory_uri()?>/img/indywidualni/profisell-icon-random.svg" alt=""></div>
        <p><?php ssacf('progremo_desc5') ?></p>
      </div>
    <?php endif; ?>
  </div></div>
  <div class="row"><div class="col-xl-5 col-md-6">

    <?php if (get_field('progremo_desc7')): ?>
      <div class="icon-box">
        <div class="icon"><img src="<?php echo get_template_directory_uri()?>/img/indywidualni/profisell-icon-random.svg" alt=""></div>
        <p><?php ssacf('progremo_desc6') ?></p>
      </div>
    <?php endif; ?>
  </div>
  <div class="col-md-6 col-xl-5 offset-xl-2">


    <?php if (get_field('progremo_desc8')): ?>
      <div class="icon-box">
        <div class="icon"><img src="<?php echo get_template_directory_uri()?>/img/indywidualni/profisell-icon-random.svg" alt=""></div>
        <p><?php ssacf('progremo_desc8') ?></p>
      </div>
    <?php endif; ?>



  </div></div>
</div>
</section>
<?php // ========================================================================
//  END SECTION -wyróżniki
// =========================================================================  ?>




<?php // ========================================================================
//  SECTION - kontakt
// =========================================================================  ?>
<section id="kontakt2">
<div class="container">
<div class="row title"><div class="col-lg-12"><h3><?php echo the_field('progremo_knt_title') ?></h3></div></div>
<div class="row content">
 <div class="col-md-4 col-lg-4"><?php echo the_field('progremo_knt_k1') ?></div>
 <div class="col-md-5 col-lg-4"><?php echo the_field('progremo_knt_k2') ?></div>
 <div class="col-md-3 col-lg-3 vhc"><a href="<?php echo home_url() ?>/#kontakt"><button type="button" class="btn btn-secondary">Skontaktuj się</button></a></div>

</div></div>
</section>
<?php // ========================================================================
//  END SECTION -kontakt
// =========================================================================  ?>


<?php if (get_field('is_ssk')): ?>
  <?php // ========================================================================
  //  SECTION - karta stałego klienta
  // =========================================================================  ?>
  <section id="ssk">
  <div class="container-fluid"><div class="row">

  <div class="col-md-5 col-lg-5"><img src="<?php echo get_template_directory_uri()?>/img/indywidualni/profisell-karta.png" alt=""></div>
  <div class="col-md-6 col-lg-6 vc"><div><?php echo the_field('progremo_ssk') ?></div></div>
  </div></div>
  </section>
  <?php // ========================================================================
  //  END SECTION -karta stałego klienta
  // =========================================================================  ?>
<?php endif; ?>



  <?php get_footer(); ?>
