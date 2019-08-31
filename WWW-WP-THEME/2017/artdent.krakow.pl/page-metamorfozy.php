<?php /* Template Name: Metamorfozy */?>
<?php get_header(); ?>
<?php get_template_part('content', 'men');?>
 
<section id="header" class="head-scale" style="background-image: url('<?php echo home_url() ?>/wp-content/uploads/2017/06/4.jpg')">
   </section>
<div class="full-bar-header">
<h1 class="square"><?php echo the_field('subheader') ?></h1>
</div>



<div class="wersja7 wersja7_6 ">
<div class="container-fluid przed_po">
<?php 
  $args = array(
      'post_type' => 'galleryItem',
      'order'=> 'DESC',
    );
    $query = new WP_Query( $args);

    if ( $query->have_posts() ):
      while ( $query->have_posts() ) :
        $query->the_post();?>

<div class="col-md-6">
<div class="item_box">
  <div class="left_bg" style="background-image: url('<?php the_field('metamorfozy_przed') ?>')"></div>
  <div class="right_bg" style="background-image: url('<?php the_field('metamorfozy_po') ?>')"></div>
  <div class="content">
    <h5><?php echo the_title() ?></h5></div>
</div>
  </div>

<?php endwhile;?>
 <?php endif;?>
</div>
</div>


  <?php get_footer(); ?>
