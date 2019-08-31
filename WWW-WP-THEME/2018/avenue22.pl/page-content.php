<?php /*Template Name: CONTENT*/?>
<?php get_header(); ?>

<?php get_template_part( 'prgrm', 'menu3' ) ?>


<div class="full_slider">
<div class="slides_box">
<div class="slide_bg active_slide" style="background-image: url('  <?php echo get_the_post_thumbnail_url(); ?>')"></div>
</div>
</div>

<section class="content <?php if (is_page(826)) {echo 'contact_content';} ?>">
  <div class="img_box"><img src="<?php echo get_template_directory_uri() ?>/img/logo_content.png" alt=""></div>
  <div class="content_box">

    <?php get_template_part( 'prgrm', 'main' ) ?>
  </div>
</section>



<?php get_footer(); ?>
