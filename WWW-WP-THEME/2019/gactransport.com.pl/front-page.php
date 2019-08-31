<?php get_header(); ?>


<section class="menuSection main-header pt30 pb30"
style="background-image: url('<?php echo get_template_directory_uri() ?>/img/homepage-header.jpg')">
  <div class="content_header ">
<div class="main-content animate2  ">
  <?php get_template_part('template_parts/prgrm', 'main') ?>
</div>
        <div  data-target="oferta" class="scroll-button mt30 btn animate3">Czytaj więcej</div>

  </div>


</section>

<section id="oferta-sec" class="menuSection offer bg_section">
  <div class="map" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/map.png')"></div>
  <div class="scroll-point" id="oferta"></div>
<div class="container  small_container mt50 mb50">
  <div class="row">
    <div class="col-md-12 box_center  ">

  <?php the_field('section1_content')?>
    </div>

  </div>


</div>
</section>

<section class="directions animate">
  <div class="foto_box" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/800-homepage.png')"></div>
  <div class="container">

    <div class="row">
      <div class="col-md-7">
      </div>
      <div class="col-md-5">
        <?php the_field('section2_content')?>

      </div>
    </div>
  </div>
</section>




<section  class="gray-gradient menuSection whyus animate"
style="background-image: url('<?php echo get_template_directory_uri() ?>/img/road.jpg')">

  <div class="scroll-point" id="o-nas"></div>
  <div class="container"><div class="row">
    <div class="col-md-4">
<?php the_field('section3_content')?>
    </div>

<div class="col-md-8 ">
  <div class="container">
    <div class="row hide-box">
  <?php if ( have_rows('section3_loop') ): ?>
      <?php while ( have_rows('section3_loop') ) : the_row(); ?>

        <div class="col-md-6">
          <div class="aboutus_item">
            <div class="aboutus_title">
              <?php if (get_field('section3_loop_icon')): ?>
                <img src="<?php the_sub_field('section3_loop_icon')?>">
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri() ?>/img/whyus.svg" alt="">
              <?php endif; ?>
              <h3><?php the_sub_field('section3_loop_header')?></h3>
            </div>
            <p><?php the_sub_field('section3_loop_content')?></p>
          </div>
        </div>


      <?php endwhile; ?>
  <?php endif; ?>

</div>

</div>
</div>


  </div></div>
</section>

<?php get_template_part( 'content', 'cta' ) ?>




<?php get_footer(); ?>
