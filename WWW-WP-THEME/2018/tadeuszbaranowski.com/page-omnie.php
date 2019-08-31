<?php /*Template Name: O mnie*/?>

<?php get_header(); ?>





<div class="grid2 omnie">
  <div class="item bg-780 " style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
<img class="img_omnie" src="<?php echo get_template_directory_uri() ?>/img/o mnie_mobilna.JPG" alt="">
  </div>
<div class="mt30 mb50 item item-text fade-in-element2">

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
