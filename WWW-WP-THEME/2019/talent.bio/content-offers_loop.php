<section class="mt100">
  <div class="container"><div class="row">


    <?php

// if (isset($_GET['s'])) {
//   $search_value = $_GET['s'];
// } else { $search_value = '';}

    $args = array(
      'post_type' => 'oferta',
      'forms'=> $_SESSION['offers_filter']['forms'],
      'areas'=> $_SESSION['offers_filter']['areas'],
      'position'=> $_SESSION['offers_filter']['position'],
      'place'=> $_SESSION['offers_filter']['place'],
      'order'=> 'DESC',
      'paged' =>  get_query_var( 'page' ),
      'posts_per_page' => 8,
      // 's' => $search_value
    );
    $wp_query = new WP_Query( $args);

    if ( $wp_query->have_posts() ):
      while ( $wp_query->have_posts() ) :
        $wp_query->the_post();
      get_template_part('content', 'offers_box');
     endwhile;
?>


<?php
 endif;
 //Display pagination
   include('include-pagination.php');
 wp_reset_postdata();
 ?>

</div></div>



</section>
