
<?php
/*
 * Template Name: Autor
 * Template Post Type: post
 */
?>
<?php
$autorID = get_the_ID();

 ?>

<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>





<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section id="single_author_header">
<div class="container"><div class="row">
<div class="col-md-12 author_data">
  <img  src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
  <div class="title_author_box">
    <h1 class="std-border2"><?php the_title() ?></h1>


  <h6><?php display_all_categories('authors_cat', get_the_ID()) ?></h6>
  </div>


       <?php
       //WP loop with the same arguments - page-author.php
       $args = array('post_type'=> 'autor');
       $query = new WP_Query( $args);
       $ids = array();
       ?>
       <?php if ( $query->have_posts() ) : while ( $query->have_posts() )
           : $query->the_post(); ?>


  <?php //Genarate ids table
  $ids[] = get_the_ID() ?>

       <?php endwhile;?>
       <?php endif;
       wp_reset_postdata();?>

  <?php
  // Search current id in table ids
  $index = array_search($post->ID, $ids);
  $last_index = sizeof($ids)-1;
  if ($index !== 0) {
    $prev_post = $ids[$index-1];
  } else $prev_post = $ids[$last_index];

  if ($index !== $last_index) {
    $next_post = $ids[$index+1];
  } else $next_post = $ids[0];
   ?>


  <div class="navigation_author_box  mt40">
    <a href="<?php echo get_permalink($prev_post) ?>" class="prev btn-std">< Prev</a>
    <a href="<?php echo get_permalink($next_post) ?>" class="next btn-std">Next ></a>
    <a href="<?php echo home_url() ?>/authors/" class="long btn-std">Back to all authors</a>
  </div>







</div>

<div class="col-md-12 std-border mt40 mb40 header-line"></div>
</div></div>
</section>


<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>

<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>

<section id="single_author_content">
  <div class="container">
<div class="row">
  <div class="col-md-7 visual-buildere">
    <h2 class="mmt20 mb20">BIO</h2>
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
      if (get_the_content()){
                the_content();
      } // end is content statment
        } // end while
      } // end if
    wp_reset_postdata();?>
<div id="list_of_acognitions" class="std-border mpt20 mmt20 mt50 mb50"></div>

</div>
<div class="col-md-1 mobihide"></div>
<div class="col-md-4 mobihide">
  <h4 class=" mb20">Last Book</h4>

<div class="authror_last_book">
  <?
  $args = array(
    'post_type' => 'books',
    'order'=> 'DESC',
    'posts_per_page' => 1,
    'meta_key' => 'this_book_author_id',
    'meta_value' => $autorID
  );
  $query = new WP_Query( $args);

  if ( $query->have_posts() ):
    while ( $query->have_posts() ) :
      $query->the_post();?>

     <!-- <?php if ($autorID == get_field('this_book_author_id')): ?> -->
     <div class="slide_book book_box">
        <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <div class="std-border2"></div>
        <h3><?php echo the_field('book_short_polish_title') ?></h3>
        <h3><?php echo the_field('book_short_english_title') ?></h3>
     <a href="<?php echo get_permalink(); ?>"><div class="btn-std">More</div></a>
     </div>
     <!-- <?php endif; ?> -->

   <?php endwhile; ?>
 <?php endif;
 wp_reset_postdata();?>



</div>
<div class="clearfix"></div>
</div>
</div>
<div class="row">
  <div class="col-md-12"><h4 class="mb30 mmb30 mmt20">Books</h4></div>
</div>
<?php   include('include-authorsBooks.php'); ?>

</div></section>
<?php include('include-backTop.php') ?>

<?php get_footer(); ?>
