<?php /*Template Name: KONTAKT*/?>
<?php get_header(); ?>

<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section id="kontakt-form">
  <div class="kontakt_bg" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')"></div>
<div class="container">
<!-- <div class="row"><div class="fade-in-element2 col-md-12 mt50"><h1><?php echo the_title() ?></h1></div></div> -->
  <div class="row row-inverse">

    <div class="col-md-6">



    </div>


<div class="col-md-6 pb80 pt100 ">
  <div class="mt40 content item-text ">

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
<?php echo do_shortcode('[contact-form-7 id="336" title="Formularz 1"]') ?>




</div>


</div></div>
</section>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>

<?php get_footer(); ?>
