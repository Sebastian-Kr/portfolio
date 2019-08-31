<?php /*Template Name: Samochody*/?>

<?php get_header(); ?>
<?php get_template_part('template_parts/prgrm', 'header');?>

<section class="bg_section">
  <div class="map" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/map.png')"></div>
  <div class="container mt70 mb70 small_container">
    <div class="row">
      <div class="col-md-12 text-center">

        <?php get_template_part('template_parts/prgrm', 'main');?>
      </div>
    </div>
  </div>
</section>


<div class="progremo_lightboxGallery_module">



  <div class="galleryItems">
<?php if ( have_rows('gallery_loop') ): ?>
  <?php $id = 0; ?>
    <?php while ( have_rows('gallery_loop') ) : the_row(); ?>
<?php $id++ ?>
      <div class="gallery_item animate" data-id="<?php echo $id ?>" data-fullURL="<?php the_sub_field('gallery_max')?>" style="background-image: url('<?php the_sub_field('gallery_min')?>')"></div>

    <?php endwhile; ?>
<?php endif; ?>
  </div>

    <div class="backdrop"></div>
    <div class="lighbox_container">
      <div class="backdrop2"></div>

      <div id="prgrm_lightbox" class="prgrm_lightbox">
        <div class="LigthboxContent"><img src="" alt=""></div>
        <div class="close"></div>
        <div class="lightbox-arrow lightbox_cont_prev"><div class="lightbox_prev"></div></div>
        <div class="lightbox-arrow lightbox_cont_next"><div class="lightbox_next"></div></div>
        <div id="loader"><img src="<?php echo get_template_directory_uri() ?>/img/loader.svg" alt=""></div>
      </div>
    </div>


</div>



<?php get_template_part( 'content', 'cta2' ) ?>
<?php get_footer(); ?>
