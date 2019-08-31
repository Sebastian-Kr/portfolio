<?php
/*
Template Name: LIB
*/

?>



<?php get_header(); ?>
<!-- MENU PODWÓJNE -->
<?php get_template_part(content, men);?>

<!-- <h2>NAGŁÓWEK</h2> -->
<?php get_template_part(content, header);?>

<?php get_template_part(content, theme); ?>


<!-- <span></span> -->
<!-- -->

 <!-- style="background-image: url('http://localhost/wordpress/artdent/wp-content/uploads/2017/07/profilaktyka-dentysta-krakow-2.png')" -->

<!--============================slider wzór  -->

<div id="main-slider">

        <div id="main-slider3" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#main-slider3" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider3" data-slide-to="1"></li>
            <li data-target="#main-slider3" data-slide-to="2"></li>
            <li data-target="#main-slider3" data-slide-to="3"></li>

          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <!-- start the loop -->

0
            </div><div class="item">


1
            </div><div class="item">

2
            </div><div class="item">
            3
           <!--  end the loop-->

            </div><!-- end last item -->
            			<a class="left carousel-control" href="#main-slider3" data-slide="prev">
            	<span class="glyphicon glyphicon-chevron-left"></span>
            	<span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#main-slider3" data-slide="next">
            	<span class="glyphicon glyphicon-chevron-right"></span>
            	<span class="sr-only">Next</span>
            </a>

          </div><!-- end carousel-inner -->
        </div><!-- end main-slider3 -->
      </div><!-- end main-slider -->

<!--============================slider wzór end  -->

<!--
-==============================================================================
FILMY W OKNIE LIGHTBOX INSTRUKCJA:
-==============================================================================
-->
 <!-- WAŻNE: dodać dodatkowo atrybut do elementu klikalngo i dwie klasy-->
<p data-boxid="film3" class="lightbox play4 white-button" href="#">Obejrzyj video<span class="glyphicon glyphicon-play" aria-hidden="true"></span></p>
 <div class="backdrop"></div>

       <div id="film3" class="box">
         <div id="close-lightbox-film" class="close">X</div>
<iframe src="https://www.youtube.com/embed/op_pprvT5As?autoplay=0" allowfullscreen=""></iframe>
       </div>
<!--
-==============================================================================
KONIEC FILMY W OKNIE LIGHTBOX INSTRUKCJA:
-==============================================================================
-->


<div id="prgrm_klocki">
HR z klasą: max-green
<hr class="max-green">
HR z klasą: max-blue
<hr class="max-blue">
HR z klasą: max-orange
<hr class="max-orange">
HR z klasą: max-purple
<hr class="max-purple">
HR z klasą: max-pink
<hr class="max-pink">
HR z klasą: max-brown
<hr class="max-brown">

<span class="frame-black">Klasa: frame-black</span>
<span class="frame-pink">Klasa: frame-pink</span>
<span class="frame-purple">Klasa: frame-purple</span>
<span class="frame-blue">Klasa: frame-blue</span>

<!-- =============================================================================================================
COUNTER
================================================================================================================== -->
<h2 class='lego-tilte'>LICZNIK JS - wersja na wtyczce</h2>
<?php get_template_part('prgrm_lib/content', 'counter');?>
<!-- =============================================================================================================
COUNTER END
================================================================================================================== -->

<!-- =============================================================================================================
ZOOM TILES
================================================================================================================== -->
<h2 class='lego-tilte'>KAFELKI Z ZOOMEM</h2>
<?php get_template_part('prgrm_lib/content', 'zoomtiles');?>
<!-- =============================================================================================================
ZOOM TILES END
================================================================================================================== -->


<!-- =============================================================================================================
prgrm_tiles
================================================================================================================== -->
<h2 class='lego-tilte'>Kafelki pozostałe proste</h2>
<?php get_template_part('prgrm_lib/content', 'prgrm_tiles');?>
<!-- =============================================================================================================
prgrm_tiles END
================================================================================================================== -->




  <?php get_footer(); ?>
