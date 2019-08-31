
<?php get_header(); ?>

<?php get_header(); ?>

<div class="grid2 mb50">
  <div class="item bg-780 mobihide" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
  </div>
<div class="item item-text fade-in-element2">
  <h1><?php if (get_field('subtitle')) { echo the_field('subtitle');} else {echo the_title();} ?></h1>
</div>
</div>

<?php get_template_part('special_modules/prgrm', 'main');?>

<?php get_footer(); ?>
