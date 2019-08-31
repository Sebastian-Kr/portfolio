<div class="blog-item-container ">
  <a class="blog-item-content flipInY animated delay-1s" href="<?php the_permalink(); ?>">
        <div class="miniature_column" style="background-image: url('<?php the_field('miniature')?>')"></div>
        <span class="text_column">
          <h3><?php echo get_the_title();?></h3>
          <p><?php the_field('excerpt'); ?></p>
        </span>
        <div data-target="content_part2_target" class="scroll_arrow scroll_arrow_down"></div>
  </a>
</div>
