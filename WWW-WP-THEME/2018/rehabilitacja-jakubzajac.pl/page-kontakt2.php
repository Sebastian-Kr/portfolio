<?php /*Template Name: Kontakt2*/?>

<?php get_header(); ?>
<?php get_template_part('special_modules/prgrm', 'header');?>
<?php get_template_part( 'special_section_gen/content', 'generator' );?>



<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section id="kontakt-form">
<div class="container mt70"><div class="row">
<div class="col-lg-6 ">

  <?php get_template_part('special_modules/prgrm', 'main');?>


</div>
<div class="col-lg-6">
  <?php echo do_shortcode('[contact-form-7 id="307" title="Formularz 1"]') ?>
</div>

</div></div>
</section>
<div id="map" class="mt70 mb0"></div>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>

<?php get_footer(); ?>
