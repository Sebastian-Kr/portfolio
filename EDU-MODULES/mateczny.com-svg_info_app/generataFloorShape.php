<?php
  $prgrm_custom_args = array(
      'post_type' => 'floor',
      // 'cat'=> 9,
      'order' => 'ASC',
      'posts_per_page' => 99
    );
  $prgrm_custom_query = new WP_Query( $prgrm_custom_args );
  if ( $prgrm_custom_query->have_posts() ) : ?>
  <!-- the loop -->
  <?php while ( $prgrm_custom_query->have_posts() ) : $prgrm_custom_query->the_post();
$id = get_the_id();
$coords = get_field('floor_coords');
  ?>

  <polygon id="floorID_<?php echo $id;?>" data-floorid="<?php echo $id;?>" class="floor_shape" points="<?php echo $coords; ?>"></polygon>


<?php
endwhile;
endif;
wp_reset_query();
