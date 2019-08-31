
<?php 
// Standar Variable  
$css_custom = get_sub_field('css_class_section');
$id = 'P'.get_the_ID().'_S'.$GLOBALS['section_counter'];
$css_theme = get_sub_field('theme');
?>
<section id="<?php echo $id ?>" class="<?php echo $css_theme; echo ' '; echo $css_custom ?>">


<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>

<?php if (get_sub_field('theme')=='FullWidthCenter'): ?>

<div class="paralax1" style="background-image: url('<?php the_sub_field('parallax_text_link_v1_foto') ?>');">

  <div class="glass">
    <div class="content"><?php the_sub_field('parallax_text_link_v1_content') ?>  </div>
</div>
</div>
<?php endif; ?>
<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>


</section>