<?php /* Template Name: Kontakt */?>
<?php get_header(); ?>
<?php get_template_part(content, header);?>


<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section class="mb0 pb0" id="kontakt-info">
<div class="container"><div class="row">
<div class="col-md-12"><h2><?php echo the_field('progremo_name') ?></h2></div>
   <div class="col-lg-3"><?php echo the_field('progremo_adres') ?></div>
   <div class="col-lg-3"><?php echo the_field('progremo_contact') ?></div>
   <div class="col-lg-6"><?php echo the_field('progremo_arriv') ?></div>
</div></div>
</section>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>

<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section id="kontakt-form">
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
  <?php get_footer(); ?>
