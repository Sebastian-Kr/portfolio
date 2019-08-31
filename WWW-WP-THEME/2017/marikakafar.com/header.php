<!DOCTYPE html>
<html lang="pl" <?php if ((is_front_page())) {
 echo 'style="background-image: url(\'';
 echo get_template_directory_uri();
 echo '/img/architektura-wnetrz-warszawa-tlo.jpg\'" ';
 }
 ?>
 >

<head>
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=0">
<meta name=“generator” content=“WordPress”>

<?php wp_head(); ?>


</head>
<body  <?php if (!(is_front_page())) echo 'style="background-color:#fff"'?>>
