
  <!-- PROGREMO LIGHTBOX -->
  <div class="backdrop"></div>
<div class="container-fluid maxw"><div class="row">

<?php
$i=1;

do {

  $field_id = 'lib-gal-f'.$i;
  $img_id = get_field($field_id);
if ($img_id) {
$ar = wp_get_attachment_image_src($img_id, 'large');
$ar2 = wp_get_attachment_image_src($img_id, 'full');
?>
  <div class="col-sm-6 col-md-3">
    <div class="zoombox vpc">
  <a href="#lb" onclick="return method()" class="zoom lightbox" data-boxid="<?php echo $i; ?>">
  <div class="hoverbox"  style="background-image: url('<?php echo get_template_directory_uri() ?>/img/galeria-hover.svg')"></div>
    <div  class="gtiles" style="background-image: url('<?php echo $ar[0] ?>')"></div>
  </a>
  </div>
    <div id="<?php echo $i; ?>" class="box">
      <div class="close">X</div>
      <div class="lightbox_prev" data-boxid="<?php echo $i; ?>" ></div>
      <div class="lightbox_next" data-boxid="<?php echo $i; ?>"></div>
      <img src="<?php echo $ar2[0] ?>" alt="">
    </div>
  </div>

  <?php
};
$i++;
} while ($img_id);

 $maxid = $i - 2;
 echo '<script type="text/javascript">';
 echo 'var maxId = '.$maxid;
 echo '</script>';


 ?>


</div></div>
<!--END PROGREMO LIGHTBOX  -->
