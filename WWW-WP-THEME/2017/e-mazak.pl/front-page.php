<?php get_header(); ?>

<?php get_template_part( 'content', 'men2' );?>
<?php get_template_part( 'content', 'slider' );?>

<?php get_template_part('special_section/content', 'generator') ?>




<!--=======================================
PARTNERS
==========================================-->
<section id="partners">
  <div class="container">
<div class="slide-items1 mt">
<div><a href="<?php the_field('pcf-sp-l1'); ?>" rel="index, follow" target="_blank"><img src="<?php the_field('pcf-sp-f1'); ?>"></a></div>
<div><a href="<?php the_field('pcf-sp-l2'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f2'); ?>"></a></div>
<div><a href="<?php the_field('pcf-sp-l3'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f3'); ?>"></a></div>
<div><a href="<?php the_field('pcf-sp-l4'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f4'); ?>"></a></div>
<div><a href="<?php the_field('pcf-sp-l5'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f5'); ?>"></a></div>
<div><a href="<?php the_field('pcf-sp-l6'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f6'); ?>"></a></div>
<div><a href="<?php the_field('pcf-sp-l7'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f7'); ?>"></a></div>
<div><a href="<?php the_field('pcf-sp-l8'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f8'); ?>"></a></div>
<div><a href="<?php the_field('pcf-sp-l9'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f9'); ?>"></a></div>
</div>

</div>



</section>


<?php get_footer() ?>
