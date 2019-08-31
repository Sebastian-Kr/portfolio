<?php /*Template Name: Poznaj Margot*/?>

<?php get_header(); ?>

<section class="header_page dark-box" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>'">
  <div class="container"><div class="row">
    <div class="col">
      <h1 class="text-center"><?php the_title() ?></h1>
      <?php if (get_field('subtitle')): ?>
        <h3 class="text-center"><?php the_field('subtitle')?></h3>
      <?php endif; ?>
   </div>
  </div>
</div>
</section>



<section>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <?php get_template_part('template-parts/content', 'main');?>
      </div>
    </div>
  </div>

</section>


<?php get_footer(); ?>
