<?php
/*
Template Name: Zespół
*/
?>
<?php get_header() ?>


<div class="page-content">
    <div class="page-content-bg-top"></div>
    <div class="container">
        <div class="title text-center">
            <div id="main_title"><h1><?php echo the_title() ?></h1></div>
        </div>
        <div class="page-container team-container">

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


            <section id="team-list">
                   <?php
                   $args = array('cat'=> 3, 'order' => 'ASC');
                   $query = new WP_Query( $args);

                   ?>
                   <?php if ( $query->have_posts() ) : while ( $query->have_posts() )
                       : $query->the_post();
                        //  single loop start
                       ?>

                                               <div class="col-sm-12 col-md-6 col-lg-4">
                                       <div class="team-entry">
                                           <img alt="Kancelaria prawna - <?php echo the_title() ?>" src="<?php the_post_thumbnail_url(); ?> ">
                                               <h4><?php echo the_title() ?></h4>
                                               <span><?php echo the_field('subtitle1') ?></span>
                                               <a href="<?php echo get_permalink() ?>" class="more">zobacz</a>
                                       </div>
                                   </div>
                 <?php  // single loop end
                endwhile; ?>
                   <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            </section>


        </div>
    </div>
</div>


<?php get_footer() ?>
