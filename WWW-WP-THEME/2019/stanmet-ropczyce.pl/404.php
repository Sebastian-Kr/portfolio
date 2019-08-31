
<?php get_header(); ?>

<div class="grid2 ">
  <div class="item bg-780 mobihide" style="background-image: url('<?php echo get_the_post_thumbnail_url(10) ?>')">
  </div>
<div class="item item-text fade-in-element2">
  <h1><?php echo __('[:pl]404 - błędny adres[:en]404 - wrong address'); ?></h1>
  <?php echo __('[:pl]Adres strony, który został wpisany nie istnieje.
  Jeśli jesteś pewny, że adres powinien działać wyślij do nas krótkie zgłoszenie i naprawimy problem najszybciej jak to możliwe.

  Jeśli nie jesteś pewny jaki jest właściwy adres podstrony, skorzystaj z menu głównego, żeby przejść to właściwej części oferty.[:en]The address of the page that has been entered does not exist.
   If you are sure the address should work, send us a short application and we will fix the problem as soon as possible.

   If you are not sure what the correct address of the subpage is, use the main menu to go to the correct part of the offer.'); ?>
  <div class="semisepar"></div>
</div>
</div>
<div class="mt-50"></div>

<?php get_footer(); ?>
