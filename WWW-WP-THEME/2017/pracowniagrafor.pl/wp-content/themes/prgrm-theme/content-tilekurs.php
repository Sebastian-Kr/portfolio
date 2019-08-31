<section id="front-page5" class="tiles-square4">
<div class="container"><div class="row">



    <?php
  $current_cat = 6;

  $query = new WP_Query( array( 'category__and' => array( $current_cat ) ) );
  $current_id = get_the_ID();
  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
   // if ($count < 4) ;
    $count++;

  $id_post = get_the_ID();
  ?>

  <?php if ($id_post<>$current_id): ?>

    <div class=" col-sm-6 col-lg-3">
     <div class="tile" style="background-image: url('<?php echo the_field('progremo_img_k') ?>')">

     <div class="normal_box">
       <h5><?php echo the_field('progremo_title_k') ?></h5>
       <p><?php echo the_field('progremo_subtitle_k') ?></p>
     </div>
    <div class="glass"></div>
    <a href="<?php echo get_permalink(); ?>">
       <div class="hover_box">
         <h5><?php echo the_field('progremo_title_k') ?></h5>
         <p><?php echo the_field('progremo_date_k') ?></p>
       </div></a>

     </div>
    </div>

  <?php endif; ?>

  <?php
  endwhile;
  wp_reset_postdata();
  endif;
  ?>


</div></div>
</section>
