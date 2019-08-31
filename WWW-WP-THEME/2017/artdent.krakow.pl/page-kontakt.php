<?php /* Template Name: Kontakt */?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>
  <!-- <div id="map" style="height:600px"></div>
  <h1>Mapa dostępna po przeniesieniu domeny</h1> -->
<div id="google_map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2559.7561636570927!2d19.92436311626568!3d50.090851979427455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165a4550582e0d%3A0x209b657d51d46adb!2sARTDENT+GABINET+STOMATOLOGICZNO+-+PROTETYCZNY!5e0!3m2!1spl!2spl!4v1515403328834" style="border: 0px none;  " allowfullscreen="" width="600" height="600" frameborder="0"></iframe>
</div>

<div class="container" id="contact">
  <div class="row">


 <div class="col-sm-4">


   <h3>Adres kliniki</h3>
<mark>ArtDent</mark><br>
<p>Gabinet stomatologiczno – protetyczny<br>
ul. Opolska 37, 31-277 Kraków<br>
pawilon handlowy os. Krowodrza</p><br>
<a href="http://artdent.krakow.pl/polityka-prywatnosci/">Polityka prywatności</a>
</div>

<div class="col-sm-4">


  <h3>Dane kontaktowe</h3>


  <div id="largeElement">
    <img src="<?php echo get_template_directory_uri() ?>/img/sluchawka.png" alt="Dentysta kraków - Artdent"><p> 
      <span id="tel_5" class="tel_hidden inverse3">12 415 86 69</span>
    </p><br>

    <img src="<?php echo get_template_directory_uri() ?>/img/icon1.png" alt="Dentysta kraków - Artdent"><p>  
      <span id="tel_6" class="tel_hidden inverse3">+48 693 160 160</span>
    </p><br>

    <img src="<?php echo get_template_directory_uri() ?>/img/icon3.png" alt="Dentysta kraków - Artdent"><p>  artdent@artdent.krakow.pl</p><br>
  </div>

  <div id="smallElement">
    <a style="color: #303030" href="tel:124158669"><img src="<?php echo get_template_directory_uri() ?>/img/sluchawka.png" alt="Dentysta kraków - Artdent"><p>  
  <span id="tel_5" class="tel_hidden inverse3">12 415 86 69</span>
  </p><br></a>

    <a style="color: #303030" href="tel:+48693160160"><img src="<?php echo get_template_directory_uri() ?>/img/icon1.png" alt="Dentysta kraków - Artdent"><p> 
    <span id="tel_6" class="tel_hidden inverse3">+48 693 160 160</span>
  </p><br></a>

    <a style="color: #303030" href="mailto:artdent@artdent.krakow.pl"><img src="<?php echo get_template_directory_uri() ?>/img/icon3.png" alt="Dentysta kraków - Artdent"><p>  artdent@artdent.krakow.pl</p><br></a>

  </div>

  <script type="text/javascript">
  toggle();
  window.onresize = function() {
      toggle();
  }

  function toggle() {
      if (window.innerWidth < 991) {
          document.getElementById('largeElement').style.display = 'none';
          document.getElementById('smallElement').style.display = 'block';
      }
      else {
          document.getElementById('largeElement').style.display = 'block';
          document.getElementById('smallElement').style.display = 'none';
      }
  }



  </script>




</div>
<div class="col-sm-4">


  <h3>Dojazd komunikacją miejską</h3>

<img src="<?php echo get_template_directory_uri() ?>/img/tramwaj.png" alt="Dentysta kraków - Artdent">
<p><mark>Tramwajem:</mark> 3, 5, 18, 50, 69 – pętla Krowodrza Górka</p><br>

<img src="<?php echo get_template_directory_uri() ?>/img/autobus.png" alt="Dentysta kraków - Artdent">
<p><mark>Autobusem:</mark> 118, 120, 138, 154, 168, 194, 220, 240 – przystanek Krowoderskich Zuchów</p><br>



</div>


</div>
</div>

<?php get_template_part('content', 'count3') ?>

<div class="container-fluid"><div class="row scale-xxl bg-cover" style="background-image: url('<?php echo get_template_directory_uri()?>/img/dentysta-krakow-kontakt-tlo.jpg')">
  <img src="" alt="">


</div></div>

  <?php get_footer(); ?>
