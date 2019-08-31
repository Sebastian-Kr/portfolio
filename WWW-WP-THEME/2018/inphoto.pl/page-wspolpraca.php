<?php /*Template Name: WSPÓŁPRACA*/?>

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
    <div class="arrow-cont wspolpraca" id="portfiliolink"><div id="arrow-down" class="arrow"></div></div>
</div>
</div>

<div id="portfilio"></div>
<div class="grid4-container">
<?php if ( have_rows('steps_list') ): ?>
    <?php while ( have_rows('steps_list') ) : the_row(); ?>


      <div class="grid4 " >
        <div class="icon animate"><div class="img"></div></div>
        <div class="text animate"><?php the_sub_field('steps_list_item_content') ?></div>
        <div class="foto animate" style="background-image:url('<?php the_sub_field('stetps_list_item_img') ?>')"></div>
<!-- <div class="clearfix"></div> -->
      </div>



    <?php endwhile; ?>
<?php endif; ?>
</div>



<?php get_template_part('content', 'add_desc') ?>
<?php get_footer(); ?>
