<div class="progremo_lightboxGallery_module">



  <div class="container-fluid">
    <div class="row">

<?php if ( have_rows('gallery') ): ?>
    <?php while ( have_rows('gallery') ) : the_row(); ?>
<?php
$min_url = wp_get_attachment_image_src(get_sub_field('gallery-foto'), 'thumnail' );
$full_url = wp_get_attachment_image_src(get_sub_field('gallery-foto'), 'full' );
 ?>

            <div class="col-lg-3 col-md-6">
              <div class="gallery_item" data-id="1"
              data-fullURL="<?php echo $full_url[0]; ?>"
              style="background-image: url('<?php echo $min_url[0]; ?>')">
              </div></div>

    <?php endwhile; ?>
<?php endif; ?>


      </div>
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
