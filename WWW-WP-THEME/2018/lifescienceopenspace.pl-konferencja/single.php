
<?php get_header(); ?>

<div class="single_page_header">
<div class="bg" ></div>
</div>


<div class="container pt70">
  <div class="row">
    <div class="col-md-12">
          <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
          <h1 class="pt50"><?php echo the_title() ?></h1>
              <h6><?php the_field('subtitle')?></h6>
    </div>
  </div>
</div>

<div class="single_page_content container"><div class="row"><div class="col-md-12">
  <div class="mb-50 text-center"><?php get_template_part('special_modules/prgrm', 'main');?></div>
</div></div>
</div>



<?php get_template_part( 'section_generator2/content', 'generator' );?>


<?php get_footer(); ?>
