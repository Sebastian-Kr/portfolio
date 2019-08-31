<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>
<?php get_template_part('template_parts/prgrm', 'header');?>


<?php  echo get_template_part( 'content', 'blogSubmenu' ) ?>

<section class="slider-blog-items">

      <?php if ( have_posts() ) : while ( have_posts() )
          : the_post(); ?>
  <?php echo get_template_part('content', 'blogTile') ?>
    <!-- end row -->

      <?php endwhile; else : ?>
      <p class="post_not_found"><?php _e( 'Post not found' ); ?></p>
      <?php endif; ?>

</section>


<?php get_footer(); ?>
