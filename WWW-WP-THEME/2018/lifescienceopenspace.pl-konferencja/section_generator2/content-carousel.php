

<div class="anchor"
<?php if (get_sub_field('id_container')): ?>

  id="<?php the_sub_field('id_container')?>"

<?php endif;?> ></div>



<section class="carousel1_section std-border">
  <div class="container">

<div class="slide-items1 mt">


<?php if ( have_rows('carousel1_loop') ): ?>
    <?php while ( have_rows('carousel1_loop') ) : the_row(); ?>

<div class="slide_item">
  <a href="<?php the_sub_field('carousel1_item_link') ?>">
<img src="<?php the_sub_field('carousel1_item_img')?>" alt="">
</a></div>

<?php endwhile; ?>
<?php endif; ?>

</div>
</div>

</section>
