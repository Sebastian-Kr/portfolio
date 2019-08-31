
<?php get_header(); ?>


<?php get_header(); ?>
<?php get_template_part('template_parts/prgrm', 'header');?>

<div class="blogpost_main_container">


  <div class="blogpost_main_contentbox">

    <div class="img_column
      <?php if (get_field('film_url')) {echo 'play_film';} ?>"
     style="background-image: url('<?php the_field('miniature')?>')">
     <?php if (get_field('film_url')): ?>
       <div class="play_box"></div>

 <div id="prgrm_lightbox" class="galleryId1 prgrm_lightbox">
  <div class="close"></div>
  <div class="LigthboxContent">
    <?php the_field('film_url')?>
  </div>
</div>
<div class="backdrop"></div>
     <?php endif; ?>
    </div>

    <div class="text_column">
      <div id="blogpost_text_container" class="scroll_content_container">

      <div class="content_part1 arrow_hide">
        <h1><?php echo the_title(); ?></h1>
        <div id="content_part1_target"></div>
        <div class="content_part_text">
          <?php get_template_part('template_parts/prgrm', 'main');?>
        </div>
        <div data-target="content_part2_target" class="scroll_arrow scroll_arrow_down"></div>
      </div>

      <div class="content_part2 ">
      <div id="content_part2_target"></div>
      <div class="content_part_text">
        <?php the_field('additional_content')?>
      </div>
      <div data-target="content_part1_target" class="scroll_arrow scroll_arrow_top"></div>
      </div>

      </div>
    </div>
  </div>

</div>


<?php get_footer(); ?>
