<?php /*Template Name: Customer*/?>

<?php get_header(); ?>
<?php get_template_part('special_modules/prgrm', 'header');?>

<div class="main-bg-container2 customers superline pb90">
<div class="container "><div class="row">

  <div class="offset-lg-6 col-lg-6 mt50 md-center  textbox1">

  <h2 class="mb40"><?php the_field('subtitle2') ?></h2>
  <?php get_template_part('special_modules/prgrm', 'main');?>

</div>

</div></div>


<section class="mt0 mb0">

  <div class="container animate"><div class="row icon_section1">
  <?php if ( have_rows('icon_section1') ): ?>
      <?php while ( have_rows('icon_section1') ) : the_row(); ?>

  <div class="col-md-4  col-sm-6 flex-center">
    <div class="icon bg-std mb30 mt50"></div>
    <h5><?php the_sub_field('icon_section1_desc')?></h5>
  </div>

      <?php endwhile; ?>
  <?php endif; ?>
  </div></div>

</section>
</div>
<!-- end main main-bg-container -->

<section class="mt0 bg-std every-company" style="background-image: url('<?php the_field('foto_section1_foto')?>')">
  <div class="container"><div class="row">

<div class="col-xl-6 col-lg-7 col-md-9  md-center animate"><?php the_field('foto_section1')?></div>
<div class="col-md-6"></div>

  </div></div>
</section>


<section class="animate section-more superline" >
  <div class="container"><div class="row">

<?php if ( have_rows('section_more') ): ?>
    <?php while ( have_rows('section_more') ) : the_row(); ?>

<div class="col-lg-6">
  <div class="content ">
    <h5><?php the_sub_field('section_more_title') ?></h5>
<p><?php the_sub_field('section_more_desc') ?></p>
  </div>
</div>

    <?php endwhile; ?>
<?php endif; ?>

  </div></div>
</section>


<section class=" icon_section3 gradient2 bg-std mb0 pt90 pb70 " >
  <div class="container">
    <div class="row"><div class="col-md-12 ">
    <h2>What we provide?</h2>
    </div></div>

    <div class="row animate">
<?php if ( have_rows('icon_section2') ): ?>
    <?php while ( have_rows('icon_section2') ) : the_row(); ?>
      <div class="col-lg-4 col-md-6">

        <div class="content">
          <div class="iconbox"><div class="icon bg-std "></div></div>
          <h6><?php the_sub_field('icon_section2_desc')?></h6>
        </div>

      </div>
    <?php endwhile; ?>
<?php endif; ?>
</div></div>
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
