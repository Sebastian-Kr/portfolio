<?php
/*
Template Name: Cennik
*/

?>
<?php get_header(); ?>

<?php get_template_part(content, men2);?>
<?php get_template_part(content, header);?>


<div class="container">
  <div class="row">
<h2>FORMULARZ ZAPYTANIA</h2>
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
</div>

<div class="row price">
<?php echo do_shortcode('[contact-form-7 id="104" html_id="contact-form-1234" title="Formularz 1"]'); ?>
<div class="clearfix"></div>
</div>

</div>





  <?php get_footer(); ?>
