<section class="carousel1_section std-border animate">
  <div class="container">

<div class="row">
  <div class="col-md-12 text-center">

<?php the_field('carousel_text')?>
  </div>
</div>

<div class="row">

  <div class="col-md-12">

    <div class="slide-items1 mt">


    <?php if ( have_rows('carousel_loop') ): ?>
        <?php while ( have_rows('carousel_loop') ) : the_row(); ?>

    <div class="slide_item">
      <a href="<?php the_sub_field('carousel_item_url') ?>">
    <img src="<?php the_sub_field('carousel_item_logo')?>" alt="">
    </a></div>

    <?php endwhile; ?>
    <?php endif; ?>

    </div>


  </div>
</div>

</div>

</section>
