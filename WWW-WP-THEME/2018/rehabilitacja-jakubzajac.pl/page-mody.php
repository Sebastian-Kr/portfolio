<?php /*Template Name: Mody*/?>


<?php get_header(); ?>
<?php get_template_part( 'special_modules/content', 'slider' );?>

<?php get_template_part('special_modules/prgrm', 'header');?>
<?php get_template_part('special_modules/prgrm', 'main');?>
<?php get_template_part( 'special_modules/content', 'carousel' );?>
<?php get_template_part( 'special_modules/content', 'open' );?>

<?php get_template_part( 'special_section_gen/content', 'generator' );?>
<?php get_footer(); ?>
