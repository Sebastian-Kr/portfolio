<?php
get_header();
global $wp_query;
?>



<section id="search_page" class="page-content container">
<div class="pt10" id="content" role="main">

<div class="title mb50 ">
  <h2 class="search-title mt40 mb40"> <?php echo $wp_query->found_posts; ?>
 <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>" </h2>

 <?php
 $i = 0;
 $found_id_list =  [];
 $autor1_static_ID  = null;
 $autor2_static_ID = null;


 if ( have_posts() ) {


 while ( have_posts() ) {

    the_post();
    //variable declaration

    $i++;
    $post_ID = get_the_ID();


//add current id to array
array_push($found_id_list, $post_ID);

//set $autor1_static_ID
if (get_field('this_book_author_id') && $i == 1 ) {
$autor1_static_ID = get_field('this_book_author_id');
// echo 'ID AUTORA1 = ';
// the_field('this_book_author_id');
}

//set $autor2_static_ID
if (get_field('this_book_author_id') && $i == 2 ) {
$autor2_static_ID = get_field('this_book_author_id');
// echo 'ID AID AUTOR2=  = ';
// the_field('this_book_author_id');
  }

  //display content box
   include(locate_template('include-searchBox.php'));

} //endwhile loop


}  //endif loop
  else {
                  echo '<p>';
                  echo _e( '' );
                  echo '</p>';}




//debug code:
// echo 'ZNALEZIONE WPISY: ';
// print_r($found_id_list);
// echo '<br>ID AUTOR1= ';
// echo $autor1_static_ID;
// echo '<br>ID AUTOR1= ';
// echo $autor2_static_ID;
// echo '<br>';
// echo '<br>';
// echo 'DODATKOWE POSTY:<BR>';
//generate author1 box
if (!in_array($autor1_static_ID, $found_id_list) && $autor1_static_ID != null) {
  $post_ID = $autor1_static_ID;
   include(locate_template('include-searchBox.php'));
}
//debug code:
else {
// echo 'Autor1 duplikat, post został pominięty';
}

//genarate author2 box
if ((!in_array($autor2_static_ID, $found_id_list)) && $autor1_static_ID != $autor2_static_ID && $autor2_static_ID != null) {
  $post_ID = $autor2_static_ID;
   include(locate_template('include-searchBox.php'));
}

//debug code:
else {
// echo '<br>Autor2 duplikat, post został pominięty';
}

// PAGINATION
$args = array(
 'prev_text'          => '« Previous',
 'next_text'          => 'Next »',
);
echo '<div id="paginate">'.paginate_links($args).'</div>';


  ?>

</div></section>
<?php get_footer(); ?>
