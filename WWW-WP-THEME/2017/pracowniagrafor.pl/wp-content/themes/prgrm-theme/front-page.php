<?php get_header(); ?>

  <?php // ========================================================================
    //  SECTION - header
    // =========================================================================  ?>
<?php get_template_part('content', 'slider') ?>

   <?php // ========================================================================
     //  END SECTION - header
     // =========================================================================  ?>



<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section id="front-page1">
<div class="container "><div class="row">

   <div class="1 col-md-5  bg-std" style="background-image: url('<?php echo the_field('progremo_s1_img') ?>')">


   </div>
   <div class="2 col-md-7 pl30">

<?php echo get_template_part('content', 'main') ?>
   </div>

</div></div>
</section>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>


<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section class=" bg-col3" id="front-page2">
<div class="container"><div class="row">

   <div class="col-md-5 "><?php echo the_field('progremo_s2_content1') ?></div>
   <div class="col-md-2 vertical-border"></div>
   <div class="col-md-5"><?php echo the_field('progremo_s2_content2') ?></div>

</div></div>
</section>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>



<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section class="bg-col1" id="front-page3">

     <div id="main-slider2" class="carousel slide" data-interval="4000" data-ride="carousel">

  <div class="carousel-inner" role="listbox">

    
    <?php
    $progremo_cyt_counter = 1;
    if( have_rows('progremo_cyt_loop') ):
        while ( have_rows('progremo_cyt_loop') ) : the_row();?>

        <div class="carousel-item <?php if ($progremo_cyt_counter == 1) echo 'active' ?>">
              <p><?php the_sub_field('progremo_cyt');?></p>
        </div>

    <? $progremo_cyt_counter++;
    endwhile;
    else :
        // no rows found
    endif;
    ?>



</div>

</div>
</section>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>



<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section class="bg-col3" id="front-page4">
<div class="container"><div class="row">

   <div class="col-md-5"><?php echo the_field('progremo_s4_content1') ?></div>
   <div class="col-md-2 vertical-border"></div>

   <div class="col-md-5"><?php echo the_field('progremo_s4_content2') ?></div>

</div></div>
</section>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>


<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<?php get_template_part('content', 'tilekurs') ?>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>


  <?php get_footer(); ?>
