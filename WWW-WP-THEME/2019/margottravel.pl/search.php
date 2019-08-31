<?php
get_header();
global $wp_query;
?>



<div class="search_panel" style="background-image: url('<?php echo get_the_post_thumbnail_url(137);?>'">


 <?php

 if ( !empty( $wp_query->query['s'] ) ) {



 if ( have_posts() ) {
 while ( have_posts() ) {
    the_post();

echo '<h2>';
echo the_title();
echo '</h2>';


echo '<h3>';
echo the_field('subtitle');
echo '</h3>';
echo '<img class="mt50 mb50" src="';
echo the_field('logotype').'">';
echo '<a class="btn btn-big" href="'.get_permalink().'">Zobacz szczegóły wyjazdu</a>';

} //endwhile loop
}  //endif loop
  else {
  echo '<h2>Żaden wyjazd nie został znaleziony</h2><h6>Upewnij się, że kod jest poprawny</h6>';
  echo '<a class="btn mt30 btn-big" href="'.get_permalink(137).'">Wpisz kod jeszcze raz</a>';

    }

  }

  else {
    echo '<h2>Żaden kod nie został wpisany</h2><h6>Wpisz poprawny kod, lub upewnij się, że kod jest poprawny</h6>';
    echo '<a class="btn mt30 btn-big" href="'.get_permalink(137).'">Wpisz kod jeszcze raz</a>';
  }

?>

</div>
<?php get_footer(); ?>
