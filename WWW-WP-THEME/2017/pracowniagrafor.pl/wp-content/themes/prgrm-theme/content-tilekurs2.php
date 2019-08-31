<section id="seealso" class="pt20 bg-col3 tiles-square4">
<div class="container">

<div class="row"><div class="col-md-12">

      <h2>Pozostałe kursy:</h2>
</div></div>



  <?php
$current_cat = 7;

$query = new WP_Query( array( 'category__and' => array( $current_cat ) ) );
$current_id = get_the_ID();
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
  $count++;

$id_post = get_the_ID();
?>

<?php if ($id_post<>$current_id): ?>

<div class="row ml0 mr0"><div class="col-lg-12 row-img row-img2">

  <div class="foto" style="background-image: url('<?php echo the_field('progremo_img_k') ?>')"></div>
  <div class="desc bg-col1">
    <h2><?php echo the_title() ?></h2>
    <h4><?php echo the_field('progremo_subtitle_k') ?></h4>
    <p><?php echo the_field('progremo_date_k') ?></p>
  </div>
  <div class="buttons2">
<a href="<?php echo get_permalink() ?>"><div class="btn btn-secondary">OPIS KURSU</div></a>
  </div>

  </div></div>

<?php endif; ?>

<?php
endwhile;
wp_reset_postdata();
endif;
?>
</div>
</section>
