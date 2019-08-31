<?php
/*
Template Name: 06 menu tekstowa
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'header' );?>

<div class="bg2">
<?php get_template_part( 'content', 'baner' );?>
</div>



<?php if (get_field('add_section2')): ?>
<section class="g-section">
    <div class="container">
        
        <?php the_field('section_2'); ?>
        
    </div>
</section>
<?php endif; ?>

<div class="bg1">

<?php if (get_field('add_section3')): ?>

<section>
    <div class="container">
        
        <?php the_field('section_3'); ?>
    </div>
</section>
<?php endif; ?>

<?php if (get_field('add_section4')): ?>
<section class="g-section">
    <div class="container">
        
        <?php the_field('section_4'); ?>
        
    </div>
</section>
<?php endif; ?>



<?php if (get_field('add_section5')): ?>

<section>
    <div class="container">
        
        <?php the_field('section_5'); ?>
    </div>
</section>

<?php endif;?>

</div>
<?php get_footer(); ?>