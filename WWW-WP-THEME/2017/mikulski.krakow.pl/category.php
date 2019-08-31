<?php session_start(); get_header(); ?>

<section id="category" class="page-content mt100 container">
<div id="content" role="main">


  <?php
  $cat0 = $_SESSION['cat0'];
  // echo  '<h2>CAT0: '.$cat0.'</h2>';
  // Object from URL
  $page_object = get_queried_object();
  $cat1 = $page_object->cat_name;
  // echo '<h2>CAT1:'.$cat1.'</h2>';
  $cat1_id = get_queried_object_id();
  // echo '<h2>CAT1_id:'.$cat1_id.'</h2>';


// Check if there are any posts to display
if ( have_posts() ) : ?>
<div class="title"><h2 class="archive-title"><?php echo $cat1; ?></h2><span>z zakresu:</span><h3> <?php echo get_cat_name($cat0)?></h3></div>


<?php
// Display optional category description
 if ( category_description() ) : ?>
<div class="archive-meta"><?php echo category_description(); ?></div>
<?php endif; ?>


<?php
// The Loop
$query = new WP_Query( array( 'category__and' => array($cat1_id, $cat0) ) );
while ( $query -> have_posts() ) : $query -> the_post();?>
<div class="box-category" >
<div class="small-box">
<div class="date">data dodania wpisu: <?php echo get_the_date('d-m-Y') ?> r.</div>
<div class="title-box"><?php echo the_title();?></div>
<p class="border"></p>
<div class="text"> <?php the_excerpt(); ?></div>
<a href="<?php the_permalink() ?>" class="more">więcej</a>
</div>
</div>
<?php endwhile;
else: ?>
<?php endif; ?>
</div>
</section>






<?php get_footer(); ?>
