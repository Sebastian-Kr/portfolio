
<section id="karuzela1" class="std-border">
  <div class="container">

<div class="slide-items1 mt">


<?php if ( have_rows('carousel1_loop', 239) ): ?>
    <?php while ( have_rows('carousel1_loop', 239) ) : the_row(); ?>

<div class="slide_item">
  <a href="<?php the_sub_field('carousel1_item_link', 239) ?>">
<img src="<?php the_sub_field('carousel1_item_img', 239)?>" alt="">
</a></div>

<?php endwhile; ?>
<?php endif; ?>

</div>
</div>

</section>
