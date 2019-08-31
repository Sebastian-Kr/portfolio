
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>





<section id="news-body">

<div class="container">
<div class="separ"></div>
<h1><?php echo get_the_title();?></h1>
</div>

<!-- SLIDER -->
<section class="portfolio">
	<div id="main-slider" class="carousel slide" data-ride="carousel">
		<div class="next-prf">
		<h5><a href="http://marikakafar.com/">POWRÓT</a></h5><br>
		<h5><?php previous_post_link( '%link', 'NASTĘPNY PROJEKT', TRUE ); ?></h5>
		</div>


		<div class="carousel-inner" role="listbox">

			<div class="item active" style='background-image: url("<?php the_field('pcf-zf-f1');?>")'>
				<div class="carousel-caption">
					<!-- <div><h2> <?php the_field('pcf-st1'); ?></h2></div> -->
				</div>

			</div>


      <?php if (get_field('pcf-zf-f2')): ?>
			<div class="item" style='background-image: url("<?php the_field('pcf-zf-f2');?>")'></div>
      <?php endif; ?>

      <?php if (get_field('pcf-zf-f3')): ?>
      <div class="item" style='background-image: url("<?php the_field('pcf-zf-f3');?>")'></div>
      <?php endif; ?>

      <?php if (get_field('pcf-zf-f4')): ?>
      <div class="item" style='background-image: url("<?php the_field('pcf-zf-f4');?>")'></div>
      <?php endif; ?>

      <?php if (get_field('pcf-zf-f5')): ?>
      <div class="item" style='background-image: url("<?php the_field('pcf-zf-f5');?>")'></div>
      <?php endif; ?>

      <?php if (get_field('pcf-zf-f6')): ?>
      <div class="item" style='background-image: url("<?php the_field('pcf-zf-f6');?>")'></div>
      <?php endif; ?>

      <?php if (get_field('pcf-zf-f7')): ?>
      <div class="item" style='background-image: url("<?php the_field('pcf-zf-f7');?>")'></div>
      <?php endif; ?>




			<a class="left carousel-control" href="#main-slider" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left"></span>
	<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#main-slider" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right"></span>
	<span class="sr-only">Next</span>
</a>

		</div>


		<!-- Indicators -->
   <div class="glass">
     <h6><?php echo get_the_title();?></h6>
     <p><?php
     if ( have_posts() ) {
       while ( have_posts() ) {
         the_post();
     if (get_the_content()){
               the_content();
     } // end is content statment
       } // end while
     } // end if
     ?></p>

   </div>

	 
	</div>
</section>
<!-- SLIDER -->
</section>



<?php get_footer(); ?>
