

  <div class="slider_section6 ">
    <?php
    if ( have_rows('gallery_loop_section6') ):
    $counter=0;
    ?>
        <?php while ( have_rows('gallery_loop_section6') ) : the_row();
        // $imageID = get_sub_field('gallery_item');
  			// $imageThumbnail = wp_get_attachment_image_src( $imageID, '800');
        // $imageThumbnail_url = $imageThumbnail[0];
        // $imageFull = wp_get_attachment_image_src( $imageID, 'xxl' );
  			// $imageFull_url = $imageFull[0];
    ?>

    <div class="slider_item lazy_loader_gallery"
      <?php prgrm_srcSetgallery('gallery_item'); ?>
      data-id="<?php echo $counter; ?>"
      style="background-image: url('<?php echo get_template_directory_uri() ?>/img/loader.svg')">

    </div>

    <?php $counter++; ?>
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
