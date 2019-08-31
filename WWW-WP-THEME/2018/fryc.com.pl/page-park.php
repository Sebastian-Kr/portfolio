<?php /*Template Name: Park*/?>


<?php get_header(); ?>
<?php get_template_part('special_modules/prgrm', 'header');?>


<div class="container-fluid park_content mt0 ">
  <div class="row">
    <div class="col-md-6 col-lg-8" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')" >

      <img class="hidden-md-up" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">

    </div>
    <div class="col-md-6 col-lg-4">
<div class="content_box ">
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



<?php get_footer(); ?>
