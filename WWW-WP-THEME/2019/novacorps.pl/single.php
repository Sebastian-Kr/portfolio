
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>





<section id="news-body">

<div class="container">
<div class="separ"></div>
<h1><?php echo get_the_title();?></h1>
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


<!-- SLIDER -->
</section>
<h2>ZOBACZ TAKŻE:</h2>
<section id="seealso" >
<div class="container"><div class="row" id="portfolio">
<hr class="special">
<div class="alsopost">
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
        echo '<div class="col-news item">';
        echo '<a href="' . get_permalink($recent["ID"]) . '">';

        echo '<div class="item-img">';
        if ( has_post_thumbnail($recent["ID"]) ) {
           echo  get_the_post_thumbnail($recent["ID"],'full');

          }
          echo '</div>';

        echo '<div class="vc-cont"><h4 class="vc2">' .   $recent["post_title"].'</h4>';
               echo '</a></div></div>';

      }

}

	}
	wp_reset_query();
?>

</div>
<div class="clearfix"></div>
<hr class="special">
</div></div>
</section>



<?php get_footer(); ?>
