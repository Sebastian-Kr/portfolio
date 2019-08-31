<?php get_header(); ?>


<aside class="panel-box">
    <a class="specialize-anchor panel-icon" href="javascript:void(0);"><span>Specjalizacje</span><i class="ion-ios-briefcase-outline"></i></a>
    <a class="team-anchor panel-icon" href="javascript:void(0);"><span>Zespół</span><i class="ion-ios-people-outline"></i></a>
    <a class="price-anchor panel-icon" href="javascript:void(0);"><span>Rekomendacje</span><i class="ion-ios-chatboxes-outline"></i></a>
    <a class="country-anchor panel-icon" href="javascript:void(0);"><span>Zasięg</span><i class="ion-android-globe"></i></a>
    <a class="newsletter-anchor panel-icon" href="javascript:void(0);"><span>Aktualności</span><i class="fa fa-newspaper-o" aria-hidden="true"></i></a>
</aside>


        <div class="main-content">
    <section class="main-boxes">
        <div id="specialize-anchor"></div>
        <div class="container">
            <div class="title text-center">
                <h2><?php the_field('s1-t') ?></h2>
                <p>
                    <span><?php the_field('s1-o') ?></span>
                </p>
            </div>
        </div>
        <div id="main-bg-container" class="background-items-container">

            <div  class="image" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/front/mikulski-kancelaria.jpg');"></div>
            <div class="glass"></div>


        </div>
        <div class="container box-items front-page">


            <div class="box-item">
                <a class="box-content" href="<?php the_field('s1-l1') ?>">
                    <p><?php echo iworks_orphan(get_field('s1-kt1')) ?></p>
                    <span class="box-description"><?php the_field('s1-ko1') ?></span>
                    <input data-category="3" type="hidden">
                </a>
            </div>

            <div class="box-item">
                <a class="box-content" href="<?php the_field('s1-l2') ?>">
                    <p><?php the_field('s1-kt2') ?></p>
                    <span class="box-description"><?php the_field('s1-ko2') ?></span>
                    <input data-category="3" type="hidden">
                </a>
            </div>


            <div class="box-item">
                <a class="box-content" href="<?php the_field('s1-l3') ?>">
                    <p><?php the_field('s1-kt3') ?></p>
                    <span class="box-description"><?php the_field('s1-ko3') ?></span>
                    <input data-category="3" type="hidden">
                </a>
            </div>

            <div class="box-item test">

              <!-- <a class="box-content" href="javascript:void(0);" onclick="progremo_delay(http://allegro.pl)"> -->
                <a class="box-content" href="<?php the_field('s1-l4') ?>">
                    <p><?php the_field('s1-kt4') ?></p>
                    <span class="box-description"><?php the_field('s1-ko4') ?></span>
                    <input data-category="3" type="hidden">
                <!-- </a> -->
                </a>
            </div>

            <div class="box-item">
                <a class="box-content" href="<?php the_field('s1-l5') ?>">
                    <p><?php the_field('s1-kt5') ?></p>
                    <span class="box-description"><?php the_field('s1-ko5') ?></span>
                    <input data-category="3" type="hidden">
                </a>
            </div>

            <div class="box-item">
                <a class="box-content" href="<?php the_field('s1-l6') ?>">
                    <p><?php the_field('s1-kt6') ?></p>
                    <span class="box-description"><?php the_field('s1-ko6') ?></span>
                    <input data-category="3" type="hidden">
                </a>
            </div>

            <div class="box-item">
                <a class="box-content" href="<?php the_field('s1-l7') ?>">
                    <p><?php the_field('s1-kt7') ?></p>
                    <span class="box-description"><?php the_field('s1-ko7') ?></span>
                    <input data-category="3" type="hidden">
                </a>
            </div>

            <div class="box-item">
                <a class="box-content" href="<?php the_field('s1-l8') ?>">
                    <p><?php the_field('s1-kt8') ?></p>
                    <span class="box-description"><?php the_field('s1-ko8') ?></span>
                    <input data-category="3" type="hidden">
                </a>
            </div>


                        <div class="clear"></div>
        </div>

    </section>
    <div class="clear" id="bob"></div>
    <div class="box-shadow"></div>
    <section class="main-people">

        <div id="team-anchor"></div>
        <div class="container">
            <div class="people text-center">
                <h2><?php the_field('s2-t') ?></h2>
                <p>
                    <span><?php the_field('s2-o') ?></span>
                </p>
                <a href="/zespol" class="more">Poznaj zespół</a>
            </div>
        </div>
    </section>
    <div class="clear"></div>
    <section class="main-price">
        <div class="box-shadow"></div>
        <div id="price-anchor"></div>
        <div class="container">
            <div class="title price-box text-center">

                    <h2><?php the_field('s3-t') ?></h2>
                    <p><?php the_field('s3-o') ?></p>
                    <a href="/rekomendacje" class="more">Zobacz rekomendacje</a>
            </div>
        </div>
    </section>

  <section class="country-map" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/front/kancelaria4.jpg')">
        <div id="country-anchor"></div>
        <div class="map-background"></div>
        <div class="map-galss"></div>
        <div class="map-info">
            <h3 class="title"><?php the_field('s4-t') ?></h3>
            <span class="line"></span>
            <span class="subtitle"><?php the_field('s1-o') ?></span>
            <div class="map-countries">
                <div class="country-row">
                    <div class="country-item first"><a href="<?php echo home_url() ?>/kraj/austria">Austria</a></div>
                    <div class="country-item second"><a href="<?php echo home_url() ?>/kraj/warszawa">Warszawa</a></div>
                    <div class="clearfix"></div>
                </div>
                <div class="country-row">
                    <div class="country-item third"><a href="<?php echo home_url() ?>/kraj/wegry">Węgry</a></div>
                    <div class="country-item fourth"><a href="<?php echo home_url() ?>/o-nas">Kraków</a></div>
                    <div class="country-item fifth"><a href="<?php echo home_url() ?>/kraj/niemcy">Niemcy</a></div>
                    <div class="clearfix"></div>
                </div>
                <div class="country-row">
                    <div class="country-item sixth"><a href="<?php echo home_url() ?>/kraj/hiszpania">Hiszpania</a></div>
                    <div class="country-item seventh"><a href="<?php echo home_url() ?>/kraj/wlochy">Włochy</a></div>
                    <div class="clearfix"></div>
                </div>
                <div class="country-row">
                    <div class="country-item eight"><a href="<?php echo home_url() ?>/kraj/skandynawia">Skandynawia</a></div>
                    <div class="country-item nine"><a href="<?php echo home_url() ?>/kraj/balkany">Bałkany</a></div>
                    <div class="clearfix"></div>
                </div>
                <a href="/krakow" class="more">więcej</a>
            </div>
        </div>
    </section>

    <div class="clear"></div>
    <section class="main-newsletter">
         <div id="newsletter-anchor"></div>
        <div class="container">
            <div class="title text-center">
                <h2><?php the_field('s5-t') ?></h2>
                <p>
                    <span><?php the_field('s5-o') ?></span>
                </p>
            </div>
            <a class="third-prev" href="javascript:void(0);"></a>
            <a class="third-next" href="javascript:void(0);"></a>
            <div class="lSSlideOuter "><div class="lSSlideWrapper usingCss" style="transition-duration: 600ms; transition-timing-function: ease;">
              <div class="slider-content small-slider lightSlider lSSlide" style="min-height: 460px; width: 4436.67px; transform: translate3d(-2016.67px, 0px, 0px); height: 428px; padding-bottom: 0%;">




                <?php $query = new WP_Query( 'cat=4' ); ?>
                <?php $id = 1152 ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php $id++; ?>

                <div class="box col-sm-12 col-md-3 lslide active" style="width: 285px; margin-right: 10px;">
        <div class="small-box">
          <div class="main-title">Aktualności</div>
        <div class="date">data dodania wpisu: <?php echo get_the_date('d-m-Y') ?> r.</div>
        <div class="title-box"><?php
        $title  = the_title('','',false);
        if(strlen($title) > 55):
            echo trim(substr($title, 0, 55)).'...';
        else:
            echo $title;
        endif;
         ?></div>

        <p class="border"></p>
        <div class="text"> <?php echo substr(get_the_excerpt(), 0, 200).'...'; ?></div>
        <a  href="<?php the_permalink() ?>" class="more">więcej</a>
        </div>
        </div>

              <?php endwhile;
              wp_reset_postdata();
              else : ?>
            <?php endif; ?>






          </div><div class="lSAction"><a class="lSPrev">a</a><a class="lSNext">b</a></div></div></div>

        </div>
    </section>
</div>


<?php get_footer() ?>
