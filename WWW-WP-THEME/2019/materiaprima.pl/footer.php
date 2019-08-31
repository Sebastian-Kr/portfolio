</div><!-- end main_content div -->

<footer id="prgrm-footer" class="">

<div class="container">
<div class="row mt40 column_content">



  <div id="col1" class="col-md-4 ">
    <!-- <?php  dynamic_sidebar('stopka_kolumna_1'); ?> -->
   <img class="mb15" src="<?php echo get_template_directory_uri() ?>/img/materia-logo_bw-stopka.svg" alt="">
  <?php the_field('col1', 863)?>
  <div class="mt10 social_icon">
    <a class="icon fb_icon" href="<?php the_field('facebook_link', 2)?>"></a>
    <a class="icon yt_icon" href="<?php the_field('youtube_link', 2)?>"></a>
    <a class="icon ms_icon" href="<?php the_field('myspace_link', 2)?>"></a>
  </div>
    </div>

  <div id="col2" class="col-md-4">
    <!-- <?php  dynamic_sidebar('stopka_kolumna_2'); ?> -->
    <small><?php echo __('[:pl]Organizatorem festiwalu jest[:en]The organizer of the festival is'); ?>:</small><br>
    <img class="mb15 mt15" src="<?php echo get_template_directory_uri() ?>/img/groteska-logo-stopka.svg" alt="">
    <div class="contact_box">
<?php the_field('col2', 863)?>
    </div>
  </div>


   <div id="col3" class="col-md-4 ">
	 <!-- <?php  dynamic_sidebar( 'stopka_kolumna_3' ); ?> -->

   <div class="logos">
     <img class="mb15 mr15" src="<?php echo get_template_directory_uri() ?>/img/krakow-stopka.svg" alt="">
     <img class="mb15 mr15" src="<?php echo get_template_directory_uri() ?>/img/ministerstwo-stopka.svg" alt="">
   </div>
   <div class="content">
  <?php the_field('col3', 863)?>
   </div>
	</div>



</div></div>



  <?php

// check if the repeater field has rows of data
if( have_rows('carousel1_loop', 863) ):?>
<section id="carousel_footer" class="mt50 pt30 carousel_section full_border">
  <div class="container">
    <div class="col-md-12 mb50"><?php the_field('carousel1_loop_title', 863)?></div>

<div id="car_foot_content" class="slide-items1">

<?php 	// loop through the rows of data
    while ( have_rows('carousel1_loop', 863) ) : the_row();?>
        <div class="slide_item">
          <a target="blank" href="<?php the_sub_field('carousel1_item_link', 863); ?>" rel="index, follow" target="_blank">
          <img src="<?php the_sub_field('carousel1_item_img', 863); ?>">
        </a></div>

<?php
    endwhile;

?>
</div>
</div>
</section>
<?php
endif;

?>



<div class="full_border">

<div class="container"><div  id="copyright" class="row pt10 pb10">
<div class="col-lg-12">

  <div style="float: left">© <?php echo get_the_date('Y') ?> - copyright. All rights reserved.</div>
  <div style="float: right"> <a href="wizualni.pl">Design by Wizualni.pl</a></div>
</div>
</div>
</div>
</div>

</footer>


<?php wp_footer(); ?>


<!-- <script src="http://localhost:35729/livereload.js"></script> -->
</body>
</html>
