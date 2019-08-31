<section id="galeria" class="dark_bg center_content sec_std" style="background-image: url('<?php the_field('section5_bg')?>')">
  <div id="std_gallery" class="container mb50"><div class="row">
<div class="col-md-12">
  <h2><?php the_field('section5_title')?></h2>
  <?php the_field('section5_content')?>
</div>
  </div></div>


  <div class="gallery_box container-fluid">
<div class="row">
  <?php if ( have_rows('gallery_loop') ): ?>
      <?php while ( have_rows('gallery_loop') ) : the_row(); ?>
        <?php
$img_large = get_sub_field('gallery_item_large');
$img_small = get_sub_field('gallery_item_small');
// print_r($img_ob);
         ?>

<div class="col-md-4  mb30">

  <a data-fancybox="gallery" href="<?php echo $img_large ?>"><img src="<?php echo $img_small ?>"></a>


</div>


      <?php endwhile; ?>
  <?php endif; ?>

</div>
  </div>



</section>
