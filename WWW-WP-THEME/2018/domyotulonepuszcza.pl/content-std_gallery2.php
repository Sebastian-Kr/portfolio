<section id="wnetrza" class="watermark_bg center_content sec_std pb0 mb0 animate"
style="background-image: url('<?php the_field('gallery2_bg')?>')">
  <div id="std_gallery" class="container mb50"><div class="row">
<div class=" col-md-8 offset-md-2">
  <div class="h2_box">
    <img src="<?php echo get_template_directory_uri() ?>/img/icon-8.svg" alt="">
  <h2><?php the_field('gallery2_title')?></h2>
</div>
  <?php the_field('gallery2_desc')?>
</div>
  </div></div>


  <div class="gallery_box gallery_box2">
  <?php if ( have_rows('gallery_loop2') ): ?>
      <?php while ( have_rows('gallery_loop2') ) : the_row(); ?>
        <?php
$img_large = get_sub_field('gallery_item_large2');
$img_small = get_sub_field('gallery_item_small2');
// print_r($img_ob);
         ?>

<div class="gallery_item ">
  <a data-fancybox="gallery" href="<?php echo $img_large ?>">
    <span class="hover_glass"></span>
    <img src="<?php echo $img_small ?>">
  </a>
</div>


      <?php endwhile; ?>
  <?php endif; ?>

  </div>


</section>
