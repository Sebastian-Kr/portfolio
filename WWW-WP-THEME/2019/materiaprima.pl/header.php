<!DOCTYPE html>

<?php session_start();
if (is_page(2)) {$_SESSION['post_type'] = '';}
?>


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

</head>
<body>


<?php get_template_part( 'prgrm', 'menu2' ) ?>
<div id="page_<?php echo get_the_id()?>" class="main_content">
