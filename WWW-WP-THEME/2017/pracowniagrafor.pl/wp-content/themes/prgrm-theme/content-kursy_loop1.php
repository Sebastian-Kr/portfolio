
<section id="kurs-loop" class="pb0">

<?php
  $custom_args = array(
      'post_type' => 'post',
      'cat'=> 3,
      'order' => 'ASC',
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post();?>

<div class="container "><div class="row"><div class="col-lg-12 row-img">

<div class="foto" style="background-image: url('<?php echo the_field('progremo_img_k') ?>')"></div>
<div class="desc bg-col1">
  <h2><?php echo the_title() ?></h2>
  <h4><?php echo the_field('progremo_subtitle_k') ?></h4>
  <p><?php echo the_field('progremo_date_k') ?></p>

<div class="buttons">
  <a href="<?php echo get_permalink(23) ?>"><div class="btn btn-info">ZAPISY</div></a>
  <a href="<?php echo get_permalink() ?>"><div class="btn btn-secondary">OPIS KURSU</div></a>
</div>
</div>
</div></div></div>


        <?php endwhile; ?>

      <?php  wp_reset_postdata(); ?>
      <?php endif; ?>



</section>
