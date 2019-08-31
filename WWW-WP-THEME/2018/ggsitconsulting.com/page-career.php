<?php /*Template Name: Career*/?>

<?php get_header(); ?>
<?php get_template_part('special_modules/prgrm', 'header');?>

<div class="main-bg-container career pb90 superline">
<div class="container"><div class="row"><div class="col-lg-6 mt50 md-center ">

  <h2 class="mb40"><?php the_field('subtitle2') ?></h2>
  <?php get_template_part('special_modules/prgrm', 'main');?>

</div>

</div></div>

<section class="offer-loop mt50 mb0 ">

  <div class="container"><div class="row">

<?php if ( have_rows('offer-loop') ): ?>
  <?php $counter=1; ?>
    <?php while ( have_rows('offer-loop') ) : the_row(); ?>
      <div class="col-lg-9">
        <div class="offer-item <?php if ($counter!=1) {echo 'animate';} ?>">
        <div class="content ">
          <h4><?php the_sub_field('offer-loop-title') ?></h4>
          <p><?php the_sub_field('offer-loop-desc') ?></p>
        </div>
      <div class="buttons">
        <a href="<?php the_sub_field('offer-loop-link')?>"><button class="btn4 gradient"><span>Read more</span></button></a>
        <a href="<?php echo get_permalink(17)?>"><button class="btn3"><span>Contact Us</span> </button></a>
      </div>
        </div>
      </div>
      <?php $counter++; ?>
    <?php endwhile; ?>
<?php endif; ?>

<div class="col-md-12"><?php the_field('instagrambox')?></div>
  </div></div>

</section>

</div>
<!-- end main main-bg-container -->

<section class="bg-std mb0  mt0 joinus-container" style="background-image: url('<?php the_field('foto_section1_foto')?>')">
  <div class="container"><div class="row">

    <div class="col-md-7  animate md-center"><?php the_field('section_text')?></div>
<div class="col-md-5"></div>

  </div></div>
</section>



<?php get_footer(); ?>
