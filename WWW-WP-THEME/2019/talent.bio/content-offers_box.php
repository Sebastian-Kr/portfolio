<div class="col-lg-6">
  <div class="standard_offers_box">
    <div class="border_box"></div>
    <div class="content_box">

        <h5 class="border_b">
            <a class="" href="<?php echo get_permalink() ?>">
              <?php echo the_title(); ?>
            </a></h5>
      <h6><?php echo get_the_title(get_field('employer_id')); ?></h6>
        <span class="excerpt_box">
      <?php the_field('offer_content_excerpt')?>
        </span>
<!--
      <br>
      <br>
      <p>Dziedziny: <?php display_all_properties('areas'); ?></p>
      <p>Formy zatrudnienia: <?php display_all_properties('forms'); ?></p>
      <p>Stanowisko: <?php display_all_properties('position'); ?></p>
      <br>
-->
  <a class="btn-std3 float-right" href="<?php echo get_permalink() ?>">Sprawdź ofertę</a>
<div class="clearfix"></div>
<h6 class="place"><?php display_all_properties('place') ?> </h6>

<div class="dates">
<div>Data ogłoszenie: <?php the_field('publish_date')?></div>
<div>Data ważności: <?php the_field('expiried_date')?></div>
</div>


    </div>
  </div>
</div>
