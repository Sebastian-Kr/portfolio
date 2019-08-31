
<div class="col-lg-4 col-md-6 employers_list_tiles">
  <div class="standard_offers_box ">
    <div class="border_box"></div>
    <div class="content_box">

        <h5 class="border_b">
            <a href="<?php echo get_permalink() ?>">
              <?php the_title(); ?>
            </a></h5>

        <span class="">

              <?php the_content(); ?>
        </span>

        <span class="excerpt_box">
         <?php the_field('offer_content_excerpt')?>
        </span>
  <a class="btn-std3 mb30" href="<?php echo get_permalink() ?>">
    Sprawdź profil firmy
  </a>
<div class="clearfix"></div>
    </div>
  </div>
</div>
