<?php
/*
	 * Template Name: Nurkowanie Hvar
	 * Template Post Type: post
	 */

?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>

<section id="header" style="background-image: url('<?php echo get_the_post_thumbnail_url(3052,'full') ?>')">


<div class="gradient"></div>

<div id="header-bar">
  <div class="container-fluid maxw">
<h1><?php
$id = get_the_id();
$cat =wp_get_post_categories($id);
echo get_cat_name( $cat[0]);
?>
</h1>
</div>
</div>
</section>



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
