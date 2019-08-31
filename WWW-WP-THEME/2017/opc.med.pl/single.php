
<?php get_header(); ?>
<?php get_template_part( 'content', 'header' );?>

<div class="header2">
    
    <h1><?php the_title(); ?></h1>
</div>

<section></section>
  <div class="container"><div class="header4" style=" background-image: url('<?php the_field('header3'); ?>')"></div></div>

<div class="bg1">
<?php if (get_field('add_section2')): ?>
<section class="g-section">
    <div class="container">
        
        <?php the_field('section_2'); ?>
        
    </div>
</section>
<?php endif; ?>
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