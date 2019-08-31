<?php

if( have_rows('rights_sold') ):
  $i = 0;
  echo '<h4 class="mb30 mt30 listofa_h4">Rights Sold:</h4>';
  echo '<ul class="listofa">';
    while ( have_rows('rights_sold') ) : the_row();
    $i++;
?>
<li class="<?php if ($i > 10) {echo 'solds_hidden';}?>"><?php the_sub_field('rights_sold_item'); ?></li>

    <?php
  endwhile;
  echo '</ul>';

if ($i>10) {
echo '<div id="showMore" class="btn-std">Show more</div>';
}
endif;

?>
