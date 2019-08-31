<?php /*Template Name: FILM*/?>

<?php get_header(); ?>

<div class="grid2">
  <div class="item bg-780 mobihide" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
  </div>
<div class="item item-text fade-in-element2">
  <h1><?php if (get_field('subtitle')) { echo the_field('subtitle');} else {echo the_title();} ?></h1>
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
<div id="portfiliolink" class="btn">Portfolio</div>
</div>
</div>




<?php if ( have_rows('film_list') ): ?>
  <div id="portfilio"></div>
  <div id="film_list">
<?php $counter = 1; ?>
    <?php while ( have_rows('film_list') ) : the_row(); ?>


      <div class="film-grid <?php if ($counter == 2) echo 'inverse' ?>">


      <div class="item contentbox">
      <div class="content animate">
        <h3><?php the_sub_field('film_list_title') ?></h3>
          <p><?php the_sub_field('film_list_desc') ?></p>
          </div>
      </div>
      <div class="item mediabox">
      <div class="media " data-filmURL="<?php the_sub_field('film_list_url') ?>" style="background-image: url('<?php the_sub_field('film_list_thumb'); ?>')">
  <div class="play fadein"><div class="playin"></div></div>
      </div>

      </div>

      </div>

      <?php $counter++ ?>
    <?php endwhile; ?>
</div>
<div class="clearfix"></div>
<?php endif; ?>



<?php get_template_part('content', 'add_desc') ?>
<?php get_footer(); ?>
