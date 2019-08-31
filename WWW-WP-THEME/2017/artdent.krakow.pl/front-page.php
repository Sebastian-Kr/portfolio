<?php get_header(); ?>

<?php get_template_part( 'content', 'men' );?>
<?php get_template_part( 'content', 'slider' );?>







<?php get_template_part( 'content', 'main' );?>
<?php get_template_part( 'content', 'theme' ); ?>

<section id="sztuka-stomatologii" class=" mobihide pb0 vpc2">

<div class="scale-l bg-cover vcc" style="background-image: url('<?php echo get_template_directory_uri()?>/img/dentysta-krakow-zabiegi-na-lata.jpg')">
<div class="vhc center"><h3><mark>ArtDent</mark><br>Sztuka stomatologii, <br>przewidywane efekty leczenia na lata</h3></div>
</div>
</section>

<?php get_template_part('content', 'oceny'); ?>
<?php get_template_part('content', 'prefooter'); ?>

<?php get_footer(); ?>
