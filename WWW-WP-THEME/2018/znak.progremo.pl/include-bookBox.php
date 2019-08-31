<div class=" book_box visual-buildere">
<a href="<?php echo get_permalink() ?>">
<img src="<?php echo get_the_post_thumbnail_url()?>" alt="">
<div class="std-border2"></div>
<h3><?php echo the_field('book_short_polish_title') ?></h3>
<h3><?php echo the_field('book_short_english_title') ?></h3>
<p>Author:  <?php   echo get_the_title(get_field('this_book_author_id'));?></p>
</a>
</div>
