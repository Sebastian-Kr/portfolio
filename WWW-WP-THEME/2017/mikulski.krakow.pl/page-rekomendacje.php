<?php
/*
Template Name: Rekomendacje
*/
?>
<?php get_header() ?>


<div class="recommend-content">
    <div id="recomendation-anchor"></div>
    <div class="page-content-bg-top"></div>
    <div class="container">
        <div class="title text-center">
            <h1>Wyróżnienia </h1>
        </div>
        <div class="page-container">
            <div class="first-section">
                <div class="col-sm-12">

                  <!-- MAIN CONTENT  -->
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
                  <!-- END MAIN CONTENT -->

                    <div class="recomendation-slider">
                        <div class="bx-wrapper" style="max-width: 600px; margin: 0px auto;">
                          <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 420px;">
                            <div id="first-slider" style="width: auto; position: relative; transition-duration: 0.5s; transform: translate3d(0px, -929px, 0px);">
                              <div class="box bx-clone" style="float: none; list-style: outside none none; position: relative; width: 590px;">

                                <div class="wysiwyg-text-align-center">
                                  <?php the_field('wr1') ?><br>
                                </div>
                                <div class="wysiwyg-text-align-center"><br></div>
                                <p><i class="ion-more"></i></p>
                            </div>

                            <?php
                            $id = 1;
                            $wr = 'wr'.$id;
                            while (get_field($wr)): ?>
                            <div class="box bx-clone" style="float: none; list-style: outside none none; position: relative; width: 590px;">
                                <div class="wysiwyg-text-align-center"><?php the_field($wr) ?></div>
                                <p><i class="ion-more"></i></p>
                            </div>
                            <?php
                            $id++;
                            $wr = 'wr'.$id;
                            ?>
                          <?php endwhile; ?>


                          </div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="partners-content" class="partners-content">
    <div class="container">
        <div class="title text-center">
            <div id="partners-anchor"></div>
            <h2>Wieloletni współpracownicy</h2>
        </div>
        <div class="page-container">
            <div class="first-section container">
                <div class="col-sm-12">
                    <div class="col-sm-12">
                                                    <a href="<?php echo the_field('link_ww1') ?>" target="_blank" class="box col-sm-3 col-md-3">
                                <img alt="" class="img-responsive" src="<?php echo the_field('prgrm_foto1' )?>">
                            </a>
                                                    <a href="<?php echo the_field('link_ww2') ?>" target="_blank" class="box col-sm-3 col-md-3">
                                <img alt="" class="img-responsive" src="<?php echo the_field('prgrm_foto2' )?>">
                            </a>
                                                    <a href="<?php echo the_field('link_ww3') ?>" target="_blank" class="box col-sm-3 col-md-3">
                                <img alt="" class="img-responsive" src="<?php echo the_field('prgrm_foto3' )?>">
                            </a>
                                                    <a href="<?php echo the_field('link_ww4') ?>" target="_blank" class="box col-sm-3 col-md-3">
                                <img alt="" class="img-responsive" src="<?php echo the_field('prgrm_foto4' )?>">
                            </a>
                                                    <a href="<?php echo the_field('link_ww5') ?>" target="_blank" class="box col-sm-3 col-md-3">
                                <img alt="" class="img-responsive" src="<?php echo the_field('prgrm_foto5') ?>">
                            </a>
                                                    <a href="<?php echo the_field('link_ww6') ?>" target="_blank" class="box col-sm-3 col-md-3">
                                <img alt="" class="img-responsive" src="<?php echo the_field('prgrm_foto6') ?>">
                            </a>
                                                    <a href="<?php echo the_field('link_ww7') ?>" target="_blank" class="box col-sm-3 col-md-3">
                                <img alt="" class="img-responsive" src="<?php echo the_field('prgrm_foto7') ?>">
                            </a>
                                                    <a href="<?php echo the_field('link_ww8') ?>" target="_blank" class="box col-sm-3 col-md-3">
                                <img alt="" class="img-responsive" src="<?php echo the_field('prgrm_foto8' )?>">
                            </a>
                                            </div>
                </div>
                <a href="<?php echo the_field('link_ww9' )?>" target="_blank" class="col-sm-12 extra-logo">
                    <img alt="partnerzy" class="img-responsive" src="<?php echo the_field('prgrm_foto9') ?>">
                </a>
            </div>
        </div>
    </div>
    </div>



    <div id="partners-content" class="partners-content">
        <div class="container">
            <div class="title text-center">
                <h2>Partnerzy</h2>
            </div>
            <div class="page-container">
                <div class="first-section container">
                    <div class="col-sm-12">
                        <div class="col-sm-12">
                                                        <a href="<?php echo the_field('link_pr1' )?>" target="_blank" class="box col-sm-3 col-md-3">
                                    <img alt="" class="img-responsive" src="<?php echo the_field('foto_pr1' )?>">
                                </a>
                                                        <a href="<?php echo the_field('link_pr2') ?>" target="_blank" class="box col-sm-3 col-md-3">
                                    <img alt="" class="img-responsive" src="<?php echo the_field('foto_pr2') ?>">
                                </a>
                                                        <a href="<?php echo the_field('link_pr3' )?>" target="_blank" class="box col-sm-3 col-md-3">
                                    <img alt="" class="img-responsive" src="<?php echo the_field('foto_pr3') ?>">
                                </a>
                                                        <a href="<?php echo the_field('link_pr4') ?>" target="_blank" class="box col-sm-3 col-md-3">
                                    <img alt="" class="img-responsive" src="<?php echo the_field('foto_pr4' )?>">
                                </a>
                                                        <a href="<?php echo the_field('link_pr5' )?>" target="_blank" class="box col-sm-3 col-md-3">
                                    <img alt="" class="img-responsive" src="<?php echo the_field('foto_pr5' )?>">
                                </a>
                                                        <a href="<?php echo the_field('link_pr6' )?>" target="_blank" class="box col-sm-3 col-md-3">
                                    <img alt="" class="img-responsive" src="<?php echo the_field('foto_pr6' )?>">
                                </a>
                                                        <a href="<?php echo the_field('link_pr7') ?>" target="_blank" class="box col-sm-3 col-md-3">
                                    <img alt="" class="img-responsive" src="<?php echo the_field('foto_pr7') ?>">
                                </a>
                                                        <a href="<?php echo the_field('link_pr8' )?>" target="_blank" class="box col-sm-3 col-md-3">
                                    <img alt="" class="img-responsive" src="<?php echo the_field('foto_pr8' )?>">
                                </a>
                                                </div>
                    </div>
                        <a href="<?php echo the_field('link_pr9' )?>" target="_blank" class="col-sm-12 extra-logo">
                            <img alt="partnerzy" class="img-responsive" src="<?php echo the_field('foto_pr9' )?>">
                        </a>
                </div>
                <div class="second-section">
                         <div class="col-sm-12 extra-logo">
                            <div class="title">W naszym działaniu kierujemy się zasadami etyki zawodowej<br> </div>
                        </div>
                </div>
            </div>
        </div>
    </div>


    <div class="publication-content">
    <div id="publication-anchor"></div>
    <div class="container">
        <div class="title text-center">
            <h2>KONFERENCJE i WYSTĄPIENIA</h2>
        </div>

        <div class="page-container">
            <div class="first-section">
                <div class="col-sm-12">
                    <div class="recomendation-slider">
                        <div class="bx-wrapper" style="max-width: 600px; margin: 0px auto;">
                          <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 587px;">
                            <div id="second-slider" style="width: auto; position: relative; transition-duration: 0.5s; transform: translate3d(0px, -1425px, 0px);">




                              <?php $id = 1; $w = 'w'.$id; while (get_field($w)): ?>
                              <div class="box bx-clone" style="float: none; list-style: outside none none; position: relative; width: 590px;">
                                    <div class="wysiwyg-text-align-center"><ul class="wysiwyg-text-align-center"><li class="wysiwyg-text-align-center">
                                    <?php the_field($w) ?>
                                    </li></ul></div>
                                    <p><i class="ion-more"></i></p>
                                </div>
                              <?php $id++; $w = 'w'.$id;  endwhile; ?>


                              </div></div></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<aside class="panel-box">
                <a class="recomendation-anchor panel-icon recomendation" href="javascript:void(0);"><span>Rekomendacje</span><i class="ion-ios-chatboxes-outline"></i></a>
                <a class="partners-anchor panel-icon recomendation" href="javascript:void(0);"><span>Partnerzy</span><i class="fa fa-handshake-o" aria-hidden="true"></i></a>
                <a class="publication-anchor recomendation panel-icon" href="javascript:void(0);"><span>Wystąpienia</span><i class="ion-ios-bookmarks-outline"></i></a>
            </aside>

<?php get_footer() ?>
