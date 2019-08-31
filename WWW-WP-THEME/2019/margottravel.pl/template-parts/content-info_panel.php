<?php if ( have_rows('info-panel') ): ?>
  <?php $counter = 0; ?>
    <?php while ( have_rows('info-panel') ) : the_row(); ?>
   <?php

    $counter++;
    if (get_sub_field('info-panel-foto')) {
      $img_url = get_sub_field('info-panel-foto');
    }
    else {
      $temp = get_template_directory_uri();
      $img_url = $temp.'/img/zaslepka.jpg';
    }

    ?>
<div class="progremo_seeMoreBox_module">
  <div class="seeMore-Head" data-panelid="info-panel<?php echo $counter ?>">
    <h6><?php the_sub_field('info-panel-title')?></h6>
    <div class="moreButton">
      <span>Więcej</span>
      <img src="<?php echo get_template_directory_uri() ?>/img/arrow-right.svg" alt="">
    </div>
  </div>
  <div id="info-panel<?php echo $counter ?>" class="seeMore-desc">
    <div class="content">
      <?php the_sub_field('info-panel-desc')?>
    </div>
    <img src="<?php echo $img_url; ?>" alt="">
  </div>
</div>

    <?php endwhile; ?>
<?php endif; ?>
