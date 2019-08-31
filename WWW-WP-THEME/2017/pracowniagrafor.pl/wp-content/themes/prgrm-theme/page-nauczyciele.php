<?php /* Template Name: Nauczyciele */?>
<?php get_header(); ?>
<?php get_template_part(content, header);?>


<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section id="nauczyciele">
  <div class="container">

 <div class="row"><div class="col-lg-12 row-img">
  <div class="foto" style="background-image: url('<?php echo the_field('progremo_img_n1') ?>')"><div class="triangle"></div></div>
<div class="desc">
  <h2 class="mb10"><?php echo the_field('progremo_name_n1') ?></h2>
  <?php echo the_field('progremo_desc_n1') ?>
</div></div>
<div class="row">
 </div><div class="col-lg-12 ">
   <div class="bg-col3 cytat">

   <?php echo the_field('progremo_cit_n1') ?>

</div> </div></div>

</div>

<div class="container mt40">

<div class="row"><div class="col-lg-12 row-img">
<div class="foto" style="background-image: url('<?php echo the_field('progremo_img_n2') ?>')"><div class="triangle"></div></div>
<div class="desc">
<h2 class="mb10"><?php echo the_field('progremo_name_n2') ?></h2>
<?php echo the_field('progremo_desc_n2') ?>
</div>
</div>
</div><div class="row "><div class="col-lg-12 ">
  <div class="bg-col3 cytat">


 <?php echo the_field('progremo_cit_n2') ?>
</div></div></div>

</div>


</section>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>

  <?php get_footer(); ?>
