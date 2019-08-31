
<!-- MAIN CONTENT  -->
<?php 
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post(); 
if (get_the_content()){
echo '<div class="main-content container">';
          the_content();
echo '</div>';
} // end is content statment
  } // end while
} // end if
?>
<!-- END MAIN CONTENT -->
<div class="semisepar"></div>