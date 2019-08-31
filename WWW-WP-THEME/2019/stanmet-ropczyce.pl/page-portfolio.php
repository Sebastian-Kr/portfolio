<?php /*Template Name: PORTFOLIO*/?>

<?php get_header(); ?>





<div class="grid2">
  <div class="item bg-780" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
  </div>
<div class="item item-text fade-in-element2 popup2_container">

<div class="popup2">
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
  <div  id="portfiliolink" class="btn"><?php echo __('PRZYKŁADOWE REALIZACJE'); ?></div>
</div>

</div>
</div>





<div id="portfilio"></div>

<?php get_template_part('content', 'gallery') ?>
<?php get_template_part('content', 'add_desc') ?>
<?php get_footer(); ?>
