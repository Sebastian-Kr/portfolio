<?php
/*
Template Name: Co drukujemy
*/
?>

<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>

<!--===========================================header==================  -->
<section id="header-normal" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>')">
  <div class="container"><div class="row">
 <div class="col-lg-6">
    <div id="arrow-normal">
   <h1><?php echo the_title() ?></h1>
   <h4><?php echo the_field('prog_subtitle') ?></h4>
  </div>
 </div>
 <div class="col-lg-6"></div>
</div></div></section>
<!--=========================================== end header==================  -->


<!-- kontener x3 -->
<section id="tiles"><div class="container">

<div class="row">
 <div class="col-xs-6 col-sm-4"><a href="<?php echo the_field('tiles-link1') ?>"><div id="k1"class=" gif_hover vpc4 del1 bgc3"><img src="<?php echo get_template_directory_uri()?>/img/k1.svg" alt=""><p><?php echo the_field('prog_head1') ?></p></div></a></div>
 <div class="col-xs-6 col-sm-4"><a href="<?php echo the_field('tiles-link2') ?>"><div id="k2"class=" gif_hover vpc4 del2 bgc1"><img src="<?php echo get_template_directory_uri()?>/img/k2.svg" alt=""><p><?php echo the_field('prog_head2') ?></p></div></a></div>
 <div class="col-xs-6 col-sm-4"><a href="<?php echo the_field('tiles-link3') ?>"><div id="k3"class=" gif_hover vpc4 del3 bgc3"><img src="<?php echo get_template_directory_uri()?>/img/k3.svg" alt=""><p><?php echo the_field('prog_head3') ?></p></div></a></div>

 <div class="col-xs-6 col-sm-4"><a href="<?php echo the_field('tiles-link4') ?>"><div id="k4"class=" gif_hover vpc4 del4 bgc1"><img src="<?php echo get_template_directory_uri()?>/img/k4.svg" alt=""><p><?php echo the_field('prog_head4') ?></p></div></a></div>
 <div class="col-xs-6 col-sm-4"><a href="<?php echo the_field('tiles-link5') ?>"><div id="k5"class=" gif_hover vpc4 del5 bgc3"><img src="<?php echo get_template_directory_uri()?>/img/k5.svg" alt=""><p><?php echo the_field('prog_head5') ?></p></div></a></div>
 <div class="col-xs-6 col-sm-4"><a href="<?php echo the_field('tiles-link6') ?>"><div id="k6"class=" gif_hover vpc4 del6 bgc1"><img src="<?php echo get_template_directory_uri()?>/img/k6.svg" alt=""><p><?php echo the_field('prog_head6') ?></p></div></a></div>

 <div class="col-xs-6 col-sm-4"><a href="<?php echo the_field('tiles-link7') ?>"><div id="k7"class=" gif_hover vpc4 del2 bgc3"><img src="<?php echo get_template_directory_uri()?>/img/k7.svg" alt=""><p><?php echo the_field('prog_head7') ?></p></div></a></div>
 <div class="col-xs-6 col-sm-4"><a href="<?php echo the_field('tiles-link8') ?>"><div id="k8" class=" gif_hover vpc4 del3 bgc1"><img src="<?php echo get_template_directory_uri()?>/img/k8.svg" alt=""><p><?php echo the_field('prog_head8') ?></p></div></a></div>
 <div class="col-xs-6 col-sm-4"><a href="<?php echo the_field('tiles-link9') ?>"><div id="k9"class=" gif_hover vpc4 del4 bgc3"><img src="<?php echo get_template_directory_uri()?>/img/k9.svg" alt=""><p><?php echo the_field('prog_head9') ?></p></div></a></div>

 <div class="col-xs-6 col-sm-4"><a href="<?php echo the_field('tiles-link10') ?>"><div id="k10"class=" gif_hover vpc4 del5 bgc1"><img src="<?php echo get_template_directory_uri()?>/img/k10.svg" alt=""><p><?php echo the_field('prog_head10') ?></p></div></a></div>
 <div class="col-xs-6 col-sm-4"><a href="<?php echo the_field('tiles-link11') ?>"><div id="k11"class=" gif_hover vpc4 del6 bgc3"><img src="<?php echo get_template_directory_uri()?>/img/k11.svg" alt=""><p><?php echo the_field('prog_head11') ?></p></div></a></div>
 <div class="col-xs-6 col-sm-4"><a href="<?php echo the_field('tiles-link12') ?>"><div id="k12"class=" gif_hover vpc4 del7 bgc1"><img src="<?php echo get_template_directory_uri()?>/img/k12.svg" alt=""><p><?php echo the_field('prog_head12') ?></p></div></a></div>
</div>


</div></section>


<section id="sec45" class="bgc3"><div class="container"><div class="row">
   <div class="col-sm-6">
     <div class="item head"><img src="<?php echo the_field('icon-bb1')?>" alt=""><h4><?php echo the_field('head-mix1') ?></h4></div>
     <div class="item head"><img src="<?php echo the_field('icon-bb2')?>" alt=""><h4><?php echo the_field('head-mix2') ?></h4></div>
     <div class="item head"><img src="<?php echo the_field('icon-bb3')?>" alt=""><h4><?php echo the_field('head-mix3') ?></h4></div>

   </div>

   <div class="col-sm-6">
   <div class="hr-mobi"></div>
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
</div></div></section>




<?php get_footer(); ?>
