<?php session_start();?>

<div class="container-fluid maxw std-section">
  <hr class="hr2">
<div class="row">

<div class="col-sm-6 col-md-4 ">
<div class="img-kwater" style="background-image: url('<?php echo the_field('post-thumb') ?>')">

</div>
</div>
<div class="col-sm-6 col-md-4">
  <div id="kwater">
    <?php get_template_part('content', 'col290') ?>
  </div>

</div>
<div class="col-md-4 col3">
<div class="offer-part ">

    <?php
    echo '<h3>';
    echo the_title().'</h3>';
echo '<div class="visual-editor">';
    echo the_excerpt();
    echo '</div>';

    ?>


      <a href="<?php the_permalink(); ?>">
      <div class="wiecej"><div class="button"></div></div></a>

</div>

</div>
</div><!-- end row -->
</div> <!-- end container -->
