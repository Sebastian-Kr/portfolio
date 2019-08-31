<?php
/*
Template Name: Regulamin
*/
?>

<?php get_header() ?>


<div class="page-content">
    <div class="page-content-bg-top"></div>
    <div class="container">
        <div class="title text-center">
            <h1><?php echo the_title() ?></h1>
        </div>
        <div class="page-container about-slider-content">
            <div class="col-sm-12 col-md-12">

            <div class="col-sm-12 col-md-12 about-content">
                <div class="about-title"><?php echo the_title() ?></div>
                <div class="about-text">

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
                </div>
            </div>
        </div>
    </div>
    <div class="clear" style="height:80px;"></div>
</div>

            <div class="clear"></div>
<div class="box-shadow-footer"></div>


</div>

<?php get_footer() ?>
