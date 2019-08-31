<?php
/*
Template Name: Doświadczenie
*/
?>
<?php get_header() ?>

<div class="page-content">

  <div class="page-content-bg-top"></div>
  <div class="container">
      <div class="title text-center">
          <h1>Doświadczenie</h1>
      </div></div>

    <div class="container news-content ">
        <div class="page-container">
            <div class="col-lg-12">
                <div class="first-row first" style="margin-bottom:58px;">
                        <a class="prev" href="javascript:void(0);" style="display: block;"></a>
                        <a class="next" href="javascript:void(0);" style="display: block;"></a>
                                        <div class="title-news-slider">Nasze Ważniejsze sprawy sądowe</div>
                                        <div class="lSSlideOuter "><div class="lSSlideWrapper usingCss"><div class="slider-content first-slider lightSlider lSSlide" style="width: 5310px; height: 335px; padding-bottom: 0%; transform: translate3d(0px, 0px, 0px);">




<?php $query = new WP_Query( 'cat=7' ); ?>
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="box col-sm-12 col-md-3 lslide active" style="width: 285px; margin-right: 10px;">
<div class="small-box">
<div class="date">data dodania wpisu: <?php echo get_the_date('d-m-Y') ?> r.</div>
<div class="title-box"><?php
$title  = the_title('','',false);
if(strlen($title) > 40):
    echo trim(substr($title, 0, 40)).'...';
else:
    echo $title;
endif;
 ?></div>

<p class="border"></p>
<div class="text"> <?php echo substr(get_the_excerpt(), 0, 200).' ...'; ?></div>
<a  href="<?php the_permalink() ?>" class="more">więcej</a>
</div>
</div>
      <?php endwhile;
      wp_reset_postdata();
      else : ?>
<?php endif; ?>



                    </div><div class="lSAction"><a class="lSPrev"></a><a class="lSNext"></a></div></div></div>
                    <div class="clear"></div>
                </div>


                <div class="first-row second">
                        <a class="second-prev" href="javascript:void(0);" style="display: block;"></a>
                        <a class="second-next" href="javascript:void(0);" style="display: block;"></a>
                                        <div class="title-news-slider">Nasze Komentarze</div>
                                        <div class="lSSlideOuter ">
                                          <div class="lSSlideWrapper usingCss">
                                            <div class="slider-content second-slider lightSlider lSSlide" style="width: 2655px; height: 335px; padding-bottom: 0%; transform: translate3d(0px, 0px, 0px);">





                                          <?php $query = new WP_Query( 'cat=6' ); ?>
                                                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                                                  <div class="box col-sm-12 col-md-3 lslide active" style="width: 285px; margin-right: 10px;">
                                          <div class="small-box">
                                          <div class="date">data dodania wpisu: <?php echo get_the_date('d-m-Y') ?> r.</div>
                                          <div class="title-box"><?php
                                          $title  = the_title('','',false);
                                          if(strlen($title) > 40):
                                              echo trim(substr($title, 0, 40)).'...';
                                          else:
                                              echo $title;
                                          endif;
                                           ?></div>

                                          <p class="border"></p>
                                          <div class="text"><?php echo substr(get_the_excerpt(), 0, 200).' ...'; ?></div>
                                          <a href="<?php the_permalink() ?>" class="more">więcej</a>
                                          </div>
                                          </div>
                                                <?php endwhile;
                                                wp_reset_postdata();
                                                else : ?>
                                          <?php endif; ?>




                    </div><div class="lSAction"><a class="lSPrev"></a><a class="lSNext"></a></div></div></div>
                    <div class="clear"></div>
                </div>
                <div class="first-row third">
                    <a class="third-prev" href="javascript:void(0);" style="display: block;"></a>
                    <a class="third-next" href="javascript:void(0);" style="display: block;"></a>


                                        <div class="title-news-slider">Bieżące informacje prawne</div>
                                        <div class="lSSlideOuter "><div class="lSSlideWrapper usingCss"><div class="slider-content third-slider lightSlider lSSlide" style="width: 3835px; height: 335px; padding-bottom: 0%; transform: translate3d(0px, 0px, 0px);">


                                          <?php $query = new WP_Query( 'cat=5' ); ?>
                                                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                                                  <div class="box col-sm-12 col-md-3 lslide active" style="width: 285px; margin-right: 10px;">
                                          <div class="small-box">
                                          <div class="date">data dodania wpisu: <?php echo get_the_date('d-m-Y') ?> r.</div>
                                          <div class="title-box"><?php
                                          $title  = the_title('','',false);
                                          if(strlen($title) > 40):
                                              echo trim(substr($title, 0, 40)).'...';
                                          else:
                                              echo $title;
                                          endif;
                                           ?></div>

                                          <p class="border"></p>
                                          <div class="text"> <?php echo substr(get_the_excerpt(), 0, 200).' ...'; ?></div>
                                          <a href="<?php the_permalink() ?>" class="more">więcej</a>
                                          </div>
                                          </div>
                                                <?php endwhile;
                                                wp_reset_postdata();
                                                else : ?>
                                          <?php endif; ?>




                    </div><div class="lSAction"><a class="lSPrev"></a><a class="lSNext"></a></div></div></div>
                     <div class="clear"></div>
                </div>
                <div class="first-row fourth" style="margin-bottom:58px;">

                    <a class="fourth-prev" href="javascript:void(0);" style="display: block;"></a>
                    <a class="fourth-next" href="javascript:void(0);" style="display: block;"></a>

                                        <div class="title-news-slider">Aktualności</div>
                                        <div class="lSSlideOuter "><div class="lSSlideWrapper usingCss"><div class="slider-content fourth-slider lightSlider lSSlide" style="width: 2065px; height: 335px; padding-bottom: 0%; transform: translate3d(0px, 0px, 0px);">

                                          <?php $query = new WP_Query( 'cat=4' ); ?>
                                                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                                                  <div class="box col-sm-12 col-md-3 lslide active" style="width: 285px; margin-right: 10px;">
                                          <div class="small-box">
                                          <div class="date">data dodania wpisu: <?php echo get_the_date('d-m-Y') ?> r.</div>
                                          <div class="title-box"><?php
                                          $title  = the_title('','',false);
                                          if(strlen($title) > 40):
                                              echo trim(substr($title, 0, 40)).'...';
                                          else:
                                              echo $title;
                                          endif;
                                           ?></div>

                                          <p class="border"></p>
                                          <div class="text"> <?php echo substr(get_the_excerpt(), 0, 200).' ...'; ?></div>
                                          <a href="<?php the_permalink() ?>" class="more">więcej</a>
                                          </div>
                                          </div>
                                                <?php endwhile;
                                                wp_reset_postdata();
                                                else : ?>
                                          <?php endif; ?>

                                           </div><div class="lSAction"><a class="lSPrev"></a><a class="lSNext"></a></div></div></div>
                     <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer() ?>
