
  <!-- DESKTOP VERSION -->
  <div class="container"><div class="row animate">
<div class="col-md-12">


<div class="pricetable d-none d-sm-block">
  <div class="pricetable_header">
    <div class="ht_box">Numer domu</div>
    <div class="ht_box">Kondygnacja</div>
    <div class="ht_box">Pow. mieszkania</div>
    <div class="ht_box">Cena</div>
    <div class="ht_box">Status</div>
    <div class="ht_box">Rzut domu</div>
  </div>
<?php if ( have_rows('pricetable_loop') ): ?>
    <?php while ( have_rows('pricetable_loop') ) : the_row(); ?>
<div class="pricetable_row <?php the_sub_field('pricetable_status') ?>">
  <div class="td_box"><?php the_sub_field('pricetable_nr') ?></div>
  <div class="td_box"><?php the_sub_field('pricetable_pow') ?></div>
  <div class="td_box"><?php the_sub_field('pricetable_pow2') ?></div>
  <div class="td_box">
    <?php if (get_sub_field('pricetable_status')=='wolny') {
      the_sub_field('pricetable_price');
    }
else echo '-';
    ?>
  </div>
<div class="td_box">  <?php the_sub_field('pricetable_status') ?></div>
  <div class="td_box">

    <?php if (get_sub_field('pricetable_status') == 'wolny'): ?>
      <a href="<?php the_sub_field('pricetable_pdf') ?>" target="blank">Pobierz</a>
    <?php else: ?>
  <span>Pobierz</span>
    <?php endif; ?>

  </div>
</div>
    <?php endwhile; ?>
<?php endif; ?>
</div>

<!-- MOBILE VERSION -->
<div class="mobile_version pricetable d-block d-sm-none">
<?php if ( have_rows('pricetable_loop') ): ?>
    <?php while ( have_rows('pricetable_loop') ) : the_row(); ?>
<div class="pricetable_row <?php the_sub_field('pricetable_status') ?>">
  <div class="td_box">    <?php the_sub_field('pricetable_nr') ?></div>
  <div class="td_box"><div class="ht_box">Kondygnacja</div><div class="td_box_content"><?php the_sub_field('pricetable_pow') ?></div></div>
  <div class="td_box"><div class="ht_box">Pow. mieszkania</div><div class="td_box_content"><?php the_sub_field('pricetable_pow2') ?></div></div>
  <div class="td_box">  <div class="ht_box">Cena</div><div class="td_box_content">
    <?php if (get_sub_field('pricetable_status')=='wolny') {
      the_sub_field('pricetable_price');
    }
else echo '-';
    ?>
  </div></div>
<div class="td_box">    <div class="ht_box">Status</div><div class="td_box_content"><?php the_sub_field('pricetable_status') ?></div></div>
  <div class="td_box"><a href="<?php the_sub_field('pricetable_pdf') ?>" target="blank">Pobierz</a></div>
</div>
    <?php endwhile; ?>
<?php endif; ?>
</div>


</div>
  </div></div>
