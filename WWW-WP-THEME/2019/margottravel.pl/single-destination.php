

<?php get_header(); ?>

<section class="header_page destination_header_page dark-box" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>'">
  <div class="container"><div class="row">
    <div class="col">
      <h1 class="text-center mb20"><?php the_title() ?></h1>
      <?php if (get_field('subtitle')): ?>
        <h3 class="text-center"><?php the_field('subtitle')?></h3>
      <?php endif; ?>
   </div>
  </div></div>
</section>

<section class="sliderContent pt50 ">

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3><?php the_field('sub_sub_title')?></h3>
      </div>
    </div>
  </div>

<div class="slider_id1 imgbox_slider mt30">
<div class="container">
<div class="row">
      <div class="col-md-6">
        <?php get_template_part('template-parts/content', 'main');?>
      </div>

</div>
    </div>


            <div class="arrow arrow-left"></div>
            <div class="arrow arrow-right"></div>
          <div class="slides_box"></div>

  </div>



</section>

<section class="good_to_see" style="background-image: url('<?php the_field('good_to_see_bg')?>')">


  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center mb50">
        <h2>Polecamy w tym miejscu</h2>
      </div>
    </div>

    <div class="row">
      <?php if ( have_rows('good_to_see') ): ?>
          <?php while ( have_rows('good_to_see') ) : the_row(); ?>
          <div class="col-lg-6">
            <div class="good_to_see_item">
              <?php the_sub_field('good_to_see_item')?>
            </div>
          </div>
          <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

</section>


<section >
<div class="container">
<div class="row">

  <div class="col-md-12 text-center mb50">
    <h2>Zobacz pozostałe inspiracje</h2>
  </div>
<div id="carousel2" class="col-md-12">


<?php
$args = array(
  'post_type' => 'destination',
  'order'=> 'DESC',
  'paged' =>  get_query_var( 'paged' ),
  'posts_per_page' => 99
);
$wp_query = new WP_Query( $args);

if ( $wp_query->have_posts() ):
  while ( $wp_query->have_posts() ) :
    $wp_query->the_post();?>

<a href="<?php echo get_permalink(); ?>">
  <div class="slide_item">
    <div class="slide_item_foto" style="background-image: url('<?php the_field('destiny_thumbnail')?>')"></div>
    <h6 class="mt10"><?php the_title(); ?></h6>
  </div>
</a>
  <?php
         endwhile;
         endif;
         wp_reset_postdata();
     ?>


  </div>
</div>
</div>
</section>


<?php get_footer(); ?>
