
<?php
/*
 * Template Name: Pojedynczy wpis BLOG
 * Template Post Type: post
 */
?>

<?php get_header(); ?>
<?php get_template_part( 'content', 'header' );?>
<?php get_template_part( 'content', 'men' );?>




<section class="mt50 pt0" id="news-body">
  <div class="container"><div class="row"><div class="col-md-12">
<a href="<?php echo home_url() ?>/blog"><div class="btn btn-info mt30 mb50">POWRÓT</div></a>

    <h2 class="mb0"><?php echo the_title() ?></h2>
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

    <!-- MAIN CONTENT END  -->
<a href="<?php echo home_url() ?>/blog">  <div class="btn btn-info mt30 mb50">POWRÓT</div></a>

  </div></div></div>
</section>



<?php get_footer(); ?>
