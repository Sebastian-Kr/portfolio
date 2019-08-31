<?php
get_header();
global $wp_query;
?>
<section id="category" class="page-content mt100 container">
<div id="content" role="main">

<div class="title mb50">
        <h2 class="archive-title"><?php _e( 'Wyniki dla hasła', 'locale' ); ?>: "<?php the_search_query(); ?>" </h2>
				<span>Znalezionych wyników: <?php echo $wp_query->found_posts; ?></span>
</div>
				<?php if ( have_posts() ) { ?>

            <?php while ( have_posts() ) { the_post(); ?>


								 <div class="box-category" >
								 <div class="small-box">
								 <div class="date">data dodania wpisu: <?php echo get_the_date('d-m-Y') ?> r.</div>
								 <div class="title-box"><?php echo the_title();?></div>
								 <p class="border"></p>
								 <div class="text">  <?php echo substr(get_the_excerpt(), 0,550).' ...'; ?></div>
								 <a href="<?php the_permalink() ?>" class="more">więcej</a>
								 </div>
								 </div>


            <?php } ?>
        <?php } ?>
</div></section>
<?php get_footer(); ?>
