<?php /*Template Name: Media o nas*/?>

<?php get_header(); ?>
<?php get_template_part( 'special_modules/prgrm', 'main' );?>





<section id="medianews_list">
  <div class="container mb30"><div class="row">
    <div class=" col-lg-10 col-xl-7">

      <h1 class="mb30"><?php the_title() ?></h1>
      <h5><?php the_field('subtitle')?></h5>

    </div>
  </div></div>

    <?php
    $args = array(
      'post_type' => 'medianews',
      'order'=> 'DESC',
    );
    $query = new WP_Query( $args);
    $counter = 0;
    $css_class = '';
    ?>
    <?php if ( $query->have_posts() ) : while ( $query->have_posts() )
        : $query->the_post();
        $counter++;
        if ($counter == 3) {
    echo '<div id="hide_box">';
        }


    ?>

        <div class="medianews_box container">
          <div class="row">
            <div class="col-md-9">
            <a href="<?php echo get_permalink() ?>">
              <h6 class="mb15"><?php the_title() ?></h6>
            </a>
              <?php
    if (get_field('desc_add2')) {
      the_field('desc_add2');
    } else {
      the_field('desc_add');
    }

               ?>
            </div>
            <div class="col-md-3 col-lg-3">
          <a href="<?php echo get_permalink() ?>">
              <button id="more" class="btn_pink"><?php echo __('[:pl]Czytaj dalej[:en]Read more'); ?></button>
          </a>
            </div>
          </div>
        </div>



    <?php endwhile;?>
    <?php endif;
    wp_reset_postdata();?>


 <?php if ($counter>=3): ?>
 </div>
   <div class="mt60 d-flex justify-content-center ">
     <button id="more_button" class="btn_pink_arrow2"><?php echo __('[:pl]Wczytaj więcej[:en]Show more'); ?></button>
   </div>
 <?php endif; ?>

  </section>


<?php get_footer(); ?>
