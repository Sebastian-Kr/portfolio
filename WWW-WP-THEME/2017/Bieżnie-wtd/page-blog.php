<?php 
/*
Template Name: Blog template
*/
?>


<?php get_header(); ?>

<h1><?php the_title();?></h1>

<div class="container"><div class="row"><div class="col-xs-12">
	


<!--------------------------------------------------------------
THE CATEGORY LOOP
---------------------------------------------------------------->
	

     
<!--      //Pętla wklejka z kategorią wpisów -->

  
<!-- // The Query -->
<?php
$the_query = new WP_Query( $args );
$query = new WP_Query( array('order' => ASC) );

// The Loop
if ( $query->have_posts() ) {

	while ( $query->have_posts() ) 
    {
		$query->the_post();
  
        
 ?>
        
	 <!--  POJEDYNCZY WPIS -->
	 <div class="row blog-article vertical-center">
	<div class="col-md-8" id="post-<?php the_ID(); ?>">
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<?php the_excerpt();?>
		<a href="<?php the_permalink(); ?>"><span class="btn btn-info">Przeczytaj cały artykuł >></span></a>
	</div>

	<div class="col-md4">

	<?php                              
                            
 add_image_size( 'blog-thumbnail', 250, 250 ); 
                            if ( has_post_thumbnail()  ) {                                
                                the_post_thumbnail('blog-thumbnail'); 
                               
                            }                              
	?>
	

</div></div>
  <!-- / POJEDYNCZY WPIS -->   
        
<?php 

} 
 
}

wp_reset_postdata();

?>
	
	
<!--------------------------------------------------------------
END THE CATEGORY LOOP
---------------------------------------------------------------->
	


</div></div></div>

<?php get_template_part('page', 'recomend');?>
<?php get_footer(); ?>