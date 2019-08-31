<?php
/*
Template Name: Aktualności
*/
?>

<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>

<div class="container">
<h1 class="square half-hr"><?php echo get_the_title();?></h1>
</div>

<!-- MAIN CONTENT2  -->
<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();


if (get_the_content()){
echo '<div class="main-content container visual-editor">';
          the_content();
echo '</div>';
} // end is content statment


  } // end while
} // end if
?>
<!-- END MAIN CONTENT -->


<!-- LOOP NEWS -->


<section class="news-section">


   <div class="container">

       <?php
       $args = array('cat'=> '3');
       $query = new WP_Query( $args);
       ?>
       <?php if ( $query->have_posts() ) : while ( $query->have_posts() )
           : $query->the_post();

           get_template_part( 'content', 'news' );?>
     <?php endwhile; ?>



<?php else: ?>
       <p><?php _e( 'Niestety nie ma żadnych postów do wyświetlenia' ); ?></p>
       <?php endif; ?>

   </div>



</section>



<?php get_footer(); ?>
