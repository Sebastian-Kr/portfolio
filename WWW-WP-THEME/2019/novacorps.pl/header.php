<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="author" content="PROGERMO.PL - Sebastian Krajewski">

        <meta name=“generator” content=“WordPress”>
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/site.webmanifest">


        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta property="og:title" content="" />


        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>
        </head>
        <body <?php body_class(); ?>>



<?php get_template_part( 'template_parts/prgrm', 'menu' ) ?>
