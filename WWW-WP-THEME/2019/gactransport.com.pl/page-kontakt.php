<?php /*Template Name: Kontakt*/?>

<?php get_header(); ?>
<?php get_template_part('template_parts/prgrm', 'header');?>



<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>


<section id="kontakt-sec" class="menuSection contact">

<div class="container  ">

  <div class="row title-border-bottom">
    <div class="col-md-12 left-text-mobile">
      <h2 class="">EURO-BUS Usługi Transportowe Józef Gac</h2>
    </div>
    <?php get_template_part('template_parts/prgrm', 'main');?>
  </div>

  <div class="row">
    <div class="col-md-6">
<?php the_field('section1_content')?>


    </div>

    <div class="borderTop contactForm col-lg-6">
      <h3 class="line mmt20">Formularz kontaktowy</h3>
      <?php echo do_shortcode( '[contact-form-7 id="307" title="Formularz 1"]' ) ?>
    </div>


  </div>



</div>
</section>


<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>

<?php get_footer(); ?>
