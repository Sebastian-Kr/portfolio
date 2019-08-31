<?php get_header(); ?>

<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>
<section id="img_header"><div class="container"><div class="row">
  <div class=" std-borde  mb10 col-lg-12">

<!-- <img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""> -->
<div class="img_box" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')"></div>

<p class="std-border2"><?php echo the_field('subtitle') ?></p>
</div>

</div><div class="std-border mb40 "></div></div></section>

<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>


<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section>
<div class="container"><div class="row">




<div id="double_column1" class="col-xl-8 ">

<h1 class="mmt20"><?php echo the_title() ?></h1>

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

<div id="double_column2" class="col-xl-4 ">
<?php echo the_field('progremo_content2') ?>


     <?php
     //WP loop with the same arguments - page-author.php
     $args = array('cat'=> '5', 'order'=> 'DESC');
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


<div class="navigation_author_box news_navigation_bottom_box ">
  <a href="<?php echo get_permalink($prev_post) ?>" class="prev btn-std">< Prew</a>
  <a href="<?php echo get_permalink($next_post) ?>" class="next btn-std">Next ></a>
  <a href="<?php echo home_url() ?>/blog/" class="long btn-std">Back to all news</a>

</div>
</div>


</div></div>
</section>

<?php include('include-backTop.php') ?>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>
  <?php get_footer(); ?>
