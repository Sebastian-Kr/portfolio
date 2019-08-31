<?php session_start();?>

<div class="container-fluid maxw std-section">
  <hr class="hr2">
<div class="row">

<div class="col-sm-6 col-md-4"><img src="<?php echo the_field('post-thumb') ?>" alt=""></div>
<div class="col-sm-6 col-md-8">


<div class="offer-part">

    <?php
    echo '<h3>';
    echo the_title();
    if (is_page(3074)) {
      echo '<span> / ';
      echo get_the_date( 'g:i d.m.Y' ).'</span>';
    }
    echo '</h3>';
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
