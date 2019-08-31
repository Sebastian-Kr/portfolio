
<?php
/*
Template Name: Submenu
*/

?>

<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>
<?php get_template_part( 'content', 'header' );?>
<?php get_template_part( 'content', 'main' );?>



<?php

$submenu1 = get_field('submenu');
get_template_part('submenu', $submenu1);

?>

<?php get_template_part( 'content', 'theme'); ?>
<?php get_footer(); ?>
