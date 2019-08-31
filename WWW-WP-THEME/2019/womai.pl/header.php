<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="author" content="PROGREMO.PL">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name=“generator” content=“WordPress”>

        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/FAVICON_WOMAI.png" />
        <meta property="og:title" content="<?php bloginfo( 'name' ) ?>" />
        <meta property="og:site_name" content="<?php bloginfo('description') ?>" />
        <meta property="og:locale" content="pl_PL">
        <meta property="og:description" content="<?php bloginfo('description') ?>" />
        <meta property="og:type" content="website"/>
        <meta name="twitter:card" content="summary">
        <meta name="twitter:description" content="<?php bloginfo('description') ?>">
        <meta name="twitter:title" content="<?php bloginfo( 'name' ) ?>">
        <meta name="og:url" content="<?php echo home_url(); ?>">
        <meta name="fb:app_id" content="<?php echo home_url(); ?>">
        <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/FB_WOMAI.png"/>
        <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/img/FB_WOMAI.png"/>

        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>
        </head>
        <body <?php body_class(); ?>>


<?php if (is_home()): ?>

  <div class="preloader_box">
  <video autoplay>
   <source src="http://womai.progremo.pl/Womai-intro-final.mp4" type="video/mp4">
  </video>
  <div class="preloader_img">
    <img src="<?php echo get_template_directory_uri() ?>/img/WOMAI LOGO_800_1200.JPG" alt="">
  </div>
  </div>

<?php endif; ?>


<div class="full_background_slider">
  <div class="slides_box"></div>
</div>

<div id="main_page_frame"></div>

<?php get_template_part( 'template_parts/prgrm', 'menu' ) ?>
