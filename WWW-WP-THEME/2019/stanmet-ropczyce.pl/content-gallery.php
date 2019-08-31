

<div class="portfilio_box">
  <h2 class="mt80 mb40">PRZYKŁADOWE REALIZACJE</h2>

</div>
<div id="Filtergallery">
  <div class="filterbox">


  <div class="filter resetfilter active"><?php echo __('Wszystkie'); ?></div>

  <?php if (is_page(10)): ?>
    <div class="filter  triggerfilter" data-filtername="nowoczesne"><?php echo __('Nowoczesne'); ?></div>
    <div class="filter triggerfilter" data-filtername="tradycyjne"><?php echo __('Tradycyjne'); ?></div>
  <?php endif; ?>

  <?php if (is_page(13)): ?>
    <div class="filter  triggerfilter" data-filtername="zewnetrzne"><?php echo __('Zewnętrzne'); ?></div>
    <div class="filter triggerfilter" data-filtername="wewnetrzne"><?php echo __('Wewnętrzne'); ?></div>
    <div class="filter  triggerfilter" data-filtername="nowoczesne"><?php echo __('Nowoczesne'); ?></div>
    <div class="filter triggerfilter" data-filtername="tradycyjne"><?php echo __('Tradycyjne'); ?></div>
  <?php endif; ?>

  <?php if (is_page(16)): ?>
    <div class="filter  triggerfilter" data-filtername="przesuwne"><?php echo __('Bramy przesuwne'); ?></div>
    <div class="filter triggerfilter" data-filtername="dwuskrzydlowe"><?php echo __('Bramy dwuskrzydłowe'); ?></div>
    <div class="filter triggerfilter" data-filtername="furtki"><?php echo __('Furtki'); ?></div>
    <div class="filter  triggerfilter" data-filtername="nowoczesne"><?php echo __('Nowoczesne'); ?></div>
    <div class="filter triggerfilter" data-filtername="tradycyjne"><?php echo __('Tradycyjne'); ?></div>
  <?php endif; ?>


  </div>
<div class="fotos"></div>
<div id="viewmore" class="btn mt40 mb40"><?php echo __('Wczytaj więcej'); ?></div>



</div>
<div class="backdrop"></div>

<div class="lighbox_container">
  <div class="backdrop2"></div>

  <div id="prgrm_lightbox" class="prgrm_lightbox">
    <div class="LigthboxContent"><img src="" alt=""></div>
    <div id="lighboxContent"></div>
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
 $content = get_sub_field('content');
?>

  {
    "url1": "<?php if ($url_min) { echo $url_min; } else { echo $url_full; } ?>",
    "url2": "<?php echo $url_full ?>",
    "category1": "<?php if ($cat1 != 'brak') {echo $cat1;} ?>",
    "category2": "<?php if ($cat2 != 'brak') {echo $cat2;} ?>",
    "category3": "<?php if ($cat3 != 'brak') {echo $cat3;} ?>",
    "position": "<?php echo $position ?>",
    "content": "<?php echo $content?>"
  },

<?php endwhile; ?>
<?php endif; ?>
]
</script>
