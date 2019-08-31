<?php get_header(); ?>



<div class="banner1" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
<div class="fade-in-element3 scale075">

  <img src="<?php echo get_template_directory_uri() ?>/img/T.Baranowski_glowna.svg" alt="">
<div class="main_header">
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

</div>

<?php if (get_field('active')): ?>
  <div id="pop_up_info">

    <?php the_field('pop-up-content')?>
  <div id="pop_up_info_close">x</div>
  </div>

<?php endif; ?>

</div>
</div>


  <?php get_footer(); ?>
