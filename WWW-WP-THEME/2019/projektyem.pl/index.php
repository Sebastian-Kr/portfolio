
<?php get_header(); ?>

<?php get_template_part( 'prgrm', 'menu3' ) ?>



<section class="content <?php if (is_page(826)) {echo 'contact_content';} ?>">
  <?php get_template_part( 'prgrm', 'main' ) ?>

</section>



<?php get_footer(); ?>
