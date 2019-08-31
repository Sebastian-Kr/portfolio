<?php get_header(); ?>


<div class="main_header dark_bg " style="background-image: url('<?php the_field('header_bg')?>')">
<div class="main_header_content">
  <img src="<?php echo get_template_directory_uri() ?>/img/logo-hello.png" alt="" class="main_logo">
  <div id="data_box">
    <!--
    <div class="col1">
      <h1 class="c-text">05</h1>
      <h4>EDYCJA</h4>
    </div>
<div class="big-dot"></div>
    <div class="col2">
      <h1 class="c2-text">24-26</h1>
      <h4>MAJ 2019</h4>
    </div>

    <div class="big-dot"></div>

    <div class="col3">
      <h1 class="c2-text">KRAKÓW</h1>
      <h4 >STADION CRACOVI</h4>
    </div> -->
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
</div>

  <!-- <li  data-target="plan" class="scroll-button">test </li> -->




<div id="timer_box" class="c-bg-op border-bottom c-border-top-op c-border-bottom-op border-top border-bottom">

  <?php
  date_default_timezone_set('Europe/Warsaw');
     $event_time = strtotime(get_field('event_time'));
     $remaining = $event_time - time();
     $days_remaining = floor($remaining / 86400);
     $hours_remaining = floor(($remaining % 86400) / 3600);
     $minutes_remaining = floor((($remaining % 86400) % 3600) / 60);
      if ($remaining > 0) { ?>

        <h3>DO ROZPOCZĘCIA <span>FESTIWALU</span> POZOSTAŁO:</h3>
        <div id="timer1">
          <span><?php echo $days_remaining; ?></span>
          <h3>DNI</h3>
          <div class="dot"></div>
          <span><?php echo $hours_remaining; ?></span>
          <h3>GODZIN</h3>
          <div class="dot"></div>
          <span><?php echo $minutes_remaining; ?></span>
          <h3>MINUT</h3>
        </div>
        <a class="btn btn-inverse" target="blank" href="<?php the_field('buy_ticket_link2')?>">KUP BILET</a>


<?php
      }
      else {
        echo '<h3 class="unactive-timer info">ZAPRASZAMY NA FESTIWAL !</h3>';
      }
  ?>



</div>
</div>

<section id="opis" class="c-bg dark_bg" style="background-image: url('<?php the_field('header_bg')?>')">


  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="<?php the_field('section1_foto')?>" alt="">
      </div>
      <div class="col-md-6">
        <?php the_field('section1_content')?>
      </div>
    </div>
  </div>

</section>


<section id="plan" class="dark_bg" style="background-image: url('<?php the_field('header_bg')?>')">

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="mb30 line c2-text line_white line_center line_big"><?php the_field('section2_title')?></h2>
        <img src="<?php the_field('section2_foto')?>" alt="">
      </div>
    </div>

    <div class="row mt50 index_box">

    <div class="index_column">
      <h3 class="line c-line c-text">STREFA <span class="c4-text">A</span></h3>
      <?php if ( have_rows('section2_loopA') ): ?>
        <?php $counter = 0; ?>
        <div class="index_content">
        <div class="index_list">
          <?php while ( have_rows('section2_loopA') ) : the_row(); ?>
            <?php $counter++; ?>
            <p><?php the_sub_field('section2_loopA_item')?></p>
            <?php if($counter == 12) {echo '</div><div class="index_list">';} ?>
          <?php endwhile; ?>
        </div></div>
      <?php endif; ?>
    </div>

    <div class="index_column">
      <h3 class="line c-line c-text">STREFA <span class="c4-text">B</span></h3>
      <?php if ( have_rows('section2_loopB') ): ?>
          <?php $counter = 0; ?>
        <div class="index_content">
        <div class="index_list">
          <?php while ( have_rows('section2_loopB') ) : the_row(); ?>
          <?php $counter++; ?>
            <p><?php the_sub_field('section2_loopB_item')?></p>
            <?php if($counter == 12) {echo '</div><div class="index_list">';} ?>
          <?php endwhile; ?>
            </div></div>
      <?php endif; ?>
    </div>




    <div class="index_column">
      <h3 class="line c-line c-text">STREFA <span class="c4-text">C</span></h3>
      <?php if ( have_rows('section2_loopC') ): ?>
          <?php $counter = 0; ?>
        <div class="index_content">
        <div class="index_list">
          <?php while ( have_rows('section2_loopC') ) : the_row(); ?>
          <?php $counter++; ?>
            <p><?php the_sub_field('section2_loopC_item')?></p>
            <?php if($counter == 12) {echo '</div><div class="index_list">';} ?>
              <?php endwhile; ?>
                </div></div>

      <?php endif; ?>
    </div>


    </div>
  </div>

