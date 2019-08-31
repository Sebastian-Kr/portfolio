<h1>KARUZELA</h1>
  <?php

// check if the repeater field has rows of data
if( have_rows('carousel1_loop') ):?>

<section id="carousel1">
  <div class="container">
<div class="slide-items1 mt ">


<?php 	// loop through the rows of data
    while ( have_rows('carousel1_loop') ) : the_row();?>
        <div class="slide_item"><a href="<?php the_sub_field('carousel1_item_link'); ?>" rel="index, follow" target="_blank">
          <img src="<?php the_sub_field('carousel1_item_img'); ?>">
        </a></div>

<?php
    endwhile;

?>


</div>
</div>
</section>

<?php
endif;

?>
