<div class="anchor" id="kategorieprezentacji"></div>
<div class="category_box">
<div class="container">
  <div class="tile tile_content title_box">
<h4><?php the_field('title_category_box', 585)?></h4>
</div>
  <?php if ( have_rows('tiles_category', 585) ): ?>
      <?php while ( have_rows('tiles_category', 585) ) : the_row(); ?>
    <div class="tile tile_content">
      <a href="<?php the_sub_field('tiles_category_link', 585) ?>">
      <img src="<?php the_sub_field('tiles_category_img', 585) ?>" alt="">
  <span class="title"><?php the_sub_field('tiles_category_title', 585) ?></span>
</a>
    </div>

      <?php endwhile; ?>
  <?php endif; ?>
</div>
</div>
