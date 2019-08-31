<?php
/*
	 * Template Name: Blog/post
	 * Template Post Type: post
	 */

?>


<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>

<section id="header" style="background-image: url('<?php echo get_the_post_thumbnail_url(3074,'full') ?>')">
<div class="gradient"></div>

<div id="header-bar">
  <div class="container-fluid maxw">
<h1><?php
$id = get_the_id();
$cat =wp_get_post_categories($id);
echo get_cat_name( $cat[0]);
?>
</h1>
</div>
</div>
</section>
<!-- MAIN CONTENT  -->


<div class="container-fluid maxw">


  <div class="row">
<?php if (get_field('prgrm-t2-on')): ?>

     <?php      echo '<h3 class="ml15">';
          echo the_title();
            echo '<span> / ';
            echo get_the_date( 'g:i d.m.Y' ).'</span>';
          echo '</h3>';
           ?>

 <div class="col-md-6 main-content">
     <?php
     if ( have_posts() ) {
       while ( have_posts() ) {
         the_post();
     if (get_the_content()){
     echo '<div class="visual-editor">';
               the_content();
                    echo '</div>';
     } // end is content statment
       } // end while
     } // end if
     ?>

   </div>

   <div class="col-md-6 main-content visual-editor">

     <?php echo the_field('prgrm-t2') ?>
   </div>
<?php else: ?>
  <div class="col-md-12 main-content">

      <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
      if (get_the_content()){
        echo '<h3>';
        echo the_title();
          echo '<span> / ';
          echo get_the_date( 'g:i d.m.Y' ).'</span>';
        echo '</h3>';
          echo '<div class="mb visual-editor">';
            the_content();
          echo '</div>';
      } // end is content statment
        } // end while
      } // end if
      ?>
    </div>
<?php endif; ?>
      </div>
</div>


<?php get_template_part( 'content', 'gallery'); ?>


<div class="container-fluid maxw"><div class="row">
<div class="col-md-6 visual-editor"><?php echo the_field('add-custom-html') ?></div>
</div>


<div class="prefooter mb2">
<a href="javascript:history.back()"><div class="powrot">powrót</div></a>
</div>
</div>

<?php get_footer(); ?>
