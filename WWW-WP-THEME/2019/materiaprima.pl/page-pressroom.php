<?php /*Template Name: Press room*/?>

<?php get_header(); ?>

<section>
  <div class="container mb30"><div class="row">
    <div class=" col-lg-10 col-xl-7">
      <h1 class="mb30"><?php the_title() ?></h1>
      <h5><?php the_field('subtitle')?></h5>
    </div>
  </div></div>

  <div class="container">
    <div class="row">
<?php if ( have_rows('press_info_loop') ): ?>
    <?php while ( have_rows('press_info_loop') ) : the_row(); ?>
<div class="col-lg-11 col-xl-9 scroll_box mb30">
  <?php the_sub_field('press_info_excerpt')?>
  <div class="hide_box"><?php the_sub_field('press_info_full')?></div>
  <button class="more_button btn_pink_arrow2 mb20"><?php echo __('[:pl]Rozwiń[:en]Show more'); ?></button>
</div>
    <?php endwhile; ?>
<?php endif; ?>
    </div>
  </div>

</section>

<section class="download_section">
  <div class="container"><div class="row">
    <div class="col-md-12"><h5 class="mb50"><?php echo __('[:pl]Materiały do pobrania[:en]Downloadable materials'); ?></h5></div>
    <?php if ( have_rows('download_loop') ): ?>
        <?php while ( have_rows('download_loop') ) : the_row();
         $ID = get_sub_field('download_file');
         $filesize = filesize( get_attached_file($ID));
   $filesize = size_format($filesize, 2);
        ?>
<div class="col-md-6 col-lg-5">
  <div class="download_box">
    <a target="blank" href="<?php echo wp_get_attachment_url( $ID ); ?>">
      <h6><?php the_sub_field('download_title')?></h6>
      <p><?php echo __('[:pl]Rozmiar pliku[:en]File size'); ?>: <?php  echo $filesize; ?></p>
    </a>
  </div>
</div>
        <?php endwhile; ?>
    <?php endif; ?>
  </div></div>
</section>

<section class="more_contact">
<div class="container">
  <div class="row">

<div class="col-md-6">
  <?php the_field('add_custom_content')?>
</div>
<div class="col-md-6 small">
  <?php include('includes/content.php') ?>
</div>
  </div>
</div>
</section>

  <?php get_footer(); ?>
