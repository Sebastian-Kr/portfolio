
<?php

?>
<?php get_header(); ?>
<?php get_template_part(content, men2);?>
<?php get_template_part(content, header);?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <?php
      if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
      if (get_the_content()){
          the_content();
      } // end is content statment
      } // end while
      } // end if
        wp_reset_postdata();
      ?>

    </div>
  </div>
</div>

<?php get_template_part('special_section/content', 'generator') ?>



<!-- END MAIN CONTENT -->
<div class="semisepar"></div>

<?php get_footer(); ?>
