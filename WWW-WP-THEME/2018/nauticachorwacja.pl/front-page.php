<?php get_header(); ?>

<?php get_template_part( 'content', 'men' );?>
<?php get_template_part( 'content', 'header' );?>

<div class="container-fluid maxw"><div class="row">

<div class="col-md-4">
  <a href="<?php echo the_field('pcf1-link1') ?>">
<div class="front-tiles" style="background-image: url('<?php echo the_field('pcf1-foto1') ?>')">
 <div class="front-tile1 front-tile"></div>
 <h2><?php echo the_field('pcf1-title1') ?></h2>
</div></a>
</div>

<div class="col-md-4">
  <a href="<?php echo the_field('pcf1-link2') ?>">
<div class="front-tiles" style="background-image: url('<?php echo the_field('pcf1-foto2') ?>')">
 <div class="front-tile2 front-tile"></div>
 <h2><?php echo the_field('pcf1-title2') ?></h2>
</div></a>
</div>

<div class="col-md-4">
  <a href="<?php echo the_field('pcf1-link3') ?>">
<div class="front-tiles" style="background-image: url('<?php echo the_field('pcf1-foto3') ?>')">
 <div class="front-tile3 front-tile"></div>
 <h2><?php echo the_field('pcf1-title3') ?></h2>
</div></a>
</div>

</div></div>



<?php get_template_part('content', 'slider3') ?>


<div class="container-fluid maxw">
  <div class="row" id="sec1">
  <div class="col-xs-6 col-md-4">
    <div class="front-tiles2"><h2 class="bigger">O nas</h2></div>
    <div class="visual-editor"><?php echo the_field('pcf-txt-col1') ?></div>
  </div>
  <div class="col-xs-6 col-md-4">
    <div class="visual-editor"><?php echo the_field('pcf-txt-col2') ?></div>
  </div>
  <div class="col-xs-6 col-md-4">
    <div class="visual-editor"><?php echo the_field('pcf-txt-col3') ?></div>
  </div>

</div>
</div>

<?php get_footer(); ?>
