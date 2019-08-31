<?php
/*
Template Name: Cennik
*/

?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>
<?php get_template_part( 'content', 'header' );?>

<!-- MAIN CONTENT  -->
<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();


if (get_the_content()){
echo '<div class=" container visual-editor">';
          the_content();
echo '</div>';
} // end is content statment


  } // end while
} // end if
?>
<!-- END MAIN CONTENT -->

<?php get_template_part( 'content', 'theme'); ?>


<section id="double-section">

 <div class="container-fluid maxw"><div class="row">

<div class="col-sm-6 price price2">

<div class="row">

<div class="col-sm-12"><?php echo the_field('spec_head1')?></div>

<!-- zoom module -->
<div class="col-sm-12">
    <div class="zoom_cont" id="24">
      <div class="controls_buttons">
        <div class="plus" data-boxid="24"></div>
        <div class="minus" data-boxid="24"></div>
      </div>
      <div class="zoom_img">
      <img src="<?php echo the_field('spec_img11')?>">
      </div>
    </div>
</div>
<!-- end zoom module -->



<div class="col-sm-12"><?php echo the_field('spec_text11')?></div>

<!-- zoom module -->
<div class="col-sm-12">
    <div class="zoom_cont" id="23">
      <div class="controls_buttons">
        <div class="plus" data-boxid="23"></div>
        <div class="minus" data-boxid="23"></div>
      </div>
      <div class="zoom_img">
      <img src="<?php echo the_field('spec_img12')?>">
      </div>
    </div>
</div>
<!-- end zoom module -->




<div class="col-sm-12"><?php echo the_field('spec_text12')?></div>

</div></div>

<div class="col-sm-6 price price2">

<div class="row">

  <div class="col-sm-12"><?php echo the_field('spec_head2')?></div>

  <!-- zoom module -->
  <div class="col-sm-12">
      <div class="zoom_cont" id="22">
        <div class="controls_buttons">
          <div class="plus" data-boxid="22"></div>
          <div class="minus" data-boxid="22"></div>
        </div>
        <div class="zoom_img">
        <img src="<?php echo the_field('spec_img21')?>">
        </div>
      </div>
  </div>
  <!-- end zoom module -->



  <div class="col-sm-12"><?php echo the_field('spec_text21')?></div>

<!-- zoom module -->
<div class="col-sm-12">
    <div class="zoom_cont" id="21">
      <div class="controls_buttons">
        <div class="plus" data-boxid="21"></div>
        <div class="minus" data-boxid="21"></div>
      </div>
      <div class="zoom_img">
      <img src="<?php echo the_field('spec_img22')?>">
      </div>
    </div>
</div>
<!-- end zoom module -->

  <div class="col-sm-12"><?php echo the_field('spec_text22')?></div>
</div>
</div>


 </div></div>

</section>


<?php get_footer(); ?>
