

<?php 
// Standar Variable  
$css_custom = get_sub_field('css_class_section');
$id = 'P'.get_the_ID().'_S'.$GLOBALS['section_counter'];
$css_theme = get_sub_field('theme');
?>
<section id="<?php echo $id ?>" class="<?php echo $css_theme; echo ' '; echo $css_custom ?>">


<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>

<?php if ( have_rows('download_files_section_loop') ): ?>

<div class="container download_files_section">

      <div class="row">
<?php while ( have_rows('download_files_section_loop') ) : the_row();
if (get_sub_field('download_files_section_typelink')=='Plik') {
  $url = get_sub_field('download_files_section_loop_file');
}
else {
  $url = get_sub_field('download_files_section_loop_url');
}
$desc = get_sub_field('download_files_section_loop_desc')

?>

<div class="col-sm-12 col-md-6">
  <div class="download-file-item" >
    <a href="<?php echo $url ?>" target="blank">
    <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/file.svg" alt=""></div>
  <p><?php echo $desc ?></p></a>
  <span class="clearfix"></span>


</div>
</div>

<?php endwhile; ?>
</div>
</div>

<?php endif; ?>
<?php // /// /// // /// THEME SEPARATROR // // // // // // // // // // // // // // // // // // // // // // // // // // // ?>
</section>