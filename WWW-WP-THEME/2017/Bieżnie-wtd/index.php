<?php get_header(); ?>

<h1><?php the_title();?></h1>

 

<div class="container"><div class="row"><div class="col-md-12">

 <?php
    $posts = get_posts(array(
     'include' => $post->ID, // NUMER ID DLA PODSTRONY
     'post_type' => 'any',
     'numberposts' => 1,
     'suppress_filters' => false,
));

echo apply_filters('the_content', $posts[0]->post_content); 
    ?>

	


</div></div>

<div class="row section"><?php the_field('sekcja_2'); ?></div>
<div class="row section"><?php the_field('sekcja_3'); ?></div>
<div class="row section"><?php the_field('sekcja_4'); ?></div>
<div class="row section"><?php the_field('sekcja_5'); ?></div>
<div class="row section"><?php the_field('sekcja_6'); ?></div>
<div class="row section"><?php the_field('sekcja_7'); ?></div>
<div class="row section"><?php the_field('sekcja_8'); ?></div>


</div>

<?php get_template_part( 'page', 'recomend' );?>


<?php get_footer(); ?>
