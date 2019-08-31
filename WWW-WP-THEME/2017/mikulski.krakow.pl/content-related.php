
  <?php
  session_start();
$current_cat = get_field('current_cat');
$_SESSION['cat0'] = $current_cat;
$count = 0;
$second_cat = $_SESSION['cat'];
$query = new WP_Query( array( 'category__and' => array( $current_cat, $second_cat ) ) );
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
 // if ($count < 4) ;
  $count++;
if ($count<3) {

  echo '<div><h5>';

  $title  = the_title('','',false);
  if(strlen($title) > 80):
      echo trim(substr($title, 0, 80)).'...';
  else:
      echo $title;
  endif;
  echo '</h5><br><a href="';
  the_permalink();
  echo '" class="more">Czytaj całość ></a><br><p></p><hr></div>';
}
endwhile;
wp_reset_postdata();
endif;

if ($count>2) {
  echo '<a href="';
  echo get_category_link($second_cat);
  echo '" class="button">Zobacz wszystkie ></a>';
}
// echo $second_cat;
// echo $_SESSION['cat0'];
if ($count==0) {
  // echo '<script type="text/javascript">$(document).ready(function(){$("#';
  // echo $_SESSION['box_id'];
  // echo '").css( "display","none");});</script>';

}


$count = 0;
?>
