<div id="carouselExampleControls" class=" mt50 container carousel slide" data-ride="carousel">
  <div class="carousel-inner row">


    <?php if ( have_rows('review_section') ): ?>
      <?php $counter=0; ?>
        <?php while ( have_rows('review_section') ) : the_row(); ?>
<?php $counter++ ?>
          <div class="col-md-12 carousel-item <?php if ($counter==1) {echo 'active';} ?>">
            <?php the_sub_field('review_section_item')?>
          </div>

        <?php endwhile; ?>
    <?php endif; ?>

  </div>
  <a class="arrow arrow-left carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"></a>
  <a class="arrow arrow-right carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"></a>

</div>
