<?php
/*
Template Name: O nas
*/

?>
<?php get_header(); ?>

<?php get_template_part(content, men2);?>
<?php get_template_part(content, header);?>


<section id="about12" class="vcc">
<div class="container"><div class="row">

  <div class="col-sm-5">
    <div>
      <img class="" src="<?php the_field('pcf1') ?>" alt="">
    </div>
</div>
<div class="col-sm-7">

  <!-- MAIN CONTENT  -->
  <?php
  if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
  if (get_the_content()){
          the_content();
  } // end is content statment
  } // end while
  } // end if
  ?>
  <!-- END MAIN CONTENT -->

</div>
<!-- <div class="clearfix"></div> -->
</div></div>
</section>


<?php get_template_part( 'content', 'count' );?>



<section id="gallery">

<div class="container">

  <div class="row">
<div class="col-sm-4">
  <div class="intro gtiles">
    <div class="dd">

  <h3>CERTYFIKATY</h3>
  <h3>I</h3>
  <h3>DYPLOMY</h3>

</div>
</div>
  </div>

  <!-- PROGREMO LIGHTBOX -->
  <div class="backdrop"></div>

<?php for ($i=2; $i < 22; $i++) {

  $field_id = 'pcf'.$i;
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
    <div id="<?php echo $field_id; ?>" class="box">
      <div class="close">X</div>
      <!-- <div class="prgrm_prv"> prev </div>
      <div class="prgrm_next"> next </div> -->
      <img src="<?php echo $ar2[0] ?>" alt="">
    </div>
  </div>

  <?php } } ?>

<!--END PROGREMO LIGHTBOX  -->

</div>

</div>
</section>


<div class="bordo full-bar"><h2>Zapraszamy do naszego biura</h2></div>

<section id="gallery">
<div class="container gallery2">

  <div class="row">
<div class="col-sm-4">
  <div class="intro gtiles">
    <div class="dd">

  <h3>NASZE</h3>
  <h3>WNĘTRZA</h3>


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


  <?php get_footer(); ?>
