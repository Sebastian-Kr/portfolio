<div class="mt70 container prelegent_container"><div class="row"><div class="col-md-12">

  <?php
  $args = array('cat'=> '3', 'posts_per_page' => 6, 'order' => 'ASC');
  $query = new WP_Query( $args);
  ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() )
      : $query->the_post(); ?>

  <div class="prelegent">
  <a href="<?php the_permalink(); ?>">
    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
    <h5><?php echo get_the_title();?></h5>
    <h6><?php the_field('subtitle')?></h6>
  </a>
  </div>

  <?php endwhile; else : ?>
  <?php endif;
  wp_reset_query();?>


</div></div>

<div class="row"><div class="col-md-12">
  <a class="link_border" href="<?php echo get_permalink(171) ?>"><?php echo __('[:pl]WCZYTAJ WIĘCEJ[:en]READ MORE'); ?></a>
</div></div>

</div>
