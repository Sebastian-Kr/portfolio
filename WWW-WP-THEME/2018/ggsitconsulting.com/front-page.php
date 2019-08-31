<?php get_header(); ?>







<section class="front-header mt90 mb0">
  <canvas id="nokey"></canvas>

  <div class="item flex-center bg-std" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/Vendors.jpg')">

<a  href="<?php echo get_permalink(8) ?>" >
    <div class="content"><?php get_template_part( 'special_modules/prgrm', 'main' );?></div>
<button type="button" class="btn1  mt40 fadeInUpDel" name="button">Click here</button>
</a>
  </div>


    <div class="item flex-center bg-std" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/Customers.jpg')">
      <!-- <canvas id="nokey"></canvas> -->

<a  href="<?php echo get_permalink(11) ?>" >
    <div class="content"><?php the_field('content2') ?></div>
<button type="button" class="fadeInUpDel mt40  btn1" name="button">Click here</button>
</a>

  </div>

  <div class="clearfix"></div>
</section>

  <?php get_footer(); ?>
