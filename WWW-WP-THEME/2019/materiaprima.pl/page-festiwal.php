<?php /*Template Name: Festiwal*/?>


<?php get_header(); ?>



<div class="content_video_box header_box ">
  <div class="starter_film " style="background-image: url('<?php the_field('film_thumb')?>')">
<div class="glass_full"></div>
    <img class="d-none d-sm-block logo" src="<?php echo get_template_directory_uri() ?>/img/materia-header.svg" alt="">
    <img class="play" src="<?php echo get_template_directory_uri() ?>/img/play.svg" alt="">
    <img class="d-block d-sm-none logo_mobile" src="<?php echo get_template_directory_uri() ?>/img/logos-mat-srodek.svg" alt="">
  </div>

  <video id="content_video"  controls >
   <source src="<?php the_field('film_link')?>" type="video/mp4">
   Your browser does not support the video tag.
 </video>

<div class="stoper_film"></div>
</div>

<section class="pb0 festiwal_section_content1">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
      <?php the_field('subtitle')?>
      </div>
      <div class="col-md-4 middle_content">
        <img src="<?php echo get_template_directory_uri() ?>/img/ludzik.jpg" alt="">
      </div>
      <div class="col-md-7 middle_content">
      <?php include('includes/content.php') ?>
      </div>
    </div>
    <div id="anhor_tiles"></div>
  </div>

</section>


<section>



  <div class="container-fluid"><div  class="row mt30">


        <?php
        $args = array(
          'post_type' => 'spektakle',
          'order'=> 'ASC',
          'posts_per_page' => 99
        );
        $query = new WP_Query( $args);
        ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() )
            : $query->the_post();
        ?>

        <div class="col-lg-6 mb30">
        <a href="<?php echo get_permalink() ?>"><div class=" tiles tiles_orange_border">
<div class="glass_full"></div>
          <div class="bg_container">
            <div class="bg_box" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>')"></div>
          </div>
          <h3><?php the_title() ?></h3>
          <h5><?php the_field('subtitle')?></h5>
        </div>
  <img class="border_img" src="<?php echo get_template_directory_uri() ?>/img/linia-zolta.svg" alt="">
      </a></div>


        <?php endwhile;?>
        <?php endif;
        wp_reset_postdata();?>




  </div></div><!-- end container -->
</section>


<?php include('includes/coupon.php') ?>

  <?php get_footer(); ?>
