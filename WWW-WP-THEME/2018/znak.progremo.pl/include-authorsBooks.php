<div class="row">

    <?
    $args = array(
      'post_type' => 'books',
      'order'=> 'DESC',
      // 'paged' =>  get_query_var( 'page' ),
    );
    $query = new WP_Query( $args);

    if ( $query->have_posts() ):
      while ( $query->have_posts() ) :
        $query->the_post();?>

       <?php if ($autorID == get_field('this_book_author_id')): ?>
       <div class="col-lg-2 col-md-3 col-sm-6">
       <div class="slide_book book_box">
        <a href="<?php echo get_permalink() ?>">
            <?php the_post_thumbnail(); ?>
          <div class="std-border2"></div>
          <h3><?php echo the_field('book_short_polish_title') ?></h3>
          <h3><?php echo the_field('book_short_english_title') ?></h3>
       </a></div>
       </div>
       <?php endif; ?>

     <?php endwhile; ?>
   <?php endif;
   wp_reset_postdata();?>

</div>
