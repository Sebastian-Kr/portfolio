<?php /* Template Name: Prelegencji */?>

<?php get_header(); ?>

<div class="single_page_header">
<div class="bg" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/grafika_1.JPG')"></div>
</div>

<div class="single_page_content container"><div class="row"><div class="col-md-12">
  <h1 class="pt50"><?php echo the_title() ?></h1>
  <div class="mb-50"><?php get_template_part('special_modules/prgrm', 'main');?></div>
</div></div></div>

<div class="mt70 container prelegent_container prelegent_page"><div class="row"><div class="col-md-12">
  <?php
  $args = array('cat'=> '3', 'order' => 'ASC');
  $query = new WP_Query( $args);
  ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() )
      : $query->the_post(); ?>

  <div class="prelegent prelegent2">
  <a href="<?php the_permalink(); ?>">
    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
    <h5><?php echo get_the_title();?></h5>
    <h6><?php the_field('subtitle')?></h6>
  </a>
  </div>

  <?php endwhile; else : ?>
  <?php endif;
  wp_reset_query();?>


</div></div></div>

<?php get_template_part( 'section_generator2/content', 'generator' );?>




<?php get_footer(); ?>
