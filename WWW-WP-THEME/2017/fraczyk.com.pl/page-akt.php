
<?php
/*
Template Name: Aktualności
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>
<section id="header">

<div class="container">
  <h1 class="square"><?php echo get_the_title();?></h1>
</div>


</section>

<h2 class="heading"><?php the_field('pcf1') ?></h2>


<!-- MAIN CONTENT  -->
<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();


if (get_the_content()){
echo '<div class="main-content container">';
          the_content();
echo '</div>';
} // end is content statment


  } // end while
} // end if
?>
<!-- END MAIN CONTENT -->
<div class="semisepar"></div>


<!-- LOOP NEWS -->

<?php

$args = array(
'cat'            => '20',
'posts_per_page' => 6,
'paged' => $paged
);

$query = new WP_Query( $args);
$count = 0;
?>
 <?php if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post(); ?>



<section class="news-section">
<div class="row">
 <?php get_template_part( 'content', 'news' );?>
 </div> <!-- end row news -->
</section>

<?php
 endwhile;
 wp_reset_postdata();
?>

<?php else : ?>

<p><?php _e( '' ); ?></p>

<?php endif; ?>

<!-- END LOOP NEWS -->
<!-- pagination -->
<div id="pagination">
<div id="prev"><?php echo get_previous_posts_link( '<span></span>'); ?></div>
<div id="num"><?php kriesi_pagination($query->max_num_pages, 4);?></div>
<div id="next"><?php echo get_next_posts_link( '<span></span>', $query->max_num_pages); ?></div>
</div>
<!-- END pagination -->

  <?php get_template_part( 'content', 'nextprev' );?>

<?php get_footer(); ?>
