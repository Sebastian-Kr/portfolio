<?php get_header(); ?>
<?php get_template_part(content, menu);?>
<section id="header">
	<div class="contianer">
		<span class="square hed">BAZA WIEDZY - sprawdź czy Twoja strona ma wszystko czego potrzebuje</span>
	</div>
</section>

<div class="excerpt-news container">
	<span class="h"><?php the_title();?></span>

<span class="entry-date glyphicon glyphicon-pencil"> Opublikowany: <?php echo get_the_date(); ?></span>

	<div >
		<?php if (get_field('excerpt')): ?>
		<?php the_field('excerpt'); ?>
		<?php endif; ?>
	</div>
	<div class="row">
	<?php if (the_post_thumbnail()): ?>
	<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'thumbnail-header' ) );?>
	<?php endif;?>
	</div>
</div>

<section class="blog-content">
<?php get_template_part(content, main);?>
<?php get_template_part(content, acfbuilder);?>
</section>


<section id="seealso" class="tiles">


<?php 

	if (get_field('see-also1')) 
	{$seealso1 = get_field('see-also1');} 
	else {$seealso1=46;}

	if (get_field('see-also2')) 
	{$seealso2 = get_field('see-also2');} 
	else {$seealso2=42;}

	if (get_field('see-also3')) 
	{$seealso3 = get_field('see-also3');} 
	else {$seealso3=191;}


?>



	<div class="container">
	<hr class="solid">
<h6>ZOBACZ TAKŻE:</h6>
	<div class="row">



		<!-- begin column -->
		<div class="col-md-4 col-sm-6">
			
			<div class="t-item square tx plain">

				<div class="news">
					<a href="<?php the_permalink($seealso1); ?>">
						
						<?php echo get_the_post_thumbnail( $seealso1, 'full', array( 'class' => 'thumbnail-header' ) );?>
						<h3><?php echo get_the_title($seealso1)?></h3>

					</div>

			
					<div class="butn-cont">
					<div class="button">
					Czytaj więcej >>
						
					</div>
					</div>
				</a>
			</div>
			<!-- end news div -->
		</div><!-- end column-->
		
		
		<!-- begin column -->
		<div class="col-md-4 col-sm-6">
			
			<div class="t-item square tx plain">

				<div class="news">
					<a href="<?php the_permalink($seealso2); ?>">
						
						<?php echo get_the_post_thumbnail( $seealso2, 'full', array( 'class' => 'thumbnail-header' ) );?>
						<h3><?php echo get_the_title($seealso2)?></h3>

					</div>

			
					<div class="butn-cont">
					<div class="button">
					Czytaj więcej >>
						
					</div>
					</div>
				</a>
			</div>
			<!-- end news div -->
		</div><!-- end column-->
		
		
		
		<!-- begin column -->
		<div class="col-md-4 col-sm-6">
			
			<div class="t-item square tx plain">

				<div class="news">
					<a href="<?php the_permalink($seealso3); ?>">
						
						<?php echo get_the_post_thumbnail( $seealso3, 'full', array( 'class' => 'thumbnail-header' ) );?>
						<h3><?php echo get_the_title($seealso3)?></h3>

					</div>

			
					<div class="butn-cont">
					<div class="button">
					Czytaj więcej >>
						
					</div>
					</div>
				</a>
			</div>
			<!-- end news div -->
		</div><!-- end column-->
		
		
	<!-- end row -->


	</div>
</section>
<?php get_footer(); ?>


<div>