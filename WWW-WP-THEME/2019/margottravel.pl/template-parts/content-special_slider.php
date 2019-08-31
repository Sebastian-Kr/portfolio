


  <!-- carousel code -->
  <div id="carouselExampleIndicators" class="carousel slide" data-interval="9000">
    <h2><?php the_field('slider_section_title')?></h2>
    <div class="carousel-inner">


<?php if ( have_rows('special_slider_home') ):
$counter = 0;
  ?>
    <?php while ( have_rows('special_slider_home') ) : the_row(); ?>
<?php $counter++ ?>

      <div class=" carousel-item <?php if ($counter == 1) {echo 'active';} ?>">
        <div class="container">


          <div class="row" data-animation="animated bounceInRight">
            <div class="col-md-3">
              <img src="<?php the_sub_field('special_slider_home_foto1')?>" alt="">
            </div>
            <div class="col-md-6 text-column">
                   <?php the_sub_field('special_slider_home_text1')?>
            </div>
          </div>

          <div class="row" data-animation="animated bounceInLeft">
            <div class="col-md-6 offset-md-3 text-column">
                   <?php the_sub_field('special_slider_home_text2')?>
            </div>
            <div class="col-md-3">
            <img src="<?php the_sub_field('special_slider_home_foto2')?>" alt="">
            </div>
          </div>


        </div>
      </div>

    <?php endwhile; ?>
<?php endif; ?>




    <!-- controls -->
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
  </div>

</div>
