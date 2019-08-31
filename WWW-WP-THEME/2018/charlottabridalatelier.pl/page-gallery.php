<?php /*Template Name: GALERIA*/?>
<?php get_header(); ?>

<?php get_template_part( 'prgrm', 'menu3' ) ?>



<div class="gallery_container">
  <div id="slider" >
  <?php if ( have_rows('slider_fotos') ): ?>
      <?php while ( have_rows('slider_fotos') ) : the_row(); ?>

  <div class="slide_item">
    <img class="d-block d-lg-block" src="<?php the_sub_field('slider_foto_item')?>">
    <!-- <div style="background-image: url('<?php the_sub_field('slider_foto_item')?>')" class="d-none d-lg-block img_box"></div> -->
  </div>

      <?php endwhile; ?>
  <?php endif; ?>
  </div>

<div class="container">
  <div class="row navigation_box ">

      <div class="left_box col-md-3">
        <a href="<?php echo get_permalink( get_field('more_colection1') ) ?>">
          <h3><?php echo get_the_title(get_field('more_colection1')) ?></h3>
        </a>
        <!-- <img class="" src="<?php echo get_template_directory_uri() ?>/img/line1.png" alt=""> -->
        <div class="line_box"></div>
      </div>

      <div class="center_box col-md-6">
          <h1><?php the_title() ?></h1>
      <div class="subtitle_box">
        <!-- <img class="" src="<?php echo get_template_directory_uri() ?>/img/line_l.png"> -->
        <div class="line_box short_line"></div>
       <span><?php echo __('[:pl]KOLEKCJA[:en]COLLECTION'); ?></span>
        <!-- <img class="" src="<?php echo get_template_directory_uri() ?>/img/line_r.png"> -->
        <div class="line_box short_line"></div>
      </div>


      </div>

      <div class="right_box col-md-3">
        <a href="<?php echo get_permalink( get_field('more_colection2') ) ?>">
          <h3><?php echo get_the_title(get_field('more_colection2')) ?></h3>
        </a>
        <!-- <img class="" src="<?php echo get_template_directory_uri() ?>/img/line1.png" alt=""> -->
        <div class="line_box"></div>
      </div>


      </div>
  </div>
</div>



<?php get_footer(); ?>
