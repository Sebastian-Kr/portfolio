<?php /*Template Name: Kontakt*/?>

<?php get_header(); ?>
<?php get_template_part('special_modules/prgrm', 'header');?>

<div class="main-bg-container superline contact_page">

<section class="contact_section mt0 pt90" >
  <div class="container"><div class="row">

<div class="sm-center col-sm-5 col-md-3"><?php get_template_part('special_modules/prgrm', 'main');?></div>
<div class="sm-center col-sm-5 col-md-3"><?php the_field('add_content')?></div>

  </div></div>
</section>



<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section id="kontakt-form" class="mt0 mb0 pb90">
<div class="container"><div class="row">
<div class="col-lg-6  mt0">

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
</div>
<?php get_footer(); ?>
