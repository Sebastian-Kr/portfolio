<?php
/*
Template Name: Opieka WWWW
*/
?>
<?php get_header(); ?>

<?php get_template_part(content, menu);?>
<?php get_template_part(content, header);?>
  <div class="separ"></div>
<?php get_template_part(content, main);?>
  <div class="separ"></div>
<?php get_template_part(content, acfbuilder);?>







<!-- =================================
SNAKE SECTION
====================================== -->
<section id="snake">
  <div class="container">

  <h2>CO MOŻEMY ZROBIĆ W RAMACH ABONAMENTU:</h2>

<div>
<div class="dum left"><h5>Newsletter</h5>Podpięcie i przetestowanie neslettera, który będziesz wysyłał do swoich klientów.</div>
<div class="mid dum3"></div>
<div class="dum2 right"><h5>Slider</h5>Utworzenie bądź rozbudowa slidera na stronie głównej, dzięki któremu zaprezentujesz klientom wyróżniki swojej oferty.</div>
</div>

<div>
<div class="dum left"><h5>Szablon</h5>Zaprojektowanie dodatkowego layoutu na stronę.</div>
<div class="mid dum3"></div>
<div class="dum2 right"><h5>Aktualizacja</h5>Publikowanie przesłanych treści na stronie, zamieszczanie zdjęć do galerii,aktualizowani danych firmy. </div>
</div>

<div>
<div class="dum left"><h5>SEO</h5>Optymalizacja strony internetowej pod kątem wyszukiwarki, dostosowywanie do nowych wymagań Google.</div>
<div class="mid dum3"></div>
<div class="dum2 right"><h5>Grafika</h5>Projektowanie banerów sprzedażowy na Twoją stronę www.</div>
</div>


</div>
<div class="semisepar"></div>
<div class="tab-cont row">

<span id="tab" class=" glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span>

</div>

</section>


<!-- =================================
END SNAKE SECTION
====================================== -->

<div class="separ"></div>


<section class="full-bar">
<h2>25% RABATU DLA STRON PROJEKTOWANYCH W PROGREMO</h2>
</section>


       
<!--  =======================================
 KAFELKI 8
 ==========================================END -->

<section id="dark-sc" class="full-bar inverse">
 
<div class="container">
  <div class="row vcc">
<div class="col-sm-8 col-md-6">
  
<h4>MOŻESZ PRZYJĄĆ WIĘCEJ KLIENTÓW?</h4>
<p>
Najszybszym sposobem na wygenerowanie ruchu na Twojej stronie jest kampania AdWords. Dzięki niej możesz do 24h od podpisania umowy pokazać swoją ofertę potencjalnym klientom. Możemy zoptymalizować reklamę tak, by trafiła do Twojej grupy docelowej na wskazanycm obszarze i o określonych godzinach. 
  Sprawdź, ile możesz zyskać dzięki kampanii AdWords!
</p>

<h4>CZY TWOJA STRONA WYMAGA POPRAWY?</h4>
<p>
Twoja strona nie pozyskuje klientów? A może ruch na stronie jest duży, jednak konwersja mała? Pojawiają się komunikaty o błędach? Na te wszystkie pytania można odpowiedzieć dopiero podczas ptrzeprowadzenia audytu użyteczności strony oraz audytu SEO. Przetestujemy Twoją witrynę, wskażemy Ci błędy, jakie należy poprawić, by Twoja strona zarabiała.
  Sprawdź, czy Twoje strona jest prawidłowo zbudowana!
</p>

<div class="button"><a href="<?php echo home_url();?>/kampanie-adwords/">Adwords >></a></div>
<div class="button"><a href="<?php echo home_url();?>/audyty-stron-www/">Audyty WWW >></a></div>

</div>
<div class="col-sm-4 col-md-6 vcr">
<img src="<?php echo get_template_directory_uri();?>/img/strony--internetowe-na-mobilne-smartfony.png" alt="Mobilne wersje stron internetowych">
</div>

</div>
<div class="tab-cont row">
<span id="tab" class=" glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span>

</div>
</div>


</section>



<?php get_template_part(content, prefooter);?>

<?php get_footer(); ?>
