
<div class="tiles_box">
  <a href="<?php echo get_permalink() ?>">
  <div class="glass_down tiles tiles_pink_border">
    <div class="bg_container">
      <div class="bg_box" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>')"></div>
    </div>
      <?php
      if (in_category('wideo')) {
        echo '<div class="film_box"></div>';
      } ?>
    <h6>Wpis z <?php echo get_the_date( 'd.m.Y' ); ?></h6>
    <h5><?php the_title() ?></h5>
  </div>
  <img class="border_img" src="<?php echo get_template_directory_uri() ?>/img/linia-rozowa.svg" alt="">
  </a>
</div>
