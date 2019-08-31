
<?php get_header(); ?>

<?php get_template_part( 'prgrm', 'menu3' ) ?>

<div class="body_glass">
  <div class="cart">
    <div id="close">
    <img src="<?php echo get_template_directory_uri() ?>/img/close.png" alt="">
    </div>
    <img src="<?php echo get_template_directory_uri() ?>/img/char_cart.png" alt="">
  </div>
</div>


<div class="home_slider_container">
  <div class="slider_logo">
    <img src="<?php echo get_template_directory_uri() ?>/img/logo_slider.png" alt="">
  </div>


<div id="home_slider">



<?php if ( have_rows('slider_item') ): ?>
    <?php while ( have_rows('slider_item') ) : the_row(); ?>

<div class="slider_item" style="background-image: url('<?php the_sub_field('slider_item_foto')?>')">
<?php the_field('slide_item_content')?>

</div>


    <?php endwhile; ?>
<?php endif; ?>
</div>
</div>

  <div class="container mt30">
    <div class="row">
      <div class="col-md-12 text-center">
     <h1><?php echo __('[:pl]Suknie Ślubne[:en]Wedding dresses'); ?></h1>
        <div class="subtitle_box">
<div class="line_box short_line"></div>
          <!-- <img src="<?php echo get_template_directory_uri() ?>/img/line_l.png"> -->
         <span class="col1"><?php echo __('[:pl]KOLEKCJA[:en]COLLECTION'); ?></span>

         <div class="line_box short_line"></div>
          <!-- <img src="<?php echo get_template_directory_uri() ?>/img/line_r.png"> -->
        </div>

      </div>
    </div>
  </div>



<div class="container big_container mt30">
  <div class="row">
    <div class="col-sm-4">
      <a href="<?php echo get_permalink(823) ?>">
      <div class="tiles">
        <img src="<?php echo get_the_post_thumbnail_url(823)?>" alt="">
        <h2><?php echo get_the_title(823) ?></h2>
      </div>
      </a>
    </div>
    <div class="col-sm-4">
      <a href="<?php echo get_permalink(1027) ?>">
        <div class="tiles">
        <img src="<?php echo get_the_post_thumbnail_url(1027)?>" alt="">
        <h2><?php echo get_the_title(1027) ?></h2>
      </div></a>
    </div>
    <div class="col-sm-4">
      <a href="<?php echo get_permalink(1032) ?>">
      <div class="tiles">
        <img src="<?php echo get_the_post_thumbnail_url(1032)?>" alt="">
        <h2><?php echo get_the_title(1032) ?></h2>
      </div>
      </a>
    </div>
  </div>
</div>


<div class="container mt30 mb60">
  <div class="row">
    <div class="col-md-12 text-center">
<div class="line_box"></div>
    <!-- <img src="<?php echo get_template_directory_uri() ?>/img/line1.png" alt=""> -->

    </div>
  </div>
</div>

<?php get_footer(); ?>
