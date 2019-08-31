<?php
/*
Template Name: Kategoria BLOG
*/
?>
<?php session_start();?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>
<?php get_template_part( 'content', 'header' );?>
<?php get_template_part( 'content', 'main' );?>

<!-- LOOP NEWS -->


<section class="news-section">
<?php

  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $catid = get_field('id_cat_1');
  $custom_args = array(
      'post_type' => 'post',
      // 'posts_per_page' => 2,
      'paged' => $paged,
      'cat'=> $catid,
      'order' => 'DESC',
      'posts_per_page' => 6
    );

  $custom_query = new WP_Query( $custom_args ); ?>

  <?php if ( $custom_query->have_posts() ) : ?>

    <!-- the loop -->
    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

<?php        $_SESSION["nr"] = $nr;
       $nr++;
       get_template_part( 'content', 'news3' );
 ?>

    <?php endwhile; ?>
    <!-- end of the loop -->
    <!-- pagination -->
<div id="pagination">
    <div id="prev"><?php echo get_previous_posts_link( '<span></span>'); ?></div>
    <div id="num"><?php kriesi_pagination($custom_query->max_num_pages, 4);?></div>
    <div id="next"><?php echo get_next_posts_link( '<span></span>', $custom_query->max_num_pages); ?></div>
</div>
<!-- END pagination -->


  <?php wp_reset_postdata(); ?>
  <?php else:  ?>
  <?php endif; ?>
</section>
<!-- END NEWS SECTION -->


<?php get_footer(); ?>
