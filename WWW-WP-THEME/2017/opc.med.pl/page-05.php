<?php
/*
Template Name: 05 Aktualności
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'header' );?>
<?php get_template_part( 'content', 'baner' );?>


<section class="bg1">
  <div class="container-fluid">
    
      
        
<?php 
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$args = array(
'cat'            => '3',
'posts_per_page' => 3,
'paged' => $paged
);



$query = new WP_Query( $args); 
$count = 0;
?>
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>



<section class="news-section">
<div class="row">
 <?php get_template_part( 'content', 'news' );?>
 </div> <!-- end row news -->
</section>

<?php 

 endwhile; 

 


/* end post pagination*/ 

wp_reset_postdata();



/* post pagination*/

 the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __( 'Back', 'textdomain' ),
    'next_text' => __( 'Onward', 'textdomain' ),
) ); 
 ?>




 <?php else : ?>

 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

 <?php endif; ?>

      </div>
    </div>
    </section>
  
  <?php get_footer(); ?>


