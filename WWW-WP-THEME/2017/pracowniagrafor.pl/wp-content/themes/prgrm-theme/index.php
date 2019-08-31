
<?php

?>
<?php get_header(); ?>

<?php get_template_part( 'content', 'header' );?>

<?php if (is_page(8)) {get_template_part('content', 'kursy_loop1');} ?>

<section>

  <div class="container"><div class="row"><div class="col-md-12">
  <?php get_template_part( 'content', 'main' );?>
  </div></div></div>


<?php if (is_page(694)): ?>
<div class="container"><div class="row"><div class="col-12-sm"> <?php echo do_shortcode('[htmlSitemap]') ?></div></div></div>
<?php endif; ?>



<?php if (get_field('progremo_text_nm1')): ?>
  <div class="container mt40"><div class="row"><div class="col-md-12">
  <?php ssacf('progremo_text_nm1') ?>
  </div></div></div>
<?php endif; ?>

</section>

<?php get_footer(); ?>
