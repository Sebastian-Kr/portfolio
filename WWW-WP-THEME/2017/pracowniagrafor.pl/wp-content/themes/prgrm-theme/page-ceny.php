<?php /* Template Name: Ceny i terminy */?>
<?php get_header(); ?>
<?php get_template_part(content, header);?>


<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section id="cennik">
<div class="container big-tilles"><div class="row">

   <div class="col-lg-6"><div class="till dark-till bg-col1">
     <h6><?php echo the_field('progremo_title_b1') ?></h6>
     <p><?php echo the_field('progremo_subtitle_b1') ?></p>
   </div></div>


      <div class="col-lg-6"><div class="till dark-till bg-col2">
        <h6><?php echo the_field('progremo_title_b2') ?></h6>
        <p><?php echo the_field('progremo_subtitle_b2') ?></p>
      </div></div>


</div></div>


<div class="container mt30">
  <div class="row"><div class="col-md-12 mt50"><h2><?php echo the_field('progremo_title') ?></h2></div></div>
<div class="row pl15 pr15">
  <div class="col-lg-3 bg-col3 till"><?php echo the_field('progremo_column_ct1') ?></div>
  <div class="col-lg-6 bg-col3 till"><?php echo the_field('progremo_column_ct2') ?></div>
  <div class="col-lg-3 bg-col1 dark-till till"><?php echo the_field('progremo_column_ct3') ?></div>
</div>

<div class="row pl15 pr15">
  <div class="col-lg-3 bg-col3 till"><?php echo the_field('progremo_column2_ct1') ?></div>
  <div class="col-lg-6 bg-col3 till"><?php echo the_field('progremo_column2_ct2') ?></div>
  <div class="col-lg-3 bg-col4 dark-till till"><?php echo the_field('progremo_column2_ct3') ?></div>
</div>


<div class="row pl15 pr15">
  <div class="col-lg-3 bg-col3 till"><?php echo the_field('progremo_column3_ct1') ?></div>
  <div class="col-lg-6 bg-col3 till"><?php echo the_field('progremo_column3_ct2') ?></div>
  <div class="col-lg-3 bg-col5 dark-till till"><?php echo the_field('progremo_column3_ct3') ?></div>
</div>


<div class="row pl15 pr15">
  <div class="col-lg-3 bg-col3 till"><?php echo the_field('progremo_column4_ct1') ?></div>
  <div class="col-lg-6 bg-col3 till"><?php echo the_field('progremo_column4_ct2') ?></div>
  <div class="col-lg-3 bg-col2 dark-till till"><?php echo the_field('progremo_column4_ct3') ?></div>
</div>
</div>

<div class="container mt50">
  <div class="row"><div class="col-md-12 mt50"><h2><?php echo the_field('progremo_title_ct2') ?></h2></div></div>

  <div class="row pl15 pr15">
    <div class="col-lg-9 bg-col2 dark-till till"><?php echo the_field('progremo_name_ct1') ?></div>
    <div class="col-lg-3 bg-col3 till"><?php echo the_field('progremo_price_ct1') ?></div>
  </div>

  <div class="row pl15 pr15">
    <div class="col-lg-9 bg-col1 dark-till till"><?php echo the_field('progremo_name_ct2') ?></div>
    <div class="col-lg-3 bg-col3 till"><?php echo the_field('progremo_price_ct2') ?></div>
  </div>


  <div class="row pl15 pr15">
    <div class="col-lg-9 bg-col1 dark-till till"><?php echo the_field('progremo_name_ct3') ?></div>
    <div class="col-lg-3 bg-col3 till"><?php echo the_field('progremo_price_ct3') ?></div>
  </div>
</div>


<div id="terminy" class="container mt50">
  <div class="row"><div class="col-md-12 mt50"><h2><?php echo the_field('progremo_title_ct3') ?></h2></div></div>

  <div class="row pl15 pr15">
    <div class="col-lg-6 bg-col3 till"><?php echo the_field('progremo_name1_ct3') ?></div>
    <div class="col-lg-3 bor till"><?php echo the_field('progremo_date1_ct3') ?></div>
    <div class="col-lg-6 bg-col3 till"><?php echo the_field('progremo_name2_ct3') ?></div>
    <div class="col-lg-3 bor till"><?php echo the_field('progremo_date2_ct3') ?></div>
    <div class="col-lg-6 bg-col3 till"><?php echo the_field('progremo_name3_ct3') ?></div>
    <div class="col-lg-3 bor till"><?php echo the_field('progremo_date3_ct3') ?></div>
    <div class="col-lg-6 bg-col3 till"><?php echo the_field('progremo_name4_ct3') ?></div>
    <div class="col-lg-3 bor till"><?php echo the_field('progremo_date4_ct3') ?></div>
    <div class="col-lg-6 bg-col3 till"><?php echo the_field('progremo_name5_ct3') ?></div>
    <div class="col-lg-3 bor till"><?php echo the_field('progremo_date5_ct3') ?></div>


  </div>



</div>

</section>




<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>

<section class="mt0 pt0">

  <div class="container"><div class="row"><div class="col-md-12">
    <?php get_template_part('content', 'main') ?>
  </div></div></div>
</section>
<?php get_footer(); ?>
