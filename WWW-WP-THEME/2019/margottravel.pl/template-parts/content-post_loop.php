

<?php
$args = array(
  'post_type' => 'destination',
  'order'=> 'DESC',
  'paged' =>  get_query_var( 'paged' ),
  'posts_per_page' => 99
);
$custom_query = new WP_Query( $args);

if ( $custom_query->have_posts() ):
  while ( $custom_query->have_posts() ) :
    $custom_query->the_post();?>


<a class="inspirations_item" href="<?php echo get_permalink() ?>">
  <div class="inspirations_foto">
    <div class="inspirations_foto_inbox" style="background-image: url('<?php the_field('destiny_thumbnail')?>')"></div>
  </div>
  <div class="inspirations_header">

  <h3 class=""><?php the_title(); ?></h3>
  <h4><?php the_field('sub_sub_title')?></h4>
  </div>
</a>


   <?php endwhile;
   endif;
   wp_reset_postdata();
?>
