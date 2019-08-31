
<?php
/*
Template Name: Oferta
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>
<section id="header">

<div class="container">
  <h1 class="square"><?php echo get_the_title();?></h1>
</div>


</section>
<div class="container">
<h2 class="heading header1"><?php the_field('pcf1') ?></h2>

<!-- HR special section -->
<div class="hr_special2 mb">
<img src="<?php echo  get_template_directory_uri() ?>/img/section-line-decoration.png" alt="Kancelaria Kraków">
</div>
<!-- HR special section -->

<!-- MAIN CONTENT  -->
<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
if (get_the_content()){
  echo '<div class="main-content">';
          the_content();
echo '</div></div>';
} // end is content statment
  } // end while
} // end if
?>
<!-- END MAIN CONTENT -->


<!-- button section -->
<div class="container">

  <div class="row mt">
    <div class="col-sm-6 col-md-4 col-md-offset-2">
      <a href="<?php echo the_field('pcf-of-link1'); echo '#'; echo the_field('pcf-link-m1') ;?>">
        <div class="button-light "><p><?php echo the_field('pcf7') ?></p></div></a></div>
    <div class="col-sm-6 col-md-4">
      <a href="<?php echo the_field('pcf-of-link2'); echo '#'; echo the_field('pcf-link-m2'); ?>">
        <div class="button-light "><p><?php echo the_field('pcf8') ?></p></div></a></div>
  </div>

</div>
<!-- button section end-->

<div class="main-content">
  <?php echo the_field('pcf-of-des1') ?>

</div>
<a href="<?php echo the_field('pcf-of-link3'); echo '#'; echo the_field('pcf-link-m3'); ?>">
  <div class="button-light "><p><?php echo the_field('pcf9') ?></p></div></a>



<!-- sekcja obsługa prawna firm -->
<section id="low-biz">

  <div class="container-fluid" >
<div class="row">
<!-- -->
<div class="col-md-6 bg-half" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/OBS-ewa.jpg')"  >

</div>
<div class="col-md-6 bg-half2">


    <h2 class="heading header1"><?php the_field('pcf26') ?></h2>
    <!-- HR special section -->
    <div class="hr_special2 mb">
    <img src="<?php echo get_template_directory_uri() ?>/img/section-line-decoration.png" alt="Kancelaria Kraków">
    </div>
    <!-- HR special section -->
    <div class="intro-desc"><?php the_field('pcf27') ?></div>


<div class="offer-col">

<div class="offer-part">
  <div data-panelid="panel28" class="square-cont square-left">
  <div class="square"></div><div class="square-left-header"><?php the_field('pcf28') ?></div></div>
  <div id="panel28" class="offer-dest"><?php the_field('pcf29') ?></div>
  </div>


  <div class="offer-part">
    <div data-panelid="panel30" class="square-cont square-left">
      <div class="square"></div><div class="square-left-header"><?php the_field('pcf30') ?></div></div>
    <div id="panel30" class="offer-dest"><?php the_field('pcf31') ?></div>
    </div>


    <div class="offer-part">
      <div data-panelid="panel32" class="square-cont square-left">
      <div class="square"></div><div class="square-left-header"><?php the_field('pcf32') ?></div></div>
      <div id="panel32" class="offer-dest"><?php the_field('pcf33') ?></div>
      </div>

</div>

<div class="offer-col">

<div class="offer-part">
  <div data-panelid="panel34" class="square-cont square-left">
    <div class="square"></div><div class="square-left-header"><?php the_field('pcf34') ?></div></div>
  <div id="panel34" class="offer-dest"><?php the_field('pcf35') ?></div>
  </div>


  <div class="offer-part">
    <div data-panelid="panel36" class="square-cont square-left">
      <div class="square"></div><div class="square-left-header"><?php the_field('pcf36') ?></div></div>
    <div id="panel36" class="offer-dest"><?php the_field('pcf37') ?></div>
    </div>

    <div class="offer-part">
      <div data-panelid="panel38" class="square-cont square-left">
        <div class="square"></div><div class="square-left-header"><?php the_field('pcf38') ?></div></div>
      <div id="panel38" class="offer-dest"><?php the_field('pcf39') ?></div>
      </div>


      <div class="offer-part">
        <div data-panelid="panel40" class="square-cont square-left">
          <div class="square"></div><div class="square-left-header"><?php the_field('pcf40') ?></div></div>
        <div id="panel40" class="offer-dest"><?php the_field('pcf41') ?></div>
        </div>
</div>
<div class="clearfix"></div>

<!-- button special -->
<a href="<?php echo the_field('pcf-btn2-of2');  ?>">
  <div class="button-light mb4 mt4"><p><?php echo the_field('pcf-btn2-of1') ?></p></div></a>
<!-- button special -->

</div>
<!-- end col-sm-6 -->
</div>
<!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- sekcja obsługa prawna firm end -->
  <a name="low-prv"></a>

<!-- sekcja obsługa prawna osób fizycznych -->
<section id="low-prv">
<div class="container-fluid"><div class="row">

  <div class="col-md-6 bg-half2">
    <h2 class="heading header1"><?php the_field('pcf42') ?></h2>
    <!-- HR special section -->
    <div class="hr_special2 mb">
    <img src="<?php echo get_template_directory_uri() ?>/img/section-line-decoration.png" alt="Kancelaria Kraków">
    </div>
    <!-- HR special section -->
    <div class="intro-desc"><?php the_field('pcf43') ?></div>

  <div class="offer-col">

  <div class="offer-part">
    <div data-panelid="panel44" class="square-cont square-left">
    <div  class="square"></div><div class="square-left-header"><?php the_field('pcf44') ?></div>
    </div>

    <div id="panel44" class="offer-dest"><?php the_field('pcf45') ?></div>

    </div>


    <div class="offer-part">
      <div data-panelid="panel46" class="square-cont square-left">
        <div class="square"></div><div class="square-left-header"><?php the_field('pcf46') ?></div></div>
      <div id="panel46" class="offer-dest"><?php the_field('pcf47') ?></div>
      </div>


      <div class="offer-part">
        <div data-panelid="panel48" class="square-cont square-left">
          <div class="square"></div><div class="square-left-header"><?php the_field('pcf48') ?></div></div>
        <div id="panel48" class="offer-dest"><?php the_field('pcf49') ?></div>
        </div>

  </div>
<!--  end offer -col-->

  <div class="offer-col">

  <div class="offer-part">
    <div data-panelid="panel50" class="square-cont square-left">
      <div class="square"></div><div class="square-left-header"><?php the_field('pcf50') ?></div></div>
    <div id="panel50" class="offer-dest"><?php the_field('pcf51') ?></div>
    </div>


    <div class="offer-part">
      <div data-panelid="panel52" class="square-cont square-left">
        <div class="square"></div><div class="square-left-header"><?php the_field('pcf52') ?></div></div>
      <div id="panel52" class="offer-dest"><?php the_field('pcf53') ?></div>
      </div>


  </div>
  <!--  end offer -col-->
<div class="clearfix"></div>

<!-- button special -->
<a href="<?php echo the_field('pcf-btn-of2');  ?>">
  <div class="button-light mb4 mt4"><p><?php echo the_field('pcf-btn-of1') ?></p></div></a>
<!-- button special -->

</div>
<!-- end col md-6 -->

  <div class="col-md-6 bg-half" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/OBS-bg-kolega.jpg')"  >




  </div>
  <!-- end row -->
</div>
<!-- end container -->
</section>
<!-- sekcja obsługa prawna osób fizycznych end -->



<!-- parallax section -->
<section>
<div class="parallax par vcc scale-xs pb2" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/calltoaction-bg.jpg')">
<div class="container"><h3 class="header1 mt2"><?php the_field('pcf-nm-3'); ?></h3>
<!-- HR special section -->
<div class="hr_special2">

<img src="<?php echo  get_template_directory_uri() ?>/img/section-line-decoration.png" alt="Kancelaria Kraków">
</div>
<!-- HR special section -->
<div class="intro text">
  <p class="middle-text mt2 white"><?php the_field('pcf-nm-4'); ?></p>
</div>

<div class="row mt">
  <div class="col-sm-12">
    <a href="<?php echo the_field('pcf-nm-l1'); echo '#'; echo the_field('pcf-nm-s11') ;?>">
      <div class="button-light "><p><?php echo the_field('pcf-nm-n1') ?></p></div></a></div>

</div>

</div>
</div>
</section>

<!-- parallax section -->


<?php get_template_part( 'content', 'nextprev' );?>

<?php get_footer(); ?>
