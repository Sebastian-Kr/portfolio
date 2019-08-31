

<section class="coupon pt30 pb20">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-md-4 col-lg-4">
        <img class="mb15" src="<?php the_field('coupon_foto')?>" alt="">
      </div>
      <div class="col-md-8 col-lg-7 col-xl-6">
        <?php the_field('coupon_desc')?>
        <div class="buttons">


          <?php if (get_field('coupon_file1')): ?>
            <a target="blank" href="<?php the_field('coupon_file1')?>">
              <div class="btn_orange"><?php the_field('coupon_title1')?></div>
            </a>
          <?php endif; ?>


          <?php if (get_field('coupon_file1')): ?>
            <a target="blank" href="<?php the_field('coupon_file1')?>">
              <div class="btn_orange"><?php the_field('coupon_title1')?></div>
            </a>
          <?php endif; ?>


        </div>
</div>

    </div>
    </div>
</section>
