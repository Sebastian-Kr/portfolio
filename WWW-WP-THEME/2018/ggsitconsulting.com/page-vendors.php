<?php /*Template Name: Vendors*/?>

<?php get_header(); ?>
<?php get_template_part('special_modules/prgrm', 'header');?>

<div class="main-bg-container superline">
<div class="container"><div class="row"><div class="col-lg-6 mt50 md-center ">

  <h2 class="mb40"><?php the_field('subtitle2') ?></h2>
  <?php get_template_part('special_modules/prgrm', 'main');?>

</div>

</div></div>


<section class="mt0 mb0 pb90 animate">

  <div class="container"><div class="row icon_section1">
  <?php if ( have_rows('icon_section1') ): ?>
      <?php while ( have_rows('icon_section1') ) : the_row(); ?>

  <div class="col-md-4 col-sm-6  flex-center">
    <div class=" icon bg-std mb30 mt50"></div>
    <h5><?php the_sub_field('icon_section1_desc')?></h5>
  </div>

      <?php endwhile; ?>
  <?php endif; ?>
  </div></div>

</section>
</div>
<!-- end main main-bg-container -->

<section class="mt0 bg-std joinus-container" style="background-image: url('<?php the_field('foto_section1_foto')?>')">
  <div class="container animate"><div class="row">

<div class="col-md-6"></div>
<div class="col-md-6 text-md-right md-center"><?php the_field('foto_section1')?></div>

  </div></div>
</section>



<section class="icon_section2 mt100 superline" >
  <div class="container animate">
    <div class="row">
<?php if ( have_rows('icon_section2') ): ?>
    <?php while ( have_rows('icon_section2') ) : the_row(); ?>
      <div class="col-lg-4 col-md-6 ">

        <div class="content">
          <div class="iconbox gradient"><div class="icon bg-std "></div></div>
          <h6><?php the_sub_field('icon_section2_desc')?></h6>
        </div>

      </div>
    <?php endwhile; ?>
<?php endif; ?>
</div></div>
</section>



<section class="testimonials_slider  gradient bg-std mb0">
  <h2>Testimonials</h2>
  <div id="carouselExampleControls" class=" animate carousel slide" data-ride="carousel"  data-interval="7000">
    <div class="carousel-inner" role="listbox">


<?php if ( have_rows('testimonials') ): ?>
<?php $counter = 1; ?>
    <?php while ( have_rows('testimonials') ) : the_row(); ?>

<div class="carousel-item <?php if ($counter == 1) {echo 'active';} ?>">
  <div class="testimonials_content"><p><?php the_sub_field('testimonials_content') ?></p></div>
<div class="testimonials_author"><p><?php the_sub_field('testimonials_author') ?></p></div>
</div>
<?php $counter++; ?>
    <?php endwhile; ?>
<?php endif; ?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>


<section class="main-bg-container mt0 mb0 pt100 pb100 contactus superline" >
  <div class="container mt20 mb20"><div class="row ">

<div class="col-md-6 md-center animate"><?php the_field('question_section')?></div>
<div class="col-md-6 flex-center">
    <a class="" href="<?php echo get_permalink(17) ?>"><button class="gradient btn4 big"><span>Feel free to contact Us!</span></button></a>
</div>

  </div></div>
</section>





<?php get_footer(); ?>
