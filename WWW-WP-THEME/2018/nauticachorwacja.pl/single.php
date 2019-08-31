
<?php

?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>
<?php get_template_part( 'content', 'header2' );?>
<?php get_template_part( 'content', 'main' );?>
<?php get_template_part( 'content', 'gallery'); ?>


<div class="container-fluid maxw"><div class="row">
<div class="col-md-6"><?php echo the_field('add-custom-html') ?></div>
</div>


<div class="prefooter mb2">
<a href="javascript:history.back()"><div class="powrot">powrót</div></a>
</div>
</div>

<?php get_footer(); ?>
