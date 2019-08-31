
<?php

?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'header' );?>

<div class="container mt50 mb50">
  <div class="row news-info">
   <div class="col-sm-12  main-content">
     <h1 class="ct"><?php echo the_title() ?></h1>
     <?php if (get_field('subtitle1')): ?>
       <div class="sub-title"><?php echo the_field('subtitle1') ?></div>
     <?php endif; ?>
     <?php if (get_field('hr')): ?><div class="sep"></div><?php endif; ?>
     <?php
     if ( have_posts() ) {
       while ( have_posts() ) {
         the_post();
     if (get_the_content()){
               the_content();
     } // end is content statment
       } // end while
     } // end if
     ?>
      </div></div></div>

<?php get_footer(); ?>
