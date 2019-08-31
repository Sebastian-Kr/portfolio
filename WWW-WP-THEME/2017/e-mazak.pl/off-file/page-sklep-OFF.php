<?php
/*
Template Name: Sklep-OFF
*/

?>
<?php get_header(); ?>
<?php get_template_part(content, men2);?>
<?php get_template_part(content, header);?>



<?php get_template_part('special_section/content', 'generator') ?>

<section id="gallery">
<div class="container ">

  <div class="row">
<div class="col-sm-4">
  <div class="intro gtiles">
    <div class="dd">

  <h3>WNĘTRZE</h3>
  <h3>SKLEPU</h3>


</div>
</div>
  </div>


<!-- PROGREMO LIGHTBOX 1-->
<div class="backdrop"></div>

<?php for ($i=1; $i < 22; $i++) {

$field_id = 'pcf-fb'.$i;
$img_id = get_field($field_id);

if ($img_id) {

// echo $field_id.'<br>';
// echo $img_id.'<br>';
$ar = wp_get_attachment_image_src($img_id, 'medium');
$ar2 = wp_get_attachment_image_src($img_id, 'full');
?>
<div class="col-sm-4">
  <div class="zoombox vpc">

<a href="#lb" onclick="return method()" class="zoom lightbox" data-boxid="<?php echo $field_id; ?>">
  <div class="hoverbox"><p>ZOBACZ</p></div>
  <div  class="gtiles" style="background-image: url('<?php echo $ar[0] ?>')"></div>
</a>
</div>
  <div id="<?php echo $field_id; ?>" class="box"><div class="close">X</div><img src="<?php echo $ar2[0] ?>" alt=""></div>
</div>

<?php } } ?>

<!--END PROGREMO LIGHTBOX 1 -->

</div>

</div>
</section>


<!-- END MAIN CONTENT -->

<?php get_footer(); ?>
