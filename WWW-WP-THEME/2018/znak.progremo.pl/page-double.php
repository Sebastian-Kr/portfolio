<?php /* Template Name: Two column content */?>
<?php get_header(); ?>

<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>
<section id="img_header"><div class="container"><div class="row">
  <div class=" std-borde  mb10 col-lg-12">

<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
<p class="std-border2"><?php echo the_field('subtitle') ?></p>
</div>

</div><div class="std-border mb40 "></div></div></section>

<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>


<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section class="mb100">
<div class="container"><div class="row">
<div id="double_column1" class="col-md-8 visual-buildere mpt20 mt20 mmb30">

<?php if (is_page(18)): ?>
  <div id="map" ></div>
<?php endif; ?>

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

<div class="d-block d-md-none w-100 std-border mt50 mb30 mmb20"></div>
<div id="double_column2" class="  visual-buildere col-md-4 mt20 <?php if (is_page(6)) {echo 'visual-buildere2';} ?> ">
<?php echo the_field('progremo_content2') ?>

<?php if (is_page(18)): ?>
<div class="social">
  <a href="www.wydawnictwoznak.pl"><u>www.wydawnictwoznak.pl</u></a>
  <a href="https://www.facebook.com/WydawnictwoZnak/"><img src="<?php echo get_template_directory_uri()?>/img/facebook.svg" alt="">/wydawnictwoznak</a>
  <a href="https://www.instagram.com/wydawnictwoznak.pl/"><img src="<?php echo get_template_directory_uri()?>/img/inst.svg" alt="">/znakrights</a>
</div>



<?php endif; ?>



</div></div></div>
</section>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>
  <?php get_footer(); ?>
