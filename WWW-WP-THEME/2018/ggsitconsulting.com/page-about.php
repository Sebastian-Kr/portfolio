<?php /*Template Name: About Us*/?>

<?php get_header(); ?>
<?php get_template_part('special_modules/prgrm', 'header');?>


<div class="main-bg-container superline aboutus">
<div class="container"><div class="row"><div class="col-lg-6 mt50 md-center ">

  <h2 class="mb40"><?php the_field('subtitle2') ?></h2>
  <?php get_template_part('special_modules/prgrm', 'main');?>

</div>

</div></div>


<!-- TEAM -->
<div class="container team mb90">
  <?php if ( have_rows('team') ): ?>
    <?php $counter=1; ?>
      <?php while ( have_rows('team') ) : the_row(); ?>
<?php if (($counter % 2) == 1) {echo '<div class="row animate">';} ?>
<div class="col-md-6">
<img src="  <?php the_sub_field('team_foto') ?>" alt="">
<div class="content">
  <h6><?php the_sub_field('team_name') ?></h5>
  <p class="strong mb30"><?php the_sub_field('team_subtitle') ?></p>
  <p><?php the_sub_field('team_desc') ?></p>
</div>

</div>
<?php if (($counter % 2) == 0) {echo '</div>';} ?>
<?php $counter++; ?>
      <?php endwhile; ?>
  <?php endif; ?>
</div>
<!-- End row/container -->
</div>
<!-- End main-bg-container -->


<!-- TEAM FOTO -->
<img class="team_allfoto d-sm-none mt90" src="<?php the_field('team_allfoto') ?>" alt="">

<section class="joinus-container bg-std mb0 mt0">
  <div class="container"><div class="row animate">

<div class="col-lg-6 col-md-8 md-center"><?php the_field('joinus_text')?></div>
<div class="offset-lg-1 col-md-4 col-lg-5 flex-center">
  <a href="<?php echo get_permalink(14) ?>"><button class="btn1">Join Us!</button></a>
</div>

  </div></div>
</section>



<?php get_footer(); ?>
