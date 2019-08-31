
<?php
/*
 * Template Name: Pojedynczy kurs
 * Template Post Type: post
 */
?>

<?php get_header(); ?>
<?php get_template_part( 'content', 'header' );?>
<?php get_template_part( 'content', 'men' );?>


<section id="single_kurs" class="pb0">
<div class="container "><div class="row ml0 mr0"><div class="col-lg-12 row-img row-img2">

<div class="foto" style="background-image: url('<?php echo the_field('progremo_img_k') ?>')"></div>
<div class="desc bg-col1">
  <h2><?php echo the_title() ?></h2>
  <h4><?php echo the_field('progremo_subtitle_k') ?></h4>
  <p><?php echo the_field('progremo_date_k') ?></p>
</div>
<div class="buttons2">
  <a href="<?php echo get_permalink(23) ?>"><div class="btn btn-info">ZAPISY</div></a>

</div>

</div></div></div>
</section>


<section class="mt50 pt0" id="news-body">
  <div class="container"><div class="row"><div class="col-md-12">
  <?php get_template_part( 'content', 'main' );?>
  </div></div></div>
</section>



<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section class="mt0 pt0" id="">
<div class="container"><div class="row">

<div class="col-md-12">
  <a href="<?php echo get_permalink(20) ?>"><div class="btn btn-dark">CENY I KARNETY</div></a>
  <a href="<?php echo get_permalink(23) ?>"><div class="btn btn-info">ZAPISZ SIĘ</div></a>
</div>
</div></div>
</section>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>



<?php get_template_part('content', 'tilekurs2') ?>






<?php get_footer(); ?>
