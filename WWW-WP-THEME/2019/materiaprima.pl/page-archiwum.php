<?php /*Template Name: Archiwum*/?>

<?php get_header(); ?>
<?php get_template_part( 'special_modules/prgrm', 'main' );?>


<section class="header_text">
<div class="container"><div class="row">
  <div class=" col-lg-10 col-xl-7">

    <h1 class="mb30 "><?php the_title() ?></h1>
    <h5><?php the_field('subtitle')?></h5>

  </div>
</div></div>
</sction>

<div class="light_box_film">
<div class="full_glass"></div>
<div class="close_button"></div>
  <video class="content_video"  autoplay controls>
   <source src="" type="video/mp4">
   Your browser does not support the video tag.
 </video>
</div>



<section>


  <div class="container"><div class="row">

  <?php if ( have_rows('catalog_loop') ): ?>
      <?php while ( have_rows('catalog_loop') ) : the_row(); ?>
        <div class="col-md-6 col-xl-4 mt30 tiles_catalog_box">

      <a  target="blank" href="<?php the_sub_field('catalog_loop_file')?>">
          <div class="glass_up tiles_catalog">
          <div class="bg_container">
            <div class="bg_box" style="background-image: url('<?php the_sub_field('catalog_loop_image')?>')"></div>
          </div>
          <h6><?php the_sub_field('catalog_loop_subtitle')?></h6>
          <h5><?php the_sub_field('catalog_loop_title')?></h5>
        </div>
      </a>

        <div class="watch_movie">

        <a target="blank" href="<?php the_sub_field('catalog_loop_file')?>">
        <button class="btn_pink"><?php echo __('[:pl]Pobierz katalog[:en]Download catalog'); ?></button>
        </a>

          <?php if (get_sub_field('catalog_loop_movielink')): ?>
            <div class="play_box" film_url="<?php the_sub_field('catalog_loop_movielink')?>">
              <span ><?php echo __('[:pl]Obejrzyj film[:en]Watch a movie'); ?></span>
              <div class="play_icon"></div>
            </div>
          <?php endif; ?>
        </div>
        </div>
      <?php endwhile; ?>
  <?php endif; ?>



  </div></div><!-- end container -->




</section>

  <?php get_footer(); ?>
