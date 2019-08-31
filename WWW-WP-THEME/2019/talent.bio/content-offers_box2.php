  <div class="standard_offers_box standard_box2">
    <div class="border_box"></div>
    <div class="content_box">

      <div class="header_box border_b">
        <h5>
            <a class="" href="<?php echo get_permalink() ?>">
              <?php echo the_title(); ?>
            </a></h5>
        <a class="btn-std3 float-right" href="<?php echo get_permalink() ?>">Sprawdź ofertę</a>
      </div>

    <div class="subheader_box">
      <h6 class="place"><?php display_all_properties('place') ?> </h6>
      <!-- <h6><?php echo get_the_title(get_field('employer_id')); ?></h6> -->
    </div>

        <span class="excerpt_box mb20">
      <?php the_field('offer_content_excerpt')?>
        </span>



<div class="clearfix"></div>

<div class="dates">
<div>Data ogłoszenie: <?php the_field('publish_date')?></div>
<div>Data ważności: <?php the_field('expiried_date')?></div>
</div>


    </div>
  </div>
