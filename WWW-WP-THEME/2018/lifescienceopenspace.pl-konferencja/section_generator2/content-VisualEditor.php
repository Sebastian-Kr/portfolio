
<?php
// Standard Variable
$id = 'P'.get_the_ID().'_S'.$GLOBALS['section_counter'];


// CSS CLASS
$container = '';
if (get_sub_field('container_variant')) {$container = 'container-fluid';} else {$container = 'container';}
$css_custom = get_sub_field('css_class_section');

// Margin top
$css_mt = '';
if (get_sub_field('mt_section') != 'auto') {$css_mt = get_sub_field('mt_section');};

// Margin bottom
$css_mb = '';
if (get_sub_field('mb_section') != 'auto') {$css_mb = get_sub_field('mb_section');};

// Padding top
$css_pt = '';
if (get_sub_field('pt_section') != 'auto') {$css_pt = get_sub_field('pt_section');};

// Padding bottom
$css_pb = '';
if (get_sub_field('pb_section') != 'auto') {$css_pb = get_sub_field('pb_section');};

// Font width
$css_font_width = get_sub_field('text_width');

// Title background
$css_bg_title = '';
$css_classes_title = '';
if (get_sub_field('is_bg_title_section')) {
  $css_bg_title = get_sub_field('bg_title_section');
  $css_classes_title = "bg_color";
};

// Frame CTA Theme
$css_theme_cta = '';
if (get_sub_field('cta_theme') == 'frame_button1') { $css_theme_cta = get_sub_field('cta_theme');};
if (get_sub_field('cta_theme') == 'frame_button2') { $css_theme_cta = get_sub_field('cta_theme');};


$css_classes_section = $css_theme_cta;
$css_classes_container = $css_custom.' '.$css_mt.' '.$css_mb.' '.$css_pt.' '.$css_pb.' '.$css_font_width.' '.$container;



// INLINE STYLE
$inline_style = '';
if ((get_sub_field('text_color')) && (get_sub_field('text_color') != 'none')) {
$inline_style .= ' color: '.get_sub_field('text_color').';';
}
if (get_sub_field('bg_color_section')) {
$inline_style .= ' background-color:  '.get_sub_field('bg_color_section').';';
}
if (get_sub_field('is_bg_image_section')) {
$inline_style .= ' background-position: '.get_sub_field('bg_image_section_position').';';
}
if (get_sub_field('is_bg_image_section')) {
$inline_style .= ' background-image: url('.get_sub_field('bg_image_section').');';
}



?>

<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>



<div class="anchor"
<?php if (get_sub_field('id_container')): ?>

  id="<?php the_sub_field('id_container')?>"

<?php endif;?> ></div>



<section id="<?php echo $id ?>" class="universal_section <?php echo $css_classes_section ?>" style="<?php echo $inline_style ?>">
  <div class="<?php echo $css_classes_container ?>">

<?php if (get_sub_field('is_title_section')): ?>
<div class="row"><div class="col-md-12">
<div class="title_section <?php echo $css_classes_title ?>" style="background-color: <?php echo $css_bg_title;?>"><?php the_sub_field('section_title') ?></div>
</div></div>
<?php endif; ?>


    <div class="row">


<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>
<?php if (get_sub_field('col_amount')=='1'): ?>
      <div class="col-md-12"><?php the_sub_field('col1') ?></div>
<?php endif; ?>


<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>
<?php if (get_sub_field('col_amount')=='2'): ?>
    <div class="col-md-6"><?php the_sub_field('col1') ?></div>
    <div class="col-md-6"><?php the_sub_field('col2') ?></div>
<?php endif; ?>


<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>
<?php if (get_sub_field('col_amount')=='3'): ?>
    <div class="col-md-4"><?php the_sub_field('col1') ?></div>
    <div class="col-md-4"><?php the_sub_field('col2') ?></div>
    <div class="col-md-4"><?php the_sub_field('col3') ?></div>
<?php endif; ?>


<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>
<?php if (get_sub_field('col_amount')=='4'): ?>
    <div class="col-md-3"><?php the_sub_field('col1') ?></div>
    <div class="col-md-3"><?php the_sub_field('col2') ?></div>
    <div class="col-md-3"><?php the_sub_field('col3') ?></div>
    <div class="col-md-3"><?php the_sub_field('col4') ?></div>
<?php endif; ?>
<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>

</div>


<?php if (get_sub_field('is_footer_section')): ?>
  <div class="row"><div class="col-md-12">
<div class="footer_section"><?php the_sub_field('footer_section') ?></div>
</div></div>
<?php endif; ?>

<?php if (get_sub_field('is_cta')): ?>
  <div class="row"><div class="col-md-12">
  <a href="<?php the_sub_field('cta_link') ?>">
    <div class="button_std <?php the_sub_field('cta_theme') ?>"><?php the_sub_field('cta_content') ?></div>
  </a>
</div></div>
<?php endif; ?>

  </div>

  <?php if (get_sub_field('is_footer_html')): ?>
  <?php the_sub_field('footer_html') ?></div>
  <?php endif; ?>

</section>
