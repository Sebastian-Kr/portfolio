<section id="primary">
<div class="container">
<div class="row">
  <?php

  global $wp_query;

  if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post();
   // Display single employer HTML box
     get_template_part('content', 'employer_box');

     endwhile;
     endif;
   //Display pagination
     include('include-pagination.php');
     wp_reset_postdata();
     ?>

  </div>
  </div>

</section>
