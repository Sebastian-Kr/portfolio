<section id="galeria" class="dark_bg center_content sec_std" style="background-image: url('<?php the_field('section5_bg')?>')">
  <div id="std_gallery" class="container mb50"><div class="row">
<div class="animate col-sm-8 offset-sm-2 col-lg-8 offset-lg-2">
  <div class="h2_box">
    <img src="<?php echo get_template_directory_uri() ?>/img/icon-5.svg" alt="">
  <h2><?php the_field('section5_title')?></h2>
</div>
  <?php the_field('section5_content')?>
</div>
  </div></div>


  <div class="gallery_box container-fluid animate">
<div class="row ">
  <?php if ( have_rows('gallery_loop') ): ?>
      <?php while ( have_rows('gallery_loop') ) : the_row(); ?>
        <?php
$img_large = get_sub_field('gallery_item_large');
$img_small = get_sub_field('gallery_item_small');
// print_r($img_ob);
         ?>

<div class="col-md-4  mb0 ">
<div class="gallery_item ">
    <a data-fancybox="gallery" href="<?php echo $img_large ?>">
      <span class="hover_glass"></span>
      <img src="<?php echo $img_small ?>">

    </a>

</div>

</div>


      <?php endwhile; ?>
  <?php endif; ?>

</div>
  </div>



</section>
