<?php /*Template Name: Kontakt*/?>

<?php get_header(); ?>
<?php get_template_part('special_modules/prgrm', 'header');?>
<?php get_template_part('special_modules/prgrm', 'main');?>
<?php get_template_part( 'special_section_gen/content', 'generator' );?>



<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section id="kontakt-form">
<div class="container"><div class="row">
<div class="col-lg-6 ">

<?php echo do_shortcode('[contact-form-7 id="307" title="Formularz 1"]') ?>


</div>
<div class="col-lg-6">
   <div id="map"></div>
</div>

</div></div>
</section>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>

<?php get_footer(); ?>
