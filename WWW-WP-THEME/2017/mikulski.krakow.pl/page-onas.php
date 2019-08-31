<?php
/*
Template Name: O nas
*/
?>

<?php get_header() ?>
<div class="page-content">
    <div class="page-content-bg-top"></div>
    <div class="container">
        <div class="title text-center">

            <div id="main_title"><h1>O nas</h1></div>
        </div>
        <div class="page-container about-slider-content">
            <div class="col-sm-12 col-md-6">


                <!-- bootstrap slider /////////////////////////////////////////////// -->
                <?php get_template_part( 'content', 'slider' );?>
                <!-- bootstrap slider /////////////////////////////////////////////// -->




            </div>


            <div class="col-sm-12 col-md-6 about-content">



                <div class="about-title"></div>
                <div class="about-text">

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

                </div>
            </div>
        </div>
    </div>
    <div class="clear" style="height:80px;"></div>
</div>



<?php get_footer() ?>
