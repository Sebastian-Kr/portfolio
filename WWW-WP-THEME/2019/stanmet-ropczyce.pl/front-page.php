<?php get_header(); ?>



<div class="banner1" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/home-header-ropczyce-balustrada-furtka-brama-stanmet-ogrodzenie.jpg')">


<div id="special_effect"><div class="popup"></div></div>
<div id="special_effect"><div class="popup"></div></div>


<div  class=" fade-in-element3 ">
<div class="popup2">
  <?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
  if (get_the_content()){
            the_content();
  } // end is content statment
    } // end while
  } // end if
  ?>
</div>
  <div  id="portfiliolink" class="btn btn-full"><?php echo __('Poznaj ofertę'); ?></div>
</div>

</div>

  <div id="portfilio"></div>

<div class="grid1">
<div class="grid1-row ">

<?php $counter=1;

if ( have_rows('category_foto') ): ?>
    <?php while ( have_rows('category_foto') ) : the_row(); ?>
      <div class=" till_v1 animate   <?php if (($counter==4) || ($counter==5)) {echo 'bg-600';} ?>">
  <a href="<?php the_sub_field('category_link') ?>">
  <div class="content ">
    <h4><?php the_sub_field('category_title') ?></h4>
      <p><?php the_sub_field('category_desc') ?></p>
    <div class=" btn "><?php echo __('Zobacz więcej'); ?></div>
  </div>
           <div class="bg" style="background-image: url('<?php the_sub_field('category_foto') ?>')"></div>
           </a>
      </div>

      <?php if ($counter == 3): ?>
        <!-- <div class="clearfix"></div> -->
      </div><div class="grid1-row animate">
      <?php endif; ?>
      <?php $counter++ ?>
    <?php endwhile; ?>
<?php endif; ?>
<!-- <div class="clearfix"></div> -->
</div>

</div>


<div class="onas">
  <div class="container"><div class="row animate pt100 pb100">
    <div class="col-md-6 ">
      <h2 class="ta-left mb30 "><?php echo __('O NAS'); ?></h2>
      <p><?php the_field('o_nas') ?></p>
    </div>

  </div></div>
  <div class="onas_foto" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/mapa-balustrady-bramy-metaloplastyka-bramy-furtki-ropczyce-i-okolice-ropczyce.jpg')"></div>
</div>


<div class="container-fluidv ">
  <div class="row icons-sec dark-bg">

    <div class="item col-lg-4  ">
<img src="<?php echo get_template_directory_uri() ?>/img/icon-check-ropczyce-balustrady-bramy-furtki-stalowe-kute-stanmet.svg" alt="">
      <div class="content-icons ">
        <?php the_field('opis1') ?>
      </div>
</div>

    <div class="item col-lg-4 ">
      <img src="<?php echo get_template_directory_uri() ?>/img/icon-check-ropczyce-balustrady-bramy-furtki-stalowe-kute-stanmet.svg" alt="">
        <div class="content-icons ">

  <?php the_field('opis2') ?>

          </div>
    </div>

    <div class="item col-lg-4 ">
      <img src="<?php echo get_template_directory_uri() ?>/img/icon-check-ropczyce-balustrady-bramy-furtki-stalowe-kute-stanmet.svg" alt="">
    <div class="content-icons ">
  <?php the_field('opis3') ?>

    </div>
    </div>

  </div>
</div>

<?php get_template_part('content', 'add_desc') ?>



  <?php get_footer(); ?>
