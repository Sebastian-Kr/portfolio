<?php
/*
Template Name: BLOG
*/
?>

<?php get_header(); ?>
<?php get_template_part(content, header);?>
<!-- MAIN CONTENT  -->
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

<!-- MAIN CONTENT END  -->


<section id="news-section" class="pt0">

  <?php

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $custom_args = array(
        'post_type' => 'post',
        // 'paged' => $paged,
        'cat'=> 9,
        'order' => 'ASC',
        'posts_per_page' => 6
      );

    $custom_query = new WP_Query( $custom_args );
    $counter = 1;
    ?>
    <?php if ( $custom_query->have_posts() ) : ?>

      <!-- the loop -->
      <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>


        <div class="<?php if (($counter%2) == 0) {echo 'bg-special'; } ?>">
          <div class="container"><div class="row  "><div class="col-sm-12 pt50 pb50">


          <h3><?php echo get_the_title();?></h3>

        <div class="excerpt mt50 mb50">
          <?php
          if (get_field('news_excerpt')):
          the_field('news_excerpt');
          endif;
          $counter++;
          ?>
        </div>
              <a href="<?php the_permalink(); ?>"><div class="btn btn-info">CZYTAJ DALEJ</div></a>

        </div></div></div></div></div>


      <?php endwhile; ?>
      <!-- end of the loop -->
      <!-- pagination -->
  <div id="pagination_box" class="mt50">
      <div id="prev"><?php echo get_previous_posts_link( '<span><</span>'); ?></div>
      <div id="num"><?php kriesi_pagination($custom_query->max_num_pages, 6);?></div>
      <div id="next"><?php echo get_next_posts_link( '<span>></span>', $custom_query->max_num_pages); ?></div>
  </div>
  <!-- END pagination -->


    <?php wp_reset_postdata(); ?>
    <?php else:  ?>
    <?php endif; ?>




</section>




<?php get_footer(); ?>
