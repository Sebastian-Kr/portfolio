<?php
session_start();
require_once(TEMPLATEPATH.'/breadcrumb/clsBreadcrumb.php');

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    
    
    <link href="https://fonts.googleapis.com/css?family=Exo+2:400,700&amp;subset=latin-ext" rel="stylesheet">  
    <?php wp_head(); ?> 
</head>

<body >


