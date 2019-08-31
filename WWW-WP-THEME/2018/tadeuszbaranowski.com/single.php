
<?php get_header(); ?>
<?php get_template_part( 'content', 'men2' );?>





<section id="news-body">

<div class="container">
<div class="separ"></div>
<h1><?php echo get_the_title();?></h1>

<div class="row">

<div class="col-md-12">

  <?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();


  if (get_the_content()){
  echo '<div class=" container">';
            the_content();
  echo '</div>';
  } // end is content statment


    } // end while
  } // end if
  ?>


</div>
</div></div>
</section>



<?php get_footer(); ?>
