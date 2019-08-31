<section >
<div class="container">
<div class="row">

<?php
$args = array(
  'post_type' => 'pracodawca',
  'order'=> 'DESC',
  'paged' =>  get_query_var( 'paged' ),
  'posts_per_page' => 9
);
$wp_query = new WP_Query( $args);

if ( $wp_query->have_posts() ):
  while ( $wp_query->have_posts() ) :
    $wp_query->the_post();
    get_template_part('content', 'employer_box');
         endwhile;
         endif;
       //Display pagination
         include('include-pagination.php');
         wp_reset_postdata();
     ?>


</div></div></section>
