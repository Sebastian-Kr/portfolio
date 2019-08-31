<?php
/*
Template Name: Kontakt
*/
?>
<?php get_header() ?>

<div class="page-content">
    <div class="page-content-bg-top"></div>
    <div class="container">
        <div class="title text-center">
              <div id="main_title"><h1>Kontakt</h1></div>
        </div>
        <div class="page-container contact-container">
            <div class="col-sm-12 col-md-7">
                <div class="contact-content">
                    <div class="text-box">
                        <div class="col-sm-6">
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

                        </div>

                        <div class="col-sm-6">

                          <?php the_field('kontakt-col2') ?>

                        <div class="text-box-bottom">
                            <a target="_blank" href="http://www.google.com/maps/place/50.068103,19.963038/@50.068103,19.963038,17z" class="show-google">wyznacz trasę</a>
                        </div>
                        </div>
                        <br><br><br>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="contact-content-form">
                <div class="title-box">
                <div id="contact-form">
                  <div class="text-box">

                  <div class="pencil-box">
                   <span class="pencil"><i class="ion-ios-compose-outline"></i></span>
                   <span>Jesteśmy do Państwa dyspozycji</span>
                  </div>
                  <?php echo do_shortcode('[contact-form-7 id="492" title="Formularz 1"] ')?>

                 </div>
                </div>
                </div>
                <!-- //////////////////////////// -->
                <!-- TESTOWA TREŚĆ SHORTCODA  -->
                <!-- /////////////// -->
                </div>
            </div>
            <div class="col-sm-12 col-md-5">
                <div class="contact-content map-container">
                            <div id="map-canvas">
                            <img src="<?php echo get_template_directory_uri() ?>/images/front/map-contact.jpg">
                        </div>
                        </div>
                        </div>
            <br><br><br><br>
            <div class="col-sm-12">
            </div>
        </div>
    </div>
</div>


<?php get_footer() ?>
