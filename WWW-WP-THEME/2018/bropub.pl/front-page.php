<?php get_header(); ?>

<?php get_template_part( 'prgrm', 'slider' );?>

<?php get_template_part('page', 'piwo') ?>
<div id="parallax" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() ?>/img/paralaxa.jpg"></div>
<?php get_template_part('page', 'jedzenie') ?>
<?php get_template_part('page', 'gallery') ?>
<div id="wood_section">
  <?php get_template_part('page', 'transmisje') ?>
  <?php get_template_part('page', 'kontakt') ?>
</div>


<?php get_footer(); ?>
