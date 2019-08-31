<?php
function progremo_galery_item($field_id, $class){
if (get_sub_field($field_id, 139)) {

      $img_id = get_sub_field($field_id, 139);
      $ar = wp_get_attachment_image_src($img_id, 'full');
      $ar2 = wp_get_attachment_image_src($img_id, 'medium');
      if ($class === "big-box") {
        $ar2 = wp_get_attachment_image_src($img_id, 'large');
        // $ar2 = 2;
      }


      echo '<a href="';
      echo $ar[0].'" data-toggle="lightbox" data-gallery="example-gallery"><div class="';
      echo $class;
      echo '" style="background-image: url(';
      echo $ar2[0];
      echo ')"><div class="hover-box"><div> </div></div></div></a>';
}
}
 ?>





<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<div class="interactiveItem" id="galeria"></div>
  <div class="pattern_end_container2"><div class="pattern_shape2"></div></div>
<section  id="gallery-square-fixed">

<div class="container mt50">

<?php
$counter = 0;
if( have_rows('progremo_gallery_section', 139) ): ?>
	<?php while( have_rows('progremo_gallery_section', 139) ): the_row();
  $counter++;?>


    <?php if (($counter%2)==1): ?>
      <div class="row">
        <div class="big-column">
           <?php progremo_galery_item('progremo_gallery_img1', 'big-box') ?>
        </div>

        <div class="big-column">
           <div class="small-row">
            <?php progremo_galery_item('progremo_gallery_img2', 'small-box') ?>
            <?php progremo_galery_item('progremo_gallery_img3', 'small-box') ?>
           </div>

           <div class="small-row">
            <?php progremo_galery_item('progremo_gallery_img4', 'small-box') ?>
            <?php progremo_galery_item('progremo_gallery_img5', 'small-box') ?>
           </div>
        </div>
      </div><!--end row  -->
    <?php endif; ?>

    <?php if (($counter%2)==0): ?>
      <div class="row">


        <div class="big-column">
           <div class="small-row">
            <?php progremo_galery_item('progremo_gallery_img1', 'small-box') ?>
            <?php progremo_galery_item('progremo_gallery_img2', 'small-box') ?>
           </div>

           <div class="small-row">
            <?php progremo_galery_item('progremo_gallery_img3', 'small-box') ?>
            <?php progremo_galery_item('progremo_gallery_img4', 'small-box') ?>
           </div>
        </div>

        <div class="big-column">
           <?php progremo_galery_item('progremo_gallery_img5', 'big-box') ?>
        </div>
      </div><!--end row  -->
    <?php endif; ?>





	<?php endwhile; ?>
<?php endif; ?>

</div> <!-- end container -->

</section>
<div class="pattern_end_container2"><div class="pattern_shape2 pattern_shape_inverse2"></div></div>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>
