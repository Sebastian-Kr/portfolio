<div class="main_content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
  the_content();
  endwhile; else: ?>
  <?php endif;

  wp_reset_postdata()
  ?>
</div>