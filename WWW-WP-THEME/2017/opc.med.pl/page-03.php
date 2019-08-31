<?php
/*
Template Name: 03 kafelki tekstowa
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'header' );?>
<?php get_template_part( 'content', 'breadcrumb2' );?>



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
<!-- SEKCJA ZOBACZ RÓWNIEŻ -->
<?php if (get_field('zobacz')): ?>
<section class="bg1">
	<div class="container section-item">
		<div class="row">
		<h2 class="zobacz">ZOBACZ RÓWNIEŻ</h2>
			<div class="col-md-6 ">
				<?php if (get_field('k1_foto')): ?>
				<?php if (get_field('kafelek_1_ikona_nfz')): ?>
				<img class="nfz" src="<?php echo get_template_directory_uri();?>/img/nfz.png">
				<?php endif; ?>
				<a href="<?php the_field('k1_link'); ?>" >
					<div class="plus-item" style="background-image: url('<?php the_field('k1_foto'); ?>')"></div>
					<div class="title-item"><img src="<?php echo get_template_directory_uri();?>/img/plus.png"><?php the_field('k1_title'); ?></div> </a>
					<?php endif; ?>
				</div>
				<div class="col-md-6 ">
					<?php if (get_field('k2_foto')): ?>
					<?php if (get_field('kafelek_2_ikona_nfz')): ?>
					<img class="nfz" src="<?php echo get_template_directory_uri();?>/img/nfz.png">
					<?php endif; ?>
					<a href="<?php the_field('k2_link'); ?>" >
						<div class="plus-item" style="background-image: url('<?php the_field('k2_foto'); ?>')"></div>
						<div class="title-item"><img src="<?php echo get_template_directory_uri();?>/img/plus.png"><?php the_field('k2_title'); ?></div> </a>
						<?php endif; ?>
					</div>
					<div class="col-md-6">
						<?php if (get_field('k3_foto')): ?>
						<?php if (get_field('kafelek_3_ikona_nfz')): ?>
						<img class="nfz" src="<?php echo get_template_directory_uri();?>/img/nfz.png">
						<?php endif; ?>
						<a href="<?php the_field('k3_link'); ?>" >
							<div class="plus-item" style="background-image: url('<?php the_field('k3_foto'); ?>')"></div>
							<div class="title-item"><img src="<?php echo get_template_directory_uri();?>/img/plus.png"><?php the_field('k3_title'); ?></div> </a>
							<?php endif; ?>
						</div>
						<div class="col-md-6">
							<?php if (get_field('k4_foto')): ?>
							<?php if (get_field('kafelek_4_ikona_nfz')): ?>
							<img class="nfz" src="<?php echo get_template_directory_uri();?>/img/nfz.png">
							<?php endif; ?>
							<a href="<?php the_field('k4_link'); ?>" >
								<div class="plus-item" style="background-image: url('<?php the_field('k4_foto'); ?>')"></div>
								<div class="title-item"><img src="<?php echo get_template_directory_uri();?>/img/plus.png"><?php the_field('k4_title'); ?></div> </a>
								
								<?php endif; ?>
							</div>
						</div>
					</div>
				</section>
				<?php endif;?>
				<!-- KONIEC SEKCJI ZOBACZ RÓWNIEŻ  -->
				<?php get_footer(); ?>