
<?php
/*
 * Template Name: Book
 * Template Post Type: post
 */
?>
<?php get_header(); ?>
<?php $autorID = get_field('this_book_author_id'); ?>


<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section class="single_book_content">

<div class="container">

<div class="row"><div class="col-md-12">
  <div class="authors_buttons_box ">
    <a href="javascript:history.back()" class="prev btn-std">< Back</a>
    <a href="<?php echo home_url() ?>/authors" class="ml10 btn-std btn-inverse">Show All Authors</a>
  </div>


</div></div>
  <div class="row">

  <div id="double_column2" class=" single_book col-lg-4 col-md-4">
  <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">


  <div class="mobihide">
    <?php include('include-rightSold.php'); ?>
  </div>

   </div>
<div class="col-md-1"></div>

<div id="double_column1" class="col-md-7 col-lg-6 pt25 visual-buildere">
  <h6>Title:</h6>
  <h1><?php echo the_title() ?></h1>
  <h6>English title:</h6>
  <h1><?php echo the_field('progremo_book_engtitle') ?></h1>
  <h6 class="author_book">Author: </h6>
  <h5><?php echo get_the_title($autorID) ?></h5>
  <h6>Category:</h6>
  <h5><?php display_all_categories('books_cat', get_the_ID()) ?></h5>
  <div class="authors_buttons_box mt0">
    <a href="<?php echo get_permalink($autorID)?>" class=" btn-std btn-inverse">About the Author</a>
    <?php if (get_field('book_download_pack')): ?>
      <a href="<?php echo the_field('book_download_pack') ?>" class="btn-std">Download pack</a>
    <?php endif; ?>
  </div>
    <div class="std-border2 mb30 mt50 mmb30 mmt50"></div>

    <div class="mobishow">
      <?php include('include-rightSold.php'); ?>
    </div>


<div class="description_book">
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
</div>
</div>




</div>




</div>


<div class="container">
<div class="row">
  <div class="col-md-7 std-border mmt40 mmb40 mt40 mb40 header-line"></div>
</div>
  <div class="row">
    <div class="col-md-12"><h4>Other Books by This Author</h4></div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php include('include-authorsBooks.php');?>
    </div>
  </div>
</div>


</section>
<?php include('include-backTop.php') ?>

<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>
  <?php get_footer(); ?>
