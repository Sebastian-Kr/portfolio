<?php
/*
Template Name: Rezerwacje
*/
?>

<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>
<?php get_template_part( 'content', 'header' );?>

<div class="container-fluid maxw">
<div class="row">

<div class="col-md-6 form-col1">


  <!-- MAIN CONTENT2  -->
  <?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();


  if (get_the_content()){
  echo '<div class="main-content visual-editor">';
            the_content();
  echo '</div>';
  } // end is content statment


    } // end while
  } // end if
  ?>
  <!-- END MAIN CONTENT -->
  <!-- LOOP NEWS -->

<?php
for ($i=1; $i < 12; $i++) {

$title = 'file-title-'.$i;
$link = 'file-file-'.$i;
  ?>
  <?php if (get_field($title)): ?>

<div class="file">
  <a target="blank" href="<?php echo the_field($link)?>">
  <div class="icon-file" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/icon-pdf.svg"></div>
  <h6><?php echo the_field($title) ?></h6></a>
</div>

<?php endif; ?>
<?php } ?>


</div>
<div class="col-md-6 form-col2">


<h3><mark>Formularz rezerwacji</mark></h3>
<?php echo do_shortcode('[contact-form-7 id="4" title="Formularz 1"]'); ?>
</div>



</div>

</div>
<?php get_footer(); ?>
