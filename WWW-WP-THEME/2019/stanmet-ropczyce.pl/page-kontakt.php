<?php /*Template Name: KONTAKT*/?>
<?php get_header(); ?>

<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section id="kontakt-form">
<div class="container">
<div class="row">

  <div class="fade-in-element2 col-lg-6 mt50">
  <h1 class="mb0"><?php echo the_title() ?></h1>

  <div class="content ">

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

<div class="col-lg-6 pt60">
  <!-- <?php echo do_shortcode('[contact-form-7 id="336" title="Formularz 1"]') ?> -->
  <?php echo do_shortcode('[contact-form-7 id="635" title="Formularz 1"]') ?>
</div>

</div>

</div>

</section>
<div id="map_container"></div>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>

<?php get_footer(); ?>
