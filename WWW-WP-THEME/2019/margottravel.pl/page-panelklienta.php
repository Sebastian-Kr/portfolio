<?php /*Template Name: Panel klienta*/?>




<?php get_header(); ?>


<div class="search_panel" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>'">

<h2>Podaj KOD klienta</h2>

  <div class="search_box mt50 mb50">
    <?php echo do_shortcode( '[ivory-search id="136" title="Default Search Form"]' ) ?>
  </div>

<div class="container search_panel_info">
  <div class="row">
    <div class="offset-lg-2 col-lg-8 col-md-1 col-md-10 text-center content_box">
      <?php get_template_part('template-parts/content', 'main');?>
    </div>
  </div>
</div>

</div>

<?php get_footer(); ?>
