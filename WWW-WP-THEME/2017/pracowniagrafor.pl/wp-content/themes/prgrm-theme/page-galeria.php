<?php /* Template Name: Galeria */?>
<?php get_header(); ?>
<?php get_template_part(content, header);?>


<?php
function progremo_galery_item($field_id, $class){
if (get_field($field_id)) {

      $img_id = get_field($field_id);
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
      echo ')"><div class="hover-box"><div> <p>POWIĘKSZ</p> </div></div></div></a>';
}
}
 ?>




<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section id="gallery-square-fixed">
<div class="container">

  <div class="row">
    <div class="big-column">
       <?php progremo_galery_item('progremo_img_g1', 'big-box') ?>
    </div>

    <div class="big-column">
       <div class="small-row">
        <?php progremo_galery_item('progremo_img_g2', 'small-box') ?>
        <?php progremo_galery_item('progremo_img_g3', 'small-box') ?>
       </div>

       <div class="small-row">
        <?php progremo_galery_item('progremo_img_g4', 'small-box') ?>
        <?php progremo_galery_item('progremo_img_g5', 'small-box') ?>
       </div>
    </div>
  </div><!--end row  -->


  <div class="row reverese">


    <div class="big-column">
       <div class="small-row">
        <?php progremo_galery_item('progremo_img_g6', 'small-box') ?>
        <?php progremo_galery_item('progremo_img_g7', 'small-box') ?>
       </div>

       <div class="small-row">
        <?php progremo_galery_item('progremo_img_g8', 'small-box') ?>
        <?php progremo_galery_item('progremo_img_g9', 'small-box') ?>
       </div>
    </div>

    <div class="big-column">
       <?php progremo_galery_item('progremo_img_g10', 'big-box') ?>
    </div>
  </div><!--end row  -->



<?php if (get_field('progremo_img_g11')): ?>
  <div class="row">
    <div class="big-column">
       <?php progremo_galery_item('progremo_img_g11', 'big-box') ?>
    </div>

    <div class="big-column">
       <div class="small-row">
        <?php progremo_galery_item('progremo_img_g12', 'small-box') ?>
        <?php progremo_galery_item('progremo_img_g13', 'small-box') ?>
       </div>

       <div class="small-row">
        <?php progremo_galery_item('progremo_img_g14', 'small-box') ?>
        <?php progremo_galery_item('progremo_img_g15', 'small-box') ?>
       </div>
    </div>
  </div><!--end row  -->
<?php endif; ?>


<?php if (get_field('progremo_img_g16')): ?>
  <div class="row reverese">


    <div class="big-column">
       <div class="small-row">
        <?php progremo_galery_item('progremo_img_g16', 'small-box') ?>
        <?php progremo_galery_item('progremo_img_g17', 'small-box') ?>
       </div>

       <div class="small-row">
        <?php progremo_galery_item('progremo_img_g18', 'small-box') ?>
        <?php progremo_galery_item('progremo_img_g19', 'small-box') ?>
       </div>
    </div>

    <div class="big-column">
       <?php progremo_galery_item('progremo_img_g20', 'big-box') ?>
    </div>
  </div><!--end row  -->


<?php endif; ?>


</div> <!-- end container -->
</section>




<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>

  <?php get_footer(); ?>
