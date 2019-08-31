<?php session_start();?>

<div class="container-fluid maxw std-section">
  <hr class="hr2">
<div class="row">

<div class="col-sm-6 col-md-4">

  <div class="img-kwater" style="background-image: url('<?php echo the_field('post-thumb') ?>')"></div>


</div>

<div class="col-sm-6 col-md-8">

<div class="nr-tit">
<?php
echo '<span class="number-post">';
echo the_field('nr_map');
// $_SESSION["nr"].
echo '</span>';
?>

<h3><?php echo the_title();?></h3>
<?php echo '<span class="info2">'; echo the_field('post-special-info2').'</span>' ?>
</div>

<div class="offer-part visual-editor">
  <?php
  if (get_field('post-special-info')) {
    echo '<span class="lvl">Poziom trudności: ';
    echo the_field('post-special-info').'</span>';
  }?>
    <?php echo the_excerpt() ?>


      <a href="<?php the_permalink(); ?>">
      <div class="wiecej"><div class="button"></div></div></a>

</div>

</div>
</div><!-- end row -->
</div> <!-- end container -->
