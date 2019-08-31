

<div class="portfilio_box">
  <div class="special_mark"><div class="line"></div></div>
  <h2 class="mt80 mb40">PORTFOLIO</h2>

</div>
<div id="Filtergallery">
  <div class="filterbox">


  <div class="filter resetfilter active"><?php echo __('[:pl]Wszystko[:en]All'); ?></div>

  <?php if (is_page(10)): ?>
    <div class="filter  triggerfilter" data-filtername="PortretKorporacyjny"><?php echo __('[:pl]Portret korporacyjny[:en]Corporate portrait'); ?></div>
    <div class="filter triggerfilter" data-filtername="PortretPersonalny"><?php echo __('[:pl]Portret personalny[:en]Personal portrait'); ?></div>
  <?php endif; ?>

  <?php if (is_page(13)): ?>
    <div class="filter  triggerfilter" data-filtername="KonferencjeSzkolenia"><?php echo __('[:pl]Konferencje i szkolenia[:en]Conferences and training'); ?></div>
    <div class="filter triggerfilter" data-filtername="EventyFirmowe"><?php echo __('[:pl]Eventy Firmowe[:en]Company events'); ?></div>
  <?php endif; ?>

  <?php if (is_page(16)): ?>
    <div class="filter  triggerfilter" data-filtername="Inwestycje"><?php echo __('[:pl]Inwestycje[:en]Investments'); ?></div>
    <div class="filter triggerfilter" data-filtername="Wnetrza"><?php echo __('[:pl]Wnętrza[:en]Interior'); ?></div>
    <div class="filter triggerfilter" data-filtername="Dron"><?php echo __('[:pl]Dron[:en]Drone'); ?></div>
  <?php endif; ?>

  <?php if (is_page(20)): ?>
    <div class="filter  triggerfilter" data-filtername="Produkty"><?php echo __('[:pl]Produkty[:en]Products'); ?></div>
    <div class="filter triggerfilter" data-filtername="SesjeModelem"><?php echo __('[:pl]Sesje z modelem[:en]Model photo shoots'); ?></div>
    <div class="filter triggerfilter" data-filtername="Jedzenie"><?php echo __('[:pl]Jedzenie[:en]Food'); ?></div>
  <?php endif; ?>



  </div>
<div class="fotos"></div>
<div id="viewmore" class="btn mt40 mb40"><?php echo __('[:pl]Wczytaj więcej[:en]Load more'); ?></div>



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
