
  <!-- MAIN CONTENT  -->
<div id="main_content">
  <?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
  if (get_the_content()){
            the_content();
  } // end is content statment
    } // end while
  } // end if
  ?>
</div>

  <!-- MAIN CONTENT END  -->
