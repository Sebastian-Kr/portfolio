<?php get_header(); ?>

<?php get_template_part( 'content', 'men' );?>


<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section id="main_slider_books" class="std-border">
  <div class="container">

<div class="slide-items1 mt">
<?php
$args = array(

  'post_type'=> 'books',
  'orderby' => 'rand',
  'meta_key' => 'book_slider_active',
  'meta_value' => true

);
$query = new WP_Query( $args);
?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() )
    : $query->the_post(); ?>

<div class="slide_book">
  <?php include('include-bookBox.php') ?>
</div>

<?php endwhile; else : ?>
<p><?php _e( 'Niestety nie ma żadnych postów do wyświetlenia' ); ?></p>
<?php endif;
wp_reset_postdata()?>

</div>
</div>
</section>


<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>
<?php get_template_part( 'content', 'main' );?>

<section id='news_front_page' class="mt60 mb100">
  <div class="container"><div class="row">

   <div class="col-lg-9 ">
     <h2 class="fw300 mb50">News</h2>

     <?php
     $args = array('cat'=> '5',  'posts_per_page' => '3');
     $query = new WP_Query( $args);
     ?>
     <?php if ( $query->have_posts() ) : while ( $query->have_posts() )
         : $query->the_post(); ?>



           <div class="news_loop_box" >
             <a href="<?php the_permalink(); ?>"><div class="img_loop_box"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></div></a>
          <div class="content_loop_box">
            <h3><?php echo get_the_title();?></h3>

          <div class="excerpt">
            <?php if (get_field('excerpt')): ?>
            <?php the_field('excerpt'); ?>
            <?php endif; ?>
          </div>
             <a href="<?php the_permalink(); ?>"><div class="i">Read more.</div> </a>
          </div>
               <div class="clearfix"></div>
              </div>

       <!-- end news div -->

     <?php endwhile; else : ?>
     <p><?php _e( 'Niestety nie ma żadnych postów do wyświetlenia' ); ?></p>
     <?php endif;
     wp_reset_postdata()?>
<div class="btn_box"><a class="btn-std" href="<?php echo get_permalink(15) ?>">Load more news</a></div>

   </div>


<div id="bestsellers" class="col-lg-3">
  <h2 class="i fw300 mb50"><a href="<?php echo get_permalink(12) ?>">Bestsellers</a></h2>
<div class="book_list">

  <?php if ( have_rows('bestsellers_of_the_year', 12) ):
 $i = 0;
     while ( have_rows('bestsellers_of_the_year', 12) ) : the_row();
       $i++;
       if( $i > 3 ) {break;}
       $book_ID = get_sub_field('bestseller_item');
       $author_ID = get_field('this_book_author_id', $book_ID);
       ?>

  <div class="slide_book book_box"><a href="<?php echo get_permalink($book_ID) ?>">
  <img src="<?php echo get_the_post_thumbnail_url($book_ID)?>" alt="">
<div class="std-border2"></div>
  <h3><?php echo get_field('book_short_polish_title', $book_ID) ?>
  <h3><?php echo get_field('book_short_english_title', $book_ID) ?></h3>
  <p>Author: <?php echo get_the_title($author_ID) ?></p>
  </a></div>

  <?php endwhile; else : ?>
  <p><?php _e( 'Niestety nie ma żadnych postów do wyświetlenia' ); ?></p>
  <?php endif;
  wp_reset_postdata()?>
</div></div>


</div></div>
</section>



<?php get_footer(); ?>
