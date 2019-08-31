

<?php
// Standard Variable
$css_custom = get_sub_field('css_class_section');
$id = 'P'.get_the_ID().'_S'.$GLOBALS['section_counter'];
$css_theme = get_sub_field('theme');
?>
<section id="<?php echo $id ?>" class="<?php echo $css_theme; echo ' '; echo $css_custom ?>">


<?php
$css = get_sub_field('css_class');
$comment = get_sub_field('dev_coment');
?>

<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>

<?php if (get_sub_field('theme')=='col2'): ?>

<div id="tileslinkv0" class="tileslinkv0 col2 ">

<div  class="container">
<div class="row">

  <?php if ( have_rows('tiles_link_hover_v0_single_tiles') ): ?>
      <?php while ( have_rows('tiles_link_hover_v0_single_tiles') ) : the_row(); ?>

<div class="col-sm-6">

<a href="<?php the_sub_field('tiles0_link'); ?>" data-title="<?php the_sub_field('tiles0_title'); ?>" class="title <?php the_sub_field('css_tiles') ?> ">
    <img src="<?php the_sub_field('tiles0_foto'); ?>" alt="" />
</a>
<p><?php the_sub_field('css_tiles') ?></p>
</div>

      <?php  endwhile; ?>
  <?php endif; ?>


</div>
</div>
</div>
<?php endif; ?>

<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>


<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>

<?php if (get_sub_field('theme')=='col3'): ?>

<div id="tileslinkv0" class="tileslinkv0 col3 ">

<div  class="container">
<div class="row">


  <?php if ( have_rows('tiles_link_hover_v0_single_tiles') ): ?>

      <?php while ( have_rows('tiles_link_hover_v0_single_tiles') ) : the_row(); ?>


<div class="col-sm-4">

<a href="<?php the_sub_field('tiles0_link'); ?>" data-title="<?php the_sub_field('tiles0_title'); ?>" class="title <?php the_sub_field('css_tiles') ?> ">
    <img src="<?php the_sub_field('tiles0_foto'); ?>" alt="" />
</a>

</div>

      <?php  endwhile; ?>
  <?php endif; ?>

</div>
</div>
</div>
<?php endif; ?>

<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>


<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>

<?php if (get_sub_field('theme')=='col4'): ?>

<div id="tileslinkv0" class="tileslinkv0 col4 ">

<div  class="container">
<div class="row">


  <?php if ( have_rows('tiles_link_hover_v0_single_tiles') ): ?>

      <?php while ( have_rows('tiles_link_hover_v0_single_tiles') ) : the_row(); ?>


<div class="col-sm-3">

<a href="<?php the_sub_field('tiles0_link'); ?>" data-title="<?php the_sub_field('tiles0_title'); ?>" class="title <?php the_sub_field('css_tiles') ?> ">
    <img src="<?php the_sub_field('tiles0_foto'); ?>" alt="" />
</a>

</div>

      <?php  endwhile; ?>
  <?php endif; ?>

</div>
</div>
</div>
<?php endif; ?>

<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>

<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>

<?php if (get_sub_field('theme')=='fullScreen50'): ?>



      <div class="container-fluid full-till-box"><div class="row">


  <?php if ( have_rows('tiles_link_hover_v0_single_tiles') ): ?>

      <?php while ( have_rows('tiles_link_hover_v0_single_tiles') ) : the_row(); ?>


<div class="col-md-6 till <?php the_sub_field('css_tiles') ?>">
          <a href="<?php the_sub_field('tiles0_link'); ?>">
        <div class="till-bg" style="background-image: url('<?php the_sub_field('tiles0_foto'); ?>')"></div>
      <div class="till_caption">
        <h3><?php the_sub_field('tiles0_title'); ?></h3>
      <button type="button" class="btn btn-secondary">Dowiedz się więcej</button>
      </div>
      </a>
      </div>




      <?php  endwhile; ?>
  <?php endif; ?>


</div></div>

<?php endif; ?>

<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>


<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>

<?php if (get_sub_field('theme')=='buttons2x'): ?>



      <div class="container"><div class="row">
  <?php if ( have_rows('tiles_link_hover_v0_single_tiles') ): ?>
      <?php while ( have_rows('tiles_link_hover_v0_single_tiles') ) : the_row(); ?>

<div class="col-md-6  <?php the_sub_field('css_tiles') ?>">
          <a href="<?php the_sub_field('tiles0_link'); ?>">
<div class="btn"><?php the_sub_field('tiles0_title'); ?></div>
</a>
      </div>


      <?php  endwhile; ?>
  <?php endif; ?>


</div></div>

<?php endif; ?>

<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>


<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>

<?php if (get_sub_field('theme')=='ribbon-reverse-3col'): ?>

<div id="tileslinkv0" class="tileslinkv0 col3 ">

<div  class="container">
<div class="row">


  <?php if ( have_rows('tiles_link_hover_v0_single_tiles') ): ?>

      <?php while ( have_rows('tiles_link_hover_v0_single_tiles') ) : the_row(); ?>


<div class="col-sm-6 col-md-4">

<a href="<?php the_sub_field('tiles0_link'); ?>" style="background-image:url('<?php the_sub_field('tiles0_foto'); ?>')" data-title="<?php the_sub_field('tiles0_title'); ?>" class="title ribbon reverse  <?php the_sub_field('css_tiles') ?> ">
    <!-- <img src="<?php the_sub_field('tiles0_foto'); ?>" alt="" /> -->

</a>

</div>

      <?php  endwhile; ?>
  <?php endif; ?>

</div>
</div>
</div>
<?php endif; ?>

<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>


</section>
