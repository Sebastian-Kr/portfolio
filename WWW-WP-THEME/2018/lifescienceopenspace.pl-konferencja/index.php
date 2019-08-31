
<?php get_header(); ?>

<div class="single_page_header">
<div class="bg"></div>
</div>

<div class="single_page_content container"><div class="row"><div class="col-md-12">
  <h1 class="pt50"><?php echo the_title() ?></h1>
  <div class="mb-50"><?php get_template_part('special_modules/prgrm', 'main');?></div>
</div></div></div>

<?php get_template_part( 'section_generator2/content', 'generator' );?>




<?php get_footer(); ?>
