
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>


<section id="header" style='background-image: url("<?php the_post_thumbnail_url();?>")'>


</section>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		//
		// Post Content here
		//
	} // end while
} // end if
?>



<section id="news-body">

<div class="container">
<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
<hr class="special">
<h1 class="square"><?php echo get_the_title();?></h1>
<div class="data"><?php the_time( 'd/m/Y' ); ?></data></div>
</div>
<!-- MAIN CONTENT  -->
<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();


if (get_the_content()){
echo '<div class=" container">';
          the_content();
echo '</div>';
} // end is content statment


  } // end while
} // end if
?>
<!-- END MAIN CONTENT -->
<div class="semisepar"></div>

</section>

<section id="seealso">
<div class="container"><div class="row">
<hr class="special">

<?php
	$args = array(
    'numberposts' => '3',
    'orderby' => 'post_date',
  	'order' => 'DESC'
  );
    $prgrm_count = 0;
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){

    $prgrm_post = get_post();
    $prgrm_idpost = $post->ID;
if ($prgrm_count < 2) {

      if ($recent["ID"] <> $prgrm_idpost)
      {
  $prgrm_count++;
        echo '<div class="col-md-6 item-news">';
        echo '<a href="' . get_permalink($recent["ID"]) . '">';

        echo '<div class="col-sm-6 img">';
        if ( has_post_thumbnail($recent["ID"]) ) {
           echo  get_the_post_thumbnail($recent["ID"],'full');

          }
          echo '</div>';

        echo '<div class="head col-sm-6"><h5>' .   $recent["post_title"].'</h5>';
        echo '<span>'.get_the_date( 'd/m/Y', $recent["ID"] ).'</span></div>';


           echo '</a></div>';

      }

}

	}
	wp_reset_query();
?>
<div class="clearfix"></div>
<hr class="special">
</div></div>
</section>



<?php get_footer(); ?>
