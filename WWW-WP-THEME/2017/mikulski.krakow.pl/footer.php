
<div class="box-shadow-footer"></div>
<footer>
<div class="container">
<div class="col-sm-4 bottom-box">
<a href="/" class="logo"></a>

<?php  if (is_active_sidebar('footer1')) {dynamic_sidebar('footer1');}?>

<a href="http://www.google.com/maps/place/50.068103,19.963038/@50.068103,19.963038,17z" class="location-more" target="_blank"><span></span>wyznacz trasę</a>
<a href="<?php echo get_permalink(468) ?>" class="carrer-more2"><span></span>Kariera</a>
</div>

<div class="col-sm-4 bottom-box">

  <?php  if (is_active_sidebar('footer2')) {dynamic_sidebar('footer2');}?>

</div>
<div class="col-sm-4 bottom-box newsletter-box">
<h3>Newsletter</h3>
Informacje i komentarze z pierwszej ręki <br>
<div id="foot_form">
<form class="bft-front-form bft-vertical bft-inline-label" method="post" action="#" onsubmit="return BFTValidate(this);">
<div class="bft-form-group"><label></label> <input class="news-field" placeholder="Imię i nazwisko"   type="text" name="user_name"></div>
<div class="bft-form-group"><label></label> <input class="news-field" placeholder="Adres e-mail" type="text" name="email"></div>
<div class="bft-form-group"><input id="submit" type="submit" value="ZAPISZ SIĘ"></div>
<input type="hidden" name="bft" value="register">
</form>
</div>
<div class="clear"></div>

<div class="clear"></div>
</div>
<div class="bottom col-sm-12">
<a href="http://on-creative.pl" target="_blank" class="link-left">Realizacja on-creative.pl </a>
<a  href="http://progremo.pl" target="_blank" class="link-left"> /progremo.pl</a>
<a href="/regulamin" class="link-left politycs">Polityka prywatności / Regulamin</a>
<span class="link-right"> Copyright © 2017 Mikulski&amp;Wspólnicy</span>
</div>
</div>
</footer>

<a class="go-up" href="javascript:void(0)" style="display: none;"><i class="ion-ios-arrow-up"></i></a>
<?php wp_footer(); ?>


<script type="text/javascript">
$(document).ready(function () {
$("#toggle_button").click(function () {
  $("#activ_toggle").toggleClass("toggle_menu_active");
  // $("#activ_toggle")..slideDown('slow');
});
});
</script>

<!-- <script type="text/javascript">
  // setTimeout('"'', 5);
  function progremo_delay(url) {
  setTimeout(function(){ location.href = url; }, 2000);
  }


</script> -->



</body>
</html>
