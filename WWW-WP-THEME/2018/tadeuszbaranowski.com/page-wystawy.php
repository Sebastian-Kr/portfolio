<?php /*Template Name: Wystawy*/?>

<?php get_header(); ?>





<div class="grid2 wystawy">
  <div class="item bg-780 " style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
<img class="img_wystawy" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
  </div>
<div class="mt10 mb30 item item-text fade-in-element2">

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
</div>

<?php get_footer(); ?>
