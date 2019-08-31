<?php /*Template Name: Kontakt*/?>

<?php get_header(); ?>
<?php get_template_part('special_modules/prgrm', 'header');?>


<section>

  <div class="container text_box">
    <div class="row">
  <div class="col-lg-6">

  <!-- inner container -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
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

        <div class="col-sm-6 mt50 mmt30"><?php the_field('the_content1')?></div>
        <div class="col-sm-6 mt50 mmt30"><?php the_field('the_content2')?></div>

    </div>
  </div>

  <!-- inner container end -->


  </div>

  <div class="col-lg-6"><div id="map"></div></div>

  </div>
  </div>


</section>


<?php get_footer(); ?>
