<section id="reviews-section" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/dentysta-krakow-bg-review.jpg')">

  <h2>Najlepszą rekomendacją są opinie naszych Pacjentów</h2>

  <h4>Wszystkie komentarze są prawdziwe
  i zaczerpnięte z naszej strony w serwisie <a target="blank" href="https://www.facebook.com/krakowartdent/">Facebook.</a></h4>

<div id="main-slider">

        <div id="main-slider3" data-pause="hover" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#main-slider3" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider3" data-slide-to="1"></li>
            <li data-target="#main-slider3" data-slide-to="2"></li>
            <!-- <li data-target="#main-slider3" data-slide-to="3"></li> -->
          </ol>
          <div id="reviews-cont" class="carousel-inner" role="listbox">
            <div class="item active">
              <!-- start the loop -->
       <?php
       $args = array('cat'=> '7');
       $query = new WP_Query( $args);
       $counter = 1;
       ?>
       <?php if ( $query->have_posts() ) : while ( $query->have_posts() )
           : $query->the_post();

          if ($counter==4) {
            // echo '</div><div class="carousel-item">';
            echo '</div><div class="item">';
            $counter = 1;
          }


// <!-- ////////////////////////////// add single review -->
           get_template_part('content', 'review');
// <!-- //////////////////////////////  end add single review -->
          $counter++;


        endwhile; ?>
       <?php endif; ?>

       <!--  end the loop-->

       </div><!-- end last item -->

             <!-- <a class="left carousel-control" href="#main-slider3" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="right carousel-control" href="#main-slider3" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right"></span>
         <span class="sr-only">Next</span>
       </a> -->

       </div><!-- end carousel-inner -->
       </div><!-- end main-slider3 -->
       </div><!-- end main-slider -->
</section>
