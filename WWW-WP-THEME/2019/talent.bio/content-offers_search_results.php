<section class="mt100">
  <!-- <h2>WYNIKI</h2> -->
  <div class="container"><div class="row">


    <?php

global $wp_query;
    if ( $wp_query->have_posts() ) : ?>


      <?php
      // Start the loop.
      while ( $wp_query->have_posts() ) : $wp_query->the_post();

      get_template_part('content', 'offers_box');

      endwhile;
else :
  get_template_part( 'content', 'none' );

   endif;
   //Display pagination
     include('include-pagination.php');
   wp_reset_postdata();
   ?>
</div></div>
</section>
