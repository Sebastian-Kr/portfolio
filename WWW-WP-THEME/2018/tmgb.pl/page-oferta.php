<?php /*Template Name: Oferta*/?>


<?php get_header(); ?>
<?php get_template_part('special_modules/prgrm', 'header');?>


<section id="offer_page_s1">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-md-6 col-lg-5 content_box0" >

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
<div class="col-md-6">
  <div class="the_offer_content2_bg"
  style="background-image: url('<?php the_field('the_content1_bg')?>')">
    <div class="content_box">
      <?php the_field('the_content1_text')?>
    </div>
  </div>
      </div>
    </div>
  </div>
</section>

<section class="mobile_lg_bg animate" id="offer_page_s2" style="background-image: url('<?php the_field('the_content2_bg')?>')">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-lg-6"></div>
      <div class="col-lg-6">
        <?php the_field('the_content2_text')?>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('content', 'cta') ?>


<?php get_footer(); ?>
