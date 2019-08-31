<?php
if( have_rows('gallery-slider-loop') ):
// loop through the rows of data
while ( have_rows('gallery-slider-loop') ) : the_row();
$image_url = get_sub_field('gallery-slider-item');
echo '<div class="gallery-item" style="background-image: url(\''.$image_url.'\')"></div>';
endwhile;
endif;
//end single gallery

 ?>
