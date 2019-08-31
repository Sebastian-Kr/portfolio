<?php
// PAGINATION
$args = array(
 // 'prev_text'          => '« ',
 // 'next_text'          => ' »',
);

if (paginate_links($args)) {
  echo '<div id="paginate">'.paginate_links($args).'</div>';
}
 ?>
