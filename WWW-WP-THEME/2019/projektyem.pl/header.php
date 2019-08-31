<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="author" content="PROGREMO.PL">
        <meta charset="UTF-8" />
        <meta name=“generator” content=“WordPress”>
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta property="og:title" content="<?php bloginfo( 'name' ) ?>" />
    		<meta property="og:site_name" content="<?php bloginfo('description') ?>" />
    		<meta property="og:locale" content="pl_PL">
    		<meta property="og:description" content="<?php bloginfo('description') ?>" />
    		<meta property="og:type" content="website"/>
    		<meta name="twitter:card" content="summary">
    		<meta name="twitter:description" content="<?php bloginfo('description') ?>">
    		<meta name="twitter:title" content="<?php bloginfo( 'name' ) ?>">
        <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/logo.svg"/>
        <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/img/logo.svg"/>

        <title><?php bloginfo( 'name' ) ?></title>
        <meta name="description" content="<?php bloginfo('description') ?>">
<meta name="keywords" content="<?php the_field('keywords')?>">

        <?php wp_head(); ?>
        <script type="text/javascript">
        <?php
$fotos = '';
$opis1 = '';
$opis2 = '';
$counter = 1;
        ?>
          <?php if ( have_rows('slider_fotos') ): ?>
             <?php while ( have_rows('slider_fotos') ) : the_row(); ?>
               <?php
            $fotos .=  '"';

            $fotos .=  get_sub_field('slider_foto_item');
            $fotos .=  '", ';


            $opis1 .=  '"';
            $opis1 .=  get_sub_field('opis_1');
            $opis1 .=  '", ';

            $opis2 .=  '"';
            $opis2 .=  get_sub_field('opis_2');
            $opis2 .=  '", ';
               ?>
          <?php endwhile; ?>
         <?php endif; ?>
         <?php echo 'var fotos_php_array = ['.$fotos.'];';?>
         <?php echo 'var opis1_php_array = ['.$opis1.'];';?>
         <?php echo 'var opis2_php_array = ['.$opis2.'];';?>
        </script>

</head>
<body class="<?php if (get_the_id() == 808) {echo 'home_body';} ?>">
<div class="body_glass"></div>

<?php if (get_field('is_activ')): ?>
  <div class="body_glass2">
    <div class="cart">
      <div id="close">
      <img src="<?php echo get_template_directory_uri() ?>/img/close2.png" alt="">
      </div>
<img src="<?php the_field('pop-up_content')?>" alt="">
        </div>
  </div>
<?php endif; ?>
