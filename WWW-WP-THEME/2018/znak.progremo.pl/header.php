<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="author" content="PROGREMO.PL">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">



        <meta name=“generator” content=“WordPress”>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


        <?php wp_head(); ?>




</head>
<body>
<div class="thetop mt-50"></div>

<?php get_template_part( 'content', 'menu' ) ?>

<!-- OFF OLD SLIDER -->
<!-- <?php if (is_front_page()): ?>
	<?php get_template_part( 'content', 'slider' ) ?>
<?php endif ?> -->




<?php // standard header
if (!(is_front_page())): ?>


<div class="mt80"></div>

<?php endif ?>

<div class="main_content">
