<section id="count">
<div class="container"><div class="row">
  <!-- MAIN CONTENT  -->
  <?php
  if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
  if (get_the_content()){
        the_field('counter1');
  } // end is content statment
  } // end while
  } // end if
    wp_reset_postdata();
  ?>
</div></div>
  <!-- END MAIN CONTENT -->


</section>
