

<?php
// Standar Variable
$css_custom = get_sub_field('css_class_section');
$id = 'P'.get_the_ID().'_S'.$GLOBALS['section_counter'];
$css_theme = get_sub_field('theme');
$container_type = get_sub_field('container_type');
?>
<section id="<?php echo $id ?>" class="<?php echo $css_theme; echo ' '; echo $css_custom ?>">


<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>


<div  class="<?php echo $container_type ?>"><div class="row">



<?php if ( have_rows('foto_text_items') ): ?>

    <?php while ( have_rows('foto_text_items') ) : the_row();

// $class = the_sub_field('foto_text_item_width');
// the_sub_field('foto_text_item_type');
// the_sub_field('foto_text_item_text');
// the_sub_field('foto_text_item_foto');

if (get_sub_field('foto_text_item_width')==='50%') {
  $class = 'col-md-6';
}

elseif (get_sub_field('foto_text_item_width')==='33%') {
  $class = 'col-md-4 ';
}

elseif (get_sub_field('foto_text_item_width')==='25%') {
  $class = 'col-md-3 col-sm-6';
}
    ?>

<div class=" <?php echo $class.' '; the_sub_field('foto_text_item_css') ?>">

<div class="foto_text_item_content" style="background-image: url('<?php the_sub_field('foto_text_item_foto') ?>')">
  <?php the_sub_field('foto_text_item_text') ?>
</div>

</div>
<br>

    <?php  endwhile; ?>
<?php endif; ?>
</div></div>
</section>
