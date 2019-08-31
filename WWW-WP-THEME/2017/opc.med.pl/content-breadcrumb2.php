<div class="header2">
	
	<h1><?php the_title(); ?></h1>
</div>



          <!-- BREADCRUMBS -->
<section style=""><div class="container-fluid">
<div id="breadcrumb"> <input type="button" value="Wstecz" onClick="history.back();" />

<?php
$trail = new Breadcrumb();
$output=$trail->add( get_the_title(), get_permalink());

echo $output;
?>

</div></section>
<!-- END BREADCRUMBS -->

<?php if (get_field('header3')):?>

  <div class="container"><div class="header4" style=" background-image: url('<?php the_field('header3'); ?>')"></div></div>
  <?php endif; ?>


   

  
<!-- MAIN CONTENT  -->
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		
		if (get_the_content()){
echo '<div class="container"><div class="main-content">';

if ( is_page_template( 'page-04.php' ) ) {
	echo '<div id="gallery-box">';
          the_content();
          echo '</div>';
} else {
          the_content();
}


 
      echo "</div></div>";
} // end is content statment		//
	} // end while
} // end if
?>


<!-- END MAIN CONTENT -->
