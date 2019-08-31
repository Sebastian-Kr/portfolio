

<div class="container-fluid maxw">
<div class="row">
<div class="col-sm-6">

<?php if ((get_field('prefooter1')=="TAK")): ?>
<div class="prefooter">
<a href="javascript:history.back()"><div class="powrot">powrót</div></a>
</div>
<?php endif; ?>

<?php if (is_page( 3070 )): ?>
<div class="file prefooter3">
  <a target="blank" href="<?php echo the_field('prefooter3_link')?>">
    <h6>Pobierz pełną wersję cennika</h6>
  <div class="icon-file" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/icon-pdf.svg"></div>
  </a>
</div>
<?php endif; ?>



</div><div class="col-sm-6">

  <?php if ((get_field('prefooter2')=="TAK")): ?>
<div class="skontaktuj">
  <a href="mailto:rezerwacje@nautica.pl"><div class="mail"></div></a>
  <a href="tel: 126260036"><div class="phone"></div></a>
    <p>skontaktuj się z nami</p>
</div>
  <?php endif; ?>


</div>
</div>
</div>




<footer id="prgrm-footer" class="shadow-btn">

<div class="container-fluid maxw">

  <!-- <p>Date: <div type="text" id="datepicker"></p> -->

<div class="text">
  <!-- Nautica 30-056 Kraków, ul. Toruńska 5, <span class="mediumshow"></span>e-mail: <a href="mailto:rezerwacje@nautica.pl">rezerwacje@nautica.pl</a><br>
  tel.: <a href="tel:126260036">12 626 00 36</a>
  biuro Kraków w. 12,<span class="mediumshow"></span> baza Havar - Stari Grad w. 30,baza Vis w. 20, sklep <a href="tel:126261805">12 626 18 05</a> -->
<?php dynamic_sidebar('footer1') ?>
</div>



<div class="icons">


  <div class="icon">
  <a href="https://www.facebook.com/nauticavis" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/icon-fb.svg" alt="FACEBOOK"><h6>Vis</h6></a>
  </div>


<div class="icon">
<a href="https://www.facebook.com/nauticahvardive" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/icon-fb.svg" alt="FACEBOOK"><h6>Hvar</h6></a>
</div>


<div id="totop" class="icon">
<img src="<?php echo get_template_directory_uri() ?>/img/do-gory.svg" alt="FACEBOOK"><h6><span>do góry</span></h6>

</div>
</div>

</div>

</footer>



<?php wp_footer(); ?>

</body>
</html>
