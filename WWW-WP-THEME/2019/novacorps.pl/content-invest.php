<div class="row invest-item animate">

  <div class=" investitem-fotocolumn col-lg-5">
    <img class=" border_main_foto" src="<?php the_field('invest_item_foto')?>" alt="">
  </div>

  <div class="col-lg-7">

    <div class="name_box box_flex">
      <div class="name_box_title ">
        <h4><?php the_field('invest_item_subtitle')?></h4>
        <H2 class="line"><?php echo get_the_title(); ?></H2>
      </div>
      <div class="name_box_logo">
        <img src="<?php the_field('invest_item_logo')?>" alt="">
      </div>
    </div>

    <div class="param_box box_flex">

<?php if ( have_rows('invest_item_usp_loop') ): ?>
    <?php while ( have_rows('invest_item_usp_loop') ) : the_row(); ?>

      <div class="param_item">
        <img src="<?php the_sub_field('invest_item_usp_loop_icon')?>" alt="">
        <span><?php the_sub_field('invest_item_usp_title')?></span>
      </div>

    <?php endwhile; ?>
<?php endif; ?>


    </div>

<div class="hide-show-panel">
<div class="hide-box">
  <img class=" d-lg-none border_main_foto" src="<?php the_field('invest_item_foto')?>" alt="">
  <div class="prgrm_visual_editor">
  <?php the_field('invest_item_content')?>
  </div>
</div>

<div class="buttons">
  <div class=" d-lg-none btn show-more btn-light">Pokaż więcej</div>
  <a target="_blank" href="<?php the_field('invest_item_link')?>" class="btn" >Strona inwestycji</a>
</div>
</div>
  </div>
</div>
