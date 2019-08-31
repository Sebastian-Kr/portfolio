<?php /*Template Name: Aktualności*/?>
<?php get_header(); ?>

<?php
$stat1 = '';
$stat2 = '';
$category_id = '';
if (isset($_POST['post_type'])) {
  $_SESSION['post_type'] = $_POST['post_type'];
}

if (isset($_SESSION['post_type'])) {

  $category_id = $_SESSION['post_type'];

if (($_SESSION['post_type'] == '6')) {
  $stat1='selected';
  $stat2='';

}

if ($_SESSION['post_type'] == '5') {
  $stat1='';
  $stat2='selected';
}
}
?>

<section>


    <div class="container pb30 sort_box"><div class="row">
      <div class=" col-lg-6 col-xl-7">
        <h1><?php the_title() ?></h1>
      </div>
      <div class="col-lg-6 col-xl-5">

        <form class="mt10" action="<?php echo home_url() ?>/aktualnosci" method="post">

          <div class="filter">
            <span><?php echo __('[:pl]Pokaż[:en]Show'); ?>:</span>
            <select name="post_type">
              <option value="all"><?php echo __('[:pl]Wszystko[:en]All'); ?></option>
              <option value="6" <?php echo $stat1 ?>><?php echo __('[:pl]Artykuły[:en]Articles'); ?></option>
              <option value="5" <?php echo $stat2 ?>><?php echo __('[:pl]Wideo[:en]Video'); ?></option>
            </select>
          </div>



        <input class="btn_pink" type="submit" name="submit" value="Sortuj">

        </form>

      </div>
    </div></div>


    <div class="container"><div id="newslist" class=" mt30">


          <?php

          $args = array(
            'order'=> 'DESC',
            'cat'=> $category_id,
            'posts_per_page' => 9,
            'paged' =>  get_query_var( 'paged' ),
          );
          $wp_query = new WP_Query( $args);
          $counter = 0;
          ?>
          <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() )
              : $wp_query->the_post();

              $counter++;
        include('includes/newstiles.php')
        ?>
          <?php endwhile;?>
          <?php endif;

          if (paginate_links()) {
            echo '<div id="paginate">'.paginate_links().'</div>';
          }
          wp_reset_postdata();?>




    </div></div><!-- end container -->
</section>




<?php get_footer(); ?>
