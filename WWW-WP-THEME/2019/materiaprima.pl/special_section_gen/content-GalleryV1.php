
<?php 
// Standar Variable  
$css_custom = get_sub_field('css_class_section');
$id = 'P'.get_the_ID().'_S'.$GLOBALS['section_counter'];
$css_theme = get_sub_field('theme');
?>
<section id="<?php echo $id ?>" class="<?php echo $css_theme; echo ' '; echo $css_custom ?>">


<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>


<div class="container">

  <div class="row">
<div class="col-sm-4">
  <div class="intro gtiles">
    <div class="dd">

<h3><?php echo $title ?></h3>

</div>
</div>
  </div>

  <!-- PROGREMO LIGHTBOX -->
  <div class="backdrop"></div>



  <?php if ( have_rows('gallery_v1_images') ): ?>

<?php while ( have_rows('gallery_v1_images') ) : the_row(); ?>

 <?php 
 
$img_id = get_sub_field('gallery_v1_img');

// echo $field_id.'<br>';
// echo $img_id.'<br>';
$ar = wp_get_attachment_image_src($img_id, 'medium');
$ar2 = wp_get_attachment_image_src($img_id, 'full');
?>
  <div class="col-sm-4">
    <div class="zoombox vpc">
  <a href="#lb" onclick="return method()" class="zoom lightbox" data-boxid="<?php echo get_sub_field('gallery_v1_img') ?>">
  <div class="hoverbox"><p>ZOBACZ</p></div>
    <div  class="gtiles" style="background-image: url('<?php echo $ar[0] ?>')"></div>
  </a>
  </div>
    <div id="<?php echo $field_id; ?>" class="box">
      <div class="close">X</div>
      <!-- <div class="prgrm_prv"> prev </div>
      <div class="prgrm_next"> next </div> -->
      <img src="<?php echo $ar2[0] ?>" alt="">
    </div>
  </div>


<?php  endwhile; ?>

<?php endif; ?> 


<!--END PROGREMO LIGHTBOX  -->

</div>

</div>


<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>
</section>
