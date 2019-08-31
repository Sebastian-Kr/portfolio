
<?php get_header(); ?>

<?php get_template_part(content, menu);?>
<?php get_template_part(content, header);?>


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


<?php if (get_field('add_section1')): ?> 
        <?php the_field('section1'); ?>
<?php endif; ?>


<?php if (get_field('add_section2')): ?> 
        <?php the_field('section2'); ?>
<?php endif; ?>


<?php if (get_field('add_section3')): ?> 
        <?php the_field('section3'); ?>
<?php endif; ?>


<?php if (get_field('add_section4')): ?> 
        <?php the_field('section4'); ?>
<?php endif; ?>


<?php if (get_field('add_section5')): ?> 
        <?php the_field('section5'); ?>
<?php endif; ?>





<?php get_footer(); ?>
