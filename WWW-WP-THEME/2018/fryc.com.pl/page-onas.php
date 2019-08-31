<?php /*Template Name: O nas*/?>


<?php get_header(); ?>
<?php get_template_part('special_modules/prgrm', 'header');?>


<div class="container-fluid onas_content">
  <div class="row">
    <div class="col-md-6" style="background-image: url('<?php echo get_the_post_thumbnail_url() ;?>')" >

      <img class="hidden-md-up" src="<?php echo get_the_post_thumbnail_url() ;?>" alt="">

    </div>
    <div class="col-md-6 ">
<div class="content_box">
      <img class="logo" src="<?php echo get_template_directory_uri() ?>/img/logo_duze.svg" alt="">
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
</div>

<!-- PROGREMO LIGHTBOX BEGIN -->
<?php get_template_part('content', 'std_gallery') ?>
<!-- PROGREMO LIGHTBOX END -->


<?php get_template_part('content', 'carousel') ?>


<?php get_footer(); ?>
