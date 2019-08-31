<?php /*Template Name: Wszyscy pracodawcy*/?>

<?php get_header(); ?>


<!-- HEADERS FORMS  -->
<?php get_template_part('content', 'employers_header') ?>
<!-- HEADERS FORMS  END -->


<!-- DISPLAY RESULTS -->
<?php get_template_part('content', 'employers_loop') ?>
<!-- DISPLAY RESULTS END -->

<?php get_footer(); ?>
