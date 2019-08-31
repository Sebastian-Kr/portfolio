
<?php get_header(); ?>

<div class="front_page_header">
<div class="bg" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/grafika_1.JPG')"></div>

<div class="content_box">
  <!-- <div class="green"><div class="container"><p>Hashtag: <strong>#LSOS18</strong></p></div></div>
  <div class="gray"><div class="container">
    <a href="#"><div class="btn3 button_std">ZAREJESTRUJ SIĘ</div></a>
<div class="content">
  <h1>Forum współpracy i&nbsp;innowacji <br> dla ZDROWIA I&nbsp;JAKOŚCI ŻYCIA</h1>
  <div class="bottom_part">
    <h2>11 października 2018 Kraków</h2>
  </div>
</div>

  </div></div> -->
  <?php the_field('header_content')?>
</div>

</div>


  <div id="counterUP">
    <div class="header_box"><?php echo __('[:pl]Startujemy za:[:en]We start for:'); ?></div>
<div class="time">
  <div class="item"><span id="day" class="count"></span><?php echo __('[:pl] DNI[:en]DAYS'); ?></div>
  <div class="item"><span id="hour" class="count"></span> <?php echo __('[:pl]GODZIN[:en]HOURS'); ?></div>
  <div class="item"><span id="minute" class="count"></span><?php echo __('[:pl] MINUT[:en]MINUTES'); ?></div>
  <div class="item"><span id="second" class="count"></span> <?php echo __('[:pl]SEKUND[:en]SECONDS'); ?></div>
</div>
  </div>

<div class="container" id="okonferencji" >
  <div class="row">
    <div class="col-md-12">
      <div class="mb-30 font_width60"><?php get_template_part('special_modules/prgrm', 'main');?></div>
    </div>
  </div>
</div>
<?php get_template_part( 'section_generator2/content', 'generator' );?>




<?php get_footer(); ?>
