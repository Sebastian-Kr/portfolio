<?php get_header(); ?>

<?php get_template_part( 'prgrm', 'menu3' ) ?>



<section class="content-contaner" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
<img class="d-md-none" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
  <div class="content_box">
    <?php get_template_part( 'prgrm', 'main' ) ?>
<a href="<?php echo get_permalink(803) ?>" class="btn">Galeria projektów</a>
  </div>
</section>



<?php get_footer(); ?>
