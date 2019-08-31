<?php /*Template Name: Atelier*/?>
<?php get_header(); ?>
<div id="start_page"></div>


<!-- <div class="backdrop"></div> -->

<div class="lighbox_container grid2">
  <!-- <div class="backdrop2"></div> -->
  <div class="item item_foto bg-780" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/atelier_tlo.JPG')">
  <div id="prgrm_lightbox" class="prgrm_lightbox ">
    <div class="LigthboxContent "><img src="" alt=""></div>
    <!-- <div class="close"></div> -->
    <div class="lightbox-arrow lightbox_cont_prev"><div class="lightbox_prev"></div></div>
    <div class="lightbox-arrow lightbox_cont_next"><div class="lightbox_next"></div></div>
    <!-- <div id="loader2"></div> -->

    <div id="loader2"><img src="<?php echo get_template_directory_uri() ?>/img/elipse.gif" alt=""></div>


  </div>

  <div id="gallerylink">GALERIA</div>
</div>

<div class="mt50 mb20 item item-text fade-in-element2">
  <h1 id="gallery_item_autor"></h1>
  <p id="gallery_item_title"></p>
  <p id="gallery_item_tech"></p>
  <p id="gallery_item_size"></p>
  <p id="gallery_item_year"></p>
</div>


</div>

<!--.////////////////////////////////////////////////////////////  -->

<div class="gallery_container">
  <div id="gallerytarget"></div>
    <div class="item-text"><h1><?php echo __('[:pl]GALERIA[:en]GALLERY') ?></h1></div>

<div id="Filtergallery">

<div class="fotos"></div>
<div id="viewmore" class="btn mt40 mb40"><?php echo __('[:pl]Wczytaj więcej[:en]Load more'); ?></div>



</div></div>




<script>
var allFotosjson = [
  <?php
$counter=0;
  if ( have_rows('filterGalleryItem') ): ?>
      <?php while ( have_rows('filterGalleryItem') ) : the_row(); ?>

<?php
 $url_full = get_sub_field('filterGalleryItem_url_full');
 $url_min = get_sub_field('filterGalleryItem_url_min');
 $autor = get_sub_field('autor');
 $title = get_sub_field('title');
 $tech = get_sub_field('tech');
 $size = get_sub_field('size');
 $year = get_sub_field('year');
?>

  {
    "url1": "<?php if ($url_min) { echo $url_min; } else { echo $url_full; } ?>",
    "url2": "<?php echo $url_full ?>",
    "autor": "<?php if ($autor != 'brak') {echo $autor;} ?>",
    "title": "<?php if ($tech != 'brak') {echo $title;} ?>",
    "tech": "<?php if ($tech != 'brak') {echo $tech;} ?>",
    "size": "<?php if ($size != 'brak') {echo $size;} ?>",
    "year": "<?php if ($year != 'brak') {echo $year;} ?>"


  },

<?php endwhile; ?>
<?php endif; ?>
]
</script>

<?php get_footer(); ?>
