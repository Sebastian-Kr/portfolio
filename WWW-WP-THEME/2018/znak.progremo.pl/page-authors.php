<?php /*Template Name: Authors*/ ?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>


<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<?php get_template_part('content', 'subheader') ?>
<?php
if (isset($_POST['category_post'])) {
  $current_authors_cat = $_POST['category_post'];
  unset($_POST['category_post']);
}

else $current_authors_cat = '';
?>

<div class="author_search_container container"><div class="author_search_box">
<span>Show authors of:</span>
<form class="" action="" method="post">
  <select class="select" name='category_post'>

<option class="option" value="">All category</option>
<?php create_options('authors_cat', $current_authors_cat) ?>


</select>
<input type="submit" name="submit" value="Show">
</form>
</div></div>


<section id="authors_list">
  <div class="container">
  <div class="row">



    <?php
    $args = array(
      'post_type' => 'autor',
      'order'=> 'DESC',
      'authors_cat' => $current_authors_cat
    );
    $query = new WP_Query( $args);
    ?>
    <?php if ( $query->have_posts() ) : while ( $query->have_posts() )
        : $query->the_post(); ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
<a href="<?php echo get_permalink() ?>">
        <div class="author_box">
          <div class="author_img_box"><img class=" mb10" src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></div>

          <h2 class="std-border2 std_medium_font"><?php echo the_title() ?></h2>
          <p class="std_small_font"><?php display_all_categories('authors_cat', get_the_ID()) ?></p>
        </div>
        </a>

        </div>
    <?php endwhile;?>
    <?php endif;
    wp_reset_postdata();?>

</div></div>
</section>



<?php get_footer(); ?>
