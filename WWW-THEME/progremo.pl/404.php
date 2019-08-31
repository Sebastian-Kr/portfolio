
<?php
/*
Template Name: Adwords
*/
?>
<?php get_header(); ?>

<?php get_template_part(content, menu);?>

  <div class="separ"></div>
  <div class="separ"></div>

<div class="container">
<div class="semisepar"></div>
<h1>Ups.. coś poszło nie tak</h1>
<div class="semisepar"></div>
Adres strony, który został wpisany nie istnieje. 
Jeśli jesteś pewny, że adres powinien działać wyślij do nas krótkie zgłoszenie i naprawimy problem w ciągu 24h. 

Jeśli nie jesteś pewny jaki jest właściwy adres podstrony, skorzystaj z menu lub z poniższych odnośników, żeby przejść to właściwej części oferty. 
<div class="semisepar"></div>
<div class="row but404">

  <div class="col-md-3"> <div class="button"><a href="<?php echo home_url();?>/home-tworzenie-stron-www/tworzenie-stron-www/">Strony WWW >></a></div>
  </div>
  
  <div class="col-md-3">
    <div class="button"><a href="<?php echo home_url();?>/home-tworzenie-stron-www/opieka-nad-twoja-strona-www/">Opieka WWW >></a></div>

  </div>


  <div class="col-md-3"><div class="button"><a href="<?php echo home_url();?>/home-tworzenie-stron-www/audyty-stron-www/">Audyty WWW >></a></div>
  </div>
  
 <div class="col-md-3"><div class="button"><a href="<?php echo home_url();?>/kampanie-adwords/">Adwords >></a></div>
  </div>



</div>  
</div>


<?php get_template_part(content, prefooter);?>

<?php get_footer(); ?>
