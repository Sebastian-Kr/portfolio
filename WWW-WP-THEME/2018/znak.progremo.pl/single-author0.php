
<?php
/*
 * Template Name: Autor
 * Template Post Type: post
 */
?>


<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>



     <?php
     //WP loop with the same arguments - page-author.php
     $args = array('cat'=> '3', 'order'=> 'DESC');
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
<div class="mb40"></div>
<section id="single_author_header">
  <h1>single-autor</h1>
<div class="container"><div class="row">
<div class="col-md-12 author_data">
  <img class="mt40" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
  <div class="title_author_box">
    <h1 class="std-border2"><?php the_title() ?></h1>
  <h6><?php echo the_field('prgrm_author_category') ?></h6>
  </div>





  <div class="navigation_author_box  mt40">
    <a href="<?php echo get_permalink($prev_post) ?>" class="prev btn-std">< Prew</a>
    <a href="<?php echo get_permalink($next_post) ?>" class="next btn-std">Next ></a>
    <a href="<?php echo home_url() ?>/authors/" class="long btn-std">Back to all authors</a>
  </div>

<div class="authors_buttons_box ">
  <a id="scroll" class="scroll btn-std btn-inverse" target="list_of_acognitions" >List of acquisitions</a>
  <a href="<?php echo the_field('author_download_pack') ?>" class="btn-std">Download pack</a>
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
  <div class="col-md-8 visual-buildere">
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
<div id="list_of_acognitions" class="std-border mt50 mb50"></div>
<h4 class="mb30 listofa_h4">List of acquisitions</h4>

    <?php

    if( have_rows('list_of_acognitions') ):
      echo '<ul class="listofa">';
        while ( have_rows('list_of_acognitions') ) : the_row();?>

<li><?php the_sub_field('list_of_acognitions_item'); ?></li>

        <?php
      endwhile;
      echo '</ul>';
    else :
    endif;
    ?>


<div class="navigation_author_box bottom std-border navigation_author_bottom mb30">


  <a href="<?php echo get_permalink($prev_post) ?>" class="prev btn-std">< Prew</a>
  <a href="<?php echo get_permalink($next_post) ?>" class="next btn-std">Next ></a>
  <a href="<?php echo home_url() ?>/authors/" class="long btn-std">Back to all authors</a>


</div>

</div>
<div class="col-md-4">
  <h4>Last book</h4>

<div class="authror_last_book">
  <div class="slide_book book_box">
  <img src="<?php echo the_field('last_book_img') ?>" alt="">
  <h3 class="std-border2"><?php echo the_field('last_book_title') ?> <br><?php echo the_field('last_book_title_eng') ?></h3>
  <p>Tematyka: <?php echo the_field('last_book_category') ?></p>
  </div>
  <div class="authror_last_book_desc">
    <?php echo the_field('last_book_desc') ?>
  </div>

</div>
<div class="clearfix"></div>


  <h4 class="mt50">Full list of books</h4>
  <?php

  if( have_rows('full_list_of_books') ):
    echo '<ul class="listofbook">';
      while ( have_rows('full_list_of_books') ) : the_row();?>

<li><?php the_sub_field('full_list_of_books_item'); ?></li>

      <?php
    endwhile;
    echo '</ul>';
  else :
  endif;
  ?>
</div>


</div></div></section>


<?php get_footer(); ?>
