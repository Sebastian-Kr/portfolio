<?php /*Template Name: O nas*/?>


<?php get_header(); ?>
<?php get_template_part('special_modules/prgrm', 'header');?>


<section style="background-image: url('<?php the_field('conteng_bg')?>')">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12">
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
    </div>
  </div>
</section>

<section class="usp_container animate">
  <div class="container">
    <div class="row">

      <div class="col-md-4 usp_item text-center">
        <img  src="<?php echo get_template_directory_uri() ?>/img/icon-1.svg" alt="">
        <h5 ><?php the_field('usp1_title')?></h5>
        <p><?php the_field('usp1_desc')?></p>
      </div>

      <div class="col-md-4 usp_item text-center">
        <img  src="<?php echo get_template_directory_uri() ?>/img/icon-2.svg" alt="">
        <h5 ><?php the_field('usp2_title')?></h5>
        <p><?php the_field('usp2_desc')?></p>
      </div>

      <div class="col-md-4 usp_item text-center">
        <img  src="<?php echo get_template_directory_uri() ?>/img/icon-3.svg" alt="">
        <h5 ><?php the_field('usp3_title')?></h5>
        <p><?php the_field('usp3_desc')?></p>
      </div>

    </div>
  </div>
</section>

<section class="review_container animate"
style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bg-04.jpg')">
  <div class="container">
    <div class="row">

      <div class="col-md-6 text-center special_border">
        <div><img class="stars mb30 " src="<?php echo get_template_directory_uri() ?>/img/star-01.svg" alt=""></div>
        <?php the_field('review1')?>
      </div>

      <div class="col-md-6 text-center">
        <div><img class="stars mb30 " src="<?php echo get_template_directory_uri() ?>/img/star-01.svg" alt=""></div>
        <?php the_field('review2')?>
      </div>

    </div>
  </div>
</section>

<?php get_template_part('content', 'carousel') ?>

  <?php get_template_part('content', 'cta') ?>

<?php get_footer(); ?>
