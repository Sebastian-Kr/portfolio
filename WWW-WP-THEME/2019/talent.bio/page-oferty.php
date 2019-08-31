<?php /* Template Name: Wszystkie oferty pracy */

$_SESSION['offers_filter']['areas'] = '';
$_SESSION['offers_filter']['forms'] = '';
$_SESSION['offers_filter']['position'] = '';
$_SESSION['offers_filter']['place'] = '';


$url = get_permalink(101);
wp_redirect( $url );
    exit;
?>
