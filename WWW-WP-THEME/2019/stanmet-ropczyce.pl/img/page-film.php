<?php /*Template Name: FILM*/?>

<?php get_header(); ?>

<div class="grid2">
  <div class="item bg-780 mobihide" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
  </div>
<div class="item item-text">
  <h1><?php echo the_title() ?></h1>
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
<a href="#portfolio"><div class="btn">Portfolio</div></a>
</div>
</div>




<?php if ( have_rows('film_list') ): ?>
<?php $counter = 1; ?>
    <?php while ( have_rows('film_list') ) : the_row(); ?>
      <div class="grid3-film grid3-slider <?php if ($counter == 2) echo 'inverse' ?>">
      <div class="item  item-text">
      <h3><?php the_sub_field('film_list_title') ?></h3>
        <p><?php the_sub_field('film_list_desc') ?></p>
      </div>

      <div class="item" style="background-image: url('<?php the_sub_field('film_list_thumb'); ?>')"></div>
      </div>
      <?php $counter++ ?>
    <?php endwhile; ?>

<?php endif; ?>

<?php get_template_part('content', 'add_desc') ?>
<?php get_footer(); ?>
