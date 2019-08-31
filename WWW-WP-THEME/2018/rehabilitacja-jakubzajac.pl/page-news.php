<?php /*Template Name: News*/?>
<?php get_header(); ?>
<?php get_template_part('special_modules/prgrm', 'header');?>
<?php get_template_part('special_modules/prgrm', 'main');?>

<section class="news-list">
  <div class="container">

      <?php
      $args = array('cat'=> '3');
      $query = new WP_Query( $args);
      ?>
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() )
          : $query->the_post(); ?>
            <div class="row news-item">
          <div class="col-sm-4  ">
            <a href="<?php the_permalink(); ?>">

                <div class="news-thumb" style="background-image: url('<?php echo the_field('thumb_add'); ?>');"></div>
</a>
          </div>

      <div class="col-md-7 col-sm-8">

        <div class="">


              <h3><?php echo get_the_title();?></h3>
            <div class="excerpt">
              <?php if (get_field('excerpt')): ?>
              <?php the_field('excerpt'); ?>
              <?php endif; ?>
            </div>
            <a href="<?php the_permalink(); ?>">
              <div class="butn-cont"><div class="button">Czytaj więcej >></div>
            </a>

            </div>

        </div>
        <!-- end news div -->
      </div>
      <div class="col-md-1"></div>
      <!-- end col div -->
    </div>
    <!-- end row -->

      <?php endwhile; else : ?>
      <p><?php _e( 'Niestety nie ma żadnych postów do wyświetlenia' ); ?></p>
      <?php endif; ?>

  </div>
</section>


<?php get_footer(); ?>
