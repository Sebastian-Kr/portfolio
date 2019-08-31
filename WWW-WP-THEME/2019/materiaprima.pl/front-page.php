<?php get_header(); ?>


<section id="home_slider" class="">
<div class="people_box"></div>

<div class="content_box">


  <?php if ( have_rows('home_slider') ): ?>
      <?php while ( have_rows('home_slider') ) : the_row(); ?>
    <?php include('includes/slideitem.php') ?>
      <?php endwhile; ?>
  <?php endif; ?>

<img class="d-md-none d-lg-block logo" src="<?php echo get_template_directory_uri() ?>/img/materia-header.svg" alt="">

<div class="navigator">
  <a href="<?php echo home_url() ?>/festiwal#anhor_tiles">
    <button class="btn_pink"><?php echo __('[:pl]Zobacz spektakle[:en]See performance'); ?></button>
  </a>
  <div class="arrows">
    <a href="#"><button class="arrow_left"></button></a>
    <a href="#"><button class="arrow_right"></button></a>
  </div>
</div>

</div></section>


<section class="pt0">

    <!-- <div class="container-fluid talents"><div class="row mt30"> -->
    <div class="container-fluid "><div class="row ">


          <?php
          $args = array(
            'order'=> 'DESC',
            'posts_per_page' => 6
          );
          $query = new WP_Query( $args);
          $counter = 0;
          ?>
          <?php if ( $query->have_posts() ) : while ( $query->have_posts() )
              : $query->the_post();
              $counter++;

         if ($counter == 5) {
           include('includes/advertiles.php');
         }
         echo '<div class="col-md-6 col-lg-4 mt30">';
           include('includes/newstiles.php');
        echo '</div>';
           ?>

          <?php endwhile;?>
          <?php endif;
          wp_reset_postdata();?>


          <div class="col-md-6 col-lg-4  d-flex flex_center">
            <a href="<?php echo home_url() ?>/aktualnosci">
              <button class="btn_pink_arrow"><?php echo __('[:pl]Wszystkie aktualności[:en]All news'); ?></button>
            </a>
         </div>

    </div></div><!-- end container -->
</section>

  <?php include('includes/coupon.php') ?>


  <?php get_footer(); ?>
