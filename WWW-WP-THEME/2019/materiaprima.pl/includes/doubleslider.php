<div id="prgrm_double_slider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">


    <?php if ( have_rows('slider_loop') ): ?>
<?php $counter = 0; ?>
        <?php while ( have_rows('slider_loop') ) : the_row();
$counter++;
        ?>

    <div class="carousel-item <?php if ($counter == 1) {echo 'active';}?>">
<div class="left_part" style="background-image: url('<?php the_sub_field('foto1')?>')"></div>
<div class="right_part" style="background-image: url('<?php the_sub_field('foto2')?>')"></div>
    </div>


    <?php endwhile; ?>
<?php endif; ?>


  </div>

<div class="arrows">
  <button id="prev_button" class="arrow_left"></button>
  <button id="next_button" class="arrow_right"></button>
</div>

</div>
