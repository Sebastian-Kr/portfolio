
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>



<div class="news-all">

<section>

<div id="news-header" class="container" style="background-image:url('http://localhost/wordpress/artdent/wp-content/themes/prgrm-theme/img/dentysta-krakow-cennik.png')">
<h1><?php echo get_the_title();?>
<!-- MAIN CONTENT  -->
<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
the_date('d F Y', '<br><span>', '</span>');

} }
?>
</h1>
</div >
<div class="container p0">
  <img id="news-img" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
</div>

<div class="full-bar container"></div>
</section>

<section id="news-body">
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


</section>

<div class="flowers">
  <img src="<?php echo get_template_directory_uri() ?>/img/dentysta-krakow-artdent-flower1.png" alt="">
  <img src="<?php echo get_template_directory_uri() ?>/img/dentysta-krakow-artdent-flower2.png" alt="">
  <img src="<?php echo get_template_directory_uri() ?>/img/dentysta-krakow-artdent-flower3.png" alt="">

</div>
</div>

<?php get_footer(); ?>
