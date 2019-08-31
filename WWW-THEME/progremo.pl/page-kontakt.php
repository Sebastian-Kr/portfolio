<?php 
/*
T
*/

?>
<?php get_header(); ?>

<?php get_template_part(content, menu);?>
<?php get_template_part(content, header);?>
<?php get_template_part(content, acfbuilder);?>

  <section>
<div class="semisepar"></div>
<div class="container"><div class="row">
<div class="col-lg-3">

<!-- MAIN CONTENT  -->
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
<!-- END MAIN CONTENT -->
	<div class="semisepar"></div> 
</div>
<div class="col-lg-9">
<?php echo do_shortcode('[contact-form-7 id="69" html_id="contact-form-1234" title="Formularz 1"]'); ?>
</div>
</div></div>
<div class="semisepar"></div>
</section>

<div id="map-container">
<img id="pl-map" src="<?php echo get_template_directory_uri(); ?>/img/minimap.png" alt="">
<div id="map" style="height:600px"></div>
</div>

<?php get_footer(); ?>
