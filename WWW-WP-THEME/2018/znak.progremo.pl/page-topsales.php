<?php /*Template Name: TopSales*/ ?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>


<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<?php get_template_part('content', 'subheader') ?>

<section id="best_of_the_year">
  <div class="container">


<?php if ( have_rows('bestsellers_of_the_year') ): ?>
    <?php while ( have_rows('bestsellers_of_the_year') ) : the_row(); ?>

        <?php
        $book_ID = get_sub_field('bestseller_item');
        $author_ID = get_field('this_book_author_id', $book_ID);

        if (get_field('excerpt', $book_ID)) {
          $wp_excerpt = get_field('excerpt', $book_ID);
        }
        else {
          $wp_excerpt = get_excerpt_by_id($book_ID);
        }
         ?>

<?php  // single item html // ?>

        <div class="row">
          <div class="border_topsales"></div>
          <div class=" single_book col-lg-3 col-md-4">
              <a href="<?php echo get_permalink($book_ID) ?>">
        <img src="<?php echo get_the_post_thumbnail_url($book_ID) ?>" alt=""></a>
         </div>
        <div class=" col-lg-7 col-md-8 ">
        <h2 class="std-border2"><?php  echo get_the_title($book_ID) ?> <br><?php echo get_field('progremo_book_engtitle', $book_ID) ?></h2>
        <p class="category_book"><?php display_all_categories('books_cat', $book_ID) ?></p>
        <p class="author_book">Author: <?php echo get_the_title($author_ID)?></p>

            <h5 class="desc_book">Opis:</h5>
          <div class="book_excerpt">  <?php echo $wp_excerpt ?></div>
            <a href="<?php echo get_permalink($book_ID) ?>">Read more</a>
        </div></div>

<?php  // single item html end// ?>



    <?php endwhile; ?>
<?php endif; ?>



</div>
</section>

<?php include('include-backTop.php') ?>

<?php get_footer(); ?>
