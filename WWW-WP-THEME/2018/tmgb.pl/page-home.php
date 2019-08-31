<?php /*Template Name: Home page*/?>

<?php get_header(); ?>




<section id="home" class=" header_box"
style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>')">

<div class="header_content container fadeInLeft">
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
  <a href="<?php echo home_url() ?>/realizacje">
    <div id="header_button" class="button_std">Nasze realizacje</div>
  </a>
</div>
</section>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-5 owner_box">
      <div class="owner" style="background-image: url('<?php the_field('the_content2_foto')?>')"></div>
    </div>
    <div class="col-md-7 the_content2_text">
      <?php the_field('the_content2_text')?>
    </div>
  </div>
</div>


<div class="animate">
  <?php echo do_shortcode('[tf_numbers name="164"]') ?>
</div>

  <?php get_template_part('content', 'cta') ?>
  <?php get_footer(); ?>
