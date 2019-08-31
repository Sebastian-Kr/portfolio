
<?php
/*
 * Template Name: Book
 * Template Post Type: post
 */
?>
<?php get_header(); ?>



     <?php
     //WP loop with the same arguments - page-author.php
     $args = array('cat'=> '6', 'order'=> 'DESC');
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
$prev_post = $ids[$index-1];
$next_post = $ids[$index+1];
 ?>


<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section class="single_book_content">
<div class="container pt80"><div class="row">
<div class="col-md-12">
  <h1 class="std-border2"><?php echo the_title() ?> <br><?php echo the_field('progremo_book_engtitle') ?></h1>
  <p class="category_book"><?php echo the_field('progremo_book_category') ?></p>
  <p class="author_book">Author: <?php echo the_field('progremo_book_author') ?></p>

</div>
  <div id="double_column2" class=" single_book col-lg-4 col-md-4">

      <!-- <div class="img_box" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')"></div> -->

  <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
   </div>


<div id="double_column1" class="col-md-8 col-lg-6 pt25 visual-buildere">


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




</div></div>
</section>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>
  <?php get_footer(); ?>
