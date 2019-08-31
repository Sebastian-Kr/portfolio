
<?php
function img_src($id_img){
  $img_src = wp_get_attachment_image_src($id_img, full);
  return $img_src[0];
}
 ?>

<div id="inon_gallery">


  <div class="zoombox"><div><img src="<?php echo img_src(1926)?>" alt="dentysta kraków inlay onlay"></div></div>
  <div class="zoombox"><div><img src="<?php echo img_src(1931)?>" alt="dentysta kraków inlay onlay"></div></div>
  <div class="zoombox"><div><img src="<?php echo img_src(1927)?>" alt="dentysta kraków inlay onlay"></div></div>
  <div class="zoombox"><div><img src="<?php echo img_src(1928)?>" alt="dentysta kraków inlay onlay"></div></div>
  <div class="zoombox"><div><img src="<?php echo img_src(1929)?>" alt="dentysta kraków inlay onlay"></div></div>
  <div class="zoombox"><div><img src="<?php echo img_src(1930)?>" alt="dentysta kraków inlay onlay"></div></div>



</div>
