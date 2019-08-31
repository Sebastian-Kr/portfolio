<?php /*Template Name: Polish bookmarket*/ ?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>

<?php get_template_part('content', 'subheader'); ?>
<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>

<section id='polish_bookmarket'  >
  <div class="container"><div class="row">

   <div class="col-lg-12 ">


     <?php

     if( have_rows('bookmarket_list') ):
         while ( have_rows('bookmarket_list') ) : the_row();?>

<div class="std-border bookmarket">


  <div class="desc"><h2><?php echo the_sub_field('polish_bookmarket_name'); ?></h2>
    <?php echo the_sub_field('polish_bookmarket_desc'); ?></div>
  <a class="btn-std" href="<?php echo the_sub_field('polish_bookmarket_link'); ?>">Go to website</a>
</div><div class="clearfix"></div>

         <?php
         endwhile;
     else :
     endif;
     ?>
<div class="d-block d-md-none std-border "></div>

   </div>


</div></div>
</section>



<?php get_footer(); ?>