</section>


<section id="harmonogram" class="border-top c4-border-top c-border-bottom border-bottom"
style="background-image: url('<?php the_field('header_bg')?>')">

<div class="bg_color_add"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center mmb0">
        <h2 class="mb30 mmb0 c3-text line c4-line line_center line_big"><?php the_field('section3_title')?></h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="harm_content">
          <?php the_field('section3_content1')?>
      </div></div>

      <div class="col-md-4">
        <div class="harm_content inverse">
          <?php the_field('section3_content2')?>
      </div></div>

      <div class="col-md-4">
        <div class="harm_content">
          <?php the_field('section3_content3')?>
      </div></div>


    </div>
  </div>

</section>



<section id="atrakcje" class="dark_bg" style="background-image: url('<?php the_field('header_bg')?>')">

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="mb30 mmb0 line c-line line_center line_big"><?php the_field('section4_title')?></h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 text-center">
        <img class="mb30" src="<?php echo get_template_directory_uri() ?>/img/icon1.svg" alt="">
        <?php ssacf('section4_content1') ?>
      </div>

      <div class="col-md-4 text-center">
        <img class="mb30" src="<?php echo get_template_directory_uri() ?>/img/icon2.svg" alt="">
        <?php ssacf('section4_content2') ?>
      </div>

      <div class="col-md-4 text-center">
        <img class="mb30" src="<?php echo get_template_directory_uri() ?>/img/icon3.svg" alt="">
        <?php ssacf('section4_content3') ?>
      </div>


    </div>
  </div>

</section>


<section id="gadzety" class="dark_bg border-top c4-border-top border-bottom c-border-bottom"
style="background-image: url('<?php the_field('header_bg')?>')">

<div class="bg_color_add"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="mb50 c3-text line line_center line_big"><?php the_field('section5_title')?></h2>
        <img src="<?php the_field('section5_foto')?>" alt="">
        <a class="btn c2-bg mt50" target="blank" href="<?php the_field('shop_link')?>">SKLEP</a>
      </div>
    </div>

  </div>

</section>


<section id="historia" class="dark_bg" style="background-image: url('<?php the_field('header_bg')?>')">

  <div class="container">

    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="mb50 mmb0 line line_big line_center "><?php the_field('section6_title')?></h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 text-center">


  <div id="carousel1">
    <?php if ( have_rows('section6_loop') ): ?>
        <?php while ( have_rows('section6_loop') ) : the_row(); ?>

<div class="slide_item">
  <img src="<?php the_sub_field('section6_loop_foto')?>" alt="">
  <h5><?php the_sub_field('section6_loop_year')?></h5>
</div>
        <?php endwhile; ?>
    <?php endif; ?>
  </div>
      </div>
    </div>
  </div>

</section>

<div class="border-top c4-border-top"></div>

<div class="gallery progremo_lightboxGallery_module">
<div  id="carousel2">
  <?php if ( have_rows('gallery_loop') ): ?>
    <?php $counter=0 ?>
      <?php while ( have_rows('gallery_loop') ) : the_row(); ?>
        <?php $counter++; ?>
        <?php


                $imgID = get_sub_field('gallery_loop_item');
                $fullURL = wp_get_attachment_image_src($imgID, 'full');
                $minURL = wp_get_attachment_image_src($imgID, 'sm');
                // print_r($minURL);

         ?>

<div class="slide_item" data-id="<?php echo $counter; ?>" data-xlsrc="<?php echo $fullURL[0]; ?>">
<div class="slide_item_foto" style="background-image: url('<?php echo $minURL[0]; ?>')"></div>
</div>
      <?php endwhile; ?>
  <?php endif; ?>
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
</div>



<section id="kontakt" class="contact border-top c4-border-top"
style="background-image: url('<?php the_field('header_bg')?>')">

<div class="bg_color_add"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center mmb0">
        <h2 class="line line_big line_center ">KONTAKT</h2>
      </div>
    </div>

    <div class="content">
      <div class="">
        <?php the_field('contact_content1')?>
      </div>

      <div class="">
        <?php the_field('contact_content2')?>
      </div>

      <div class="">
        <?php the_field('contact_content3')?>
        <a href="<?php the_field('facebook_link')?>">
          <img src="<?php echo get_template_directory_uri() ?>/img/facebook.svg" alt="">
        </a>
      </div>
    </div>


<div class="row">
  <div class="col-md-12">
    <?php echo do_shortcode( '[contact-form-7 id="12" title="Formularz 1"]' ); ?>
  </div>
</div>


  </div>

</section>


<div id="map"></div>


<?php get_footer(); ?>
