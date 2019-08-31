


<div id="Filtergallery">

<div class="fotos"></div>
<div id="viewmore" class="btn mt40 mb40"><?php echo __('[:pl]WIECEJ[:enMORE]'); ?></div>



</div>
<div class="backdrop"></div>

<div class="lighbox_container">
  <div class="backdrop2"></div>

  <div id="prgrm_lightbox" class="prgrm_lightbox">
    <div class="LigthboxContent"><img src="" alt=""></div>
    <div class="close"></div>
    <div class="lightbox-arrow lightbox_cont_prev"><div class="lightbox_prev"></div></div>
    <div class="lightbox-arrow lightbox_cont_next"><div class="lightbox_next"></div></div>
    <div id="loader"><img src="<?php echo get_template_directory_uri() ?>/img/loader.svg" alt=""></div>
  </div>
</div>




<script>
var allFotosjson = [
  <?php
$counter=0;
  if ( have_rows('filterGalleryItem') ): ?>
      <?php while ( have_rows('filterGalleryItem') ) : the_row(); ?>

<?php
 $url_full = get_sub_field('filterGalleryItem_url_full');
 $url_min = get_sub_field('filterGalleryItem_url_min');
 $cat1 = get_sub_field('cat1');
 $cat2 = get_sub_field('cat2');
 $cat3 = get_sub_field('cat3');
 $position = get_sub_field('img_position');
?>

  {
    "url1": "<?php if ($url_min) { echo $url_min; } else { echo $url_full; } ?>",
    "url2": "<?php echo $url_full ?>",
    "category1": "<?php if ($cat1 != 'brak') {echo $cat1;} ?>",
    "category2": "<?php if ($cat2 != 'brak') {echo $cat2;} ?>",
    "category3": "<?php if ($cat3 != 'brak') {echo $cat3;} ?>",
    "position": "<?php echo $position ?>"
  },

<?php endwhile; ?>
<?php endif; ?>
]
</script>
