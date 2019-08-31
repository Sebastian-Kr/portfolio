<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="author" content="PROGREMO.PL">
        <meta charset="UTF-8" />
        <meta name=“generator” content=“WordPress”>
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- NO CACHE  -->
        <meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
        <!-- NO CACHE END  -->


        <title><?php wp_title(); ?></title>

        <?php wp_head(); ?>
        <script type="text/javascript">
        <?php
$fotos = '';
$counter = 1;
        ?>
          <?php if ( have_rows('slider_fotos') ): ?>
             <?php while ( have_rows('slider_fotos') ) : the_row(); ?>
               <?php
            $fotos .=  '"';
            $fotos .=  get_sub_field('slider_foto_item');
            $fotos .=  '", ';
               ?>
          <?php endwhile; ?>
         <?php endif; ?>
         <?php echo 'var fotos_php_array = ['.$fotos.'];';?>
        </script>

</head>
<body>
<div class="body_glass"></div>
