<?php /*Template Name: PORTFOLIO*/?>

<?php get_header(); ?>





<div class="grid2">
  <div class="item bg-780 mobihide" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
  </div>
<div class="item item-text fade-in-element2">
  <h1><?php if (get_field('subtitle')) { echo the_field('subtitle');} else {echo the_title();} ?></h1>
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
<div  id="portfiliolink" class="btn"><?php echo __('[:pl]Portfolio[:en]Portfolio'); ?></div>
</div>
</div>



  <div id="sliderVJS1" class="grid3-slider">
  <div class="item  item-text animate">
  <h3><?php the_field('slider1_title') ?></h3>
    <p><?php the_field('slider1_desc') ?></p>
  <div class="arrows">
    <div class="arrow-cont"><div id="arrow-left" class="arrow"></div></div>
    <div class="arrow-cont"><div id="arrow-right" class="arrow"></div></div>
  </div>
  </div>
  <div class="item slider-content">
<?php
$count = 1;
if ( have_rows('slider1_items') ): ?>
    <?php while ( have_rows('slider1_items') ) : the_row(); ?>
      <div class="slide slide<?php echo $count ?>" style="background-image: url('<?php the_sub_field('slider1_item'); ?>')"></div>
<?php $count++ ?>
    <?php endwhile; ?>
<?php endif; ?>
  </div>
  </div>

<div id="sliderVJS2" class="grid3-slider">
<div class="item slider-content">

  <?php
  $count = 1;
  if ( have_rows('slider2_items') ): ?>
      <?php while ( have_rows('slider2_items') ) : the_row(); ?>
        <div class="slide slide<?php echo $count ?>" style="background-image: url('<?php the_sub_field('slider2_item'); ?>')"></div>
  <?php $count++ ?>
      <?php endwhile; ?>
  <?php endif; ?>

</div>
<div class="item  animate item-text">
  <h3><?php the_field('slider2_title') ?></h3>
    <p><?php the_field('slider2_desc') ?></p>

  <div class="arrows">
    <div class="arrow-cont"><div id="arrow-left" class="arrow"></div></div>
    <div class="arrow-cont"><div id="arrow-right" class="arrow"></div></div>
  </div>
</div>
</div>



<?php if (is_page(16) | (is_page(20))): ?>
  <div id="sliderVJS3" class="grid3-slider">
    <div class="item  item-text animate">
      <h3><?php the_field('slider3_title') ?></h3>
        <p><?php the_field('slider3_desc') ?></p>

      <div class="arrows">
        <div class="arrow-cont"><div id="arrow-left" class="arrow"></div></div>
        <div class="arrow-cont"><div id="arrow-right" class="arrow"></div></div>
      </div>
    </div>
  <div class="item slider-content">

    <?php
    $count = 1;
    if ( have_rows('slider3_items') ): ?>
        <?php while ( have_rows('slider3_items') ) : the_row(); ?>
          <div class="slide slide<?php echo $count ?>" style="background-image: url('<?php the_sub_field('slider3_item'); ?>')"></div>
    <?php $count++ ?>
        <?php endwhile; ?>
    <?php endif; ?>
  </div>
  </div>
<?php endif; ?>

<div id="portfilio"></div>

<?php get_template_part('content', 'gallery') ?>
<?php get_template_part('content', 'add_desc') ?>
<?php get_footer(); ?>
