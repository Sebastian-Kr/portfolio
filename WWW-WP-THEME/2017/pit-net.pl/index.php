
<?php

?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>


<section id="header" style='background-image: url("<?php the_field('pcf1-1');?>")'>

<div class="container">
  <h1 class="square"><?php echo get_the_title();?></h1>
</div>


</section>

<h2><?php the_field('pcf1') ?></h2>


<!-- END MAIN CONTENT -->
<div class="semisepar"></div>

<?php get_footer(); ?>
