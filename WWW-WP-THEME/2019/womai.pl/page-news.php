<?php /*Template Name: News*/?>
<?php get_header(); ?>
<?php get_template_part('template_parts/prgrm', 'header');?>



<section class="slider-blog-items">

      <?php
      $args = array(
        'post_type = post',
        'post_per_page = 20'
      );
      $query = new WP_Query( $args);
      ?>
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() )
          : $query->the_post(); ?>

    <?php echo get_template_part('content', 'blogTile') ?>

    <!-- end row -->

      <?php endwhile; else : ?>
      <p><?php _e( 'Niestety nie ma żadnych postów do wyświetlenia' ); ?></p>
      <?php endif; ?>

</section>


<?php get_footer(); ?>
