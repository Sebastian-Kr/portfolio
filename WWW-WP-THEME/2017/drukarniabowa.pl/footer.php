

<footer id="prgrm-footer">


  <div id="cols" class="container"><div class="row">
   <div class="col-xs-6 col-sm-3"><?php dynamic_sidebar('footer1') ?></div>
   <div class="col-xs-6 col-sm-3"><?php dynamic_sidebar('footer2') ?></div>
   <div class="col-xs-6 col-sm-3"><?php dynamic_sidebar('footer3') ?></div>
   <div class="col-xs-6 col-sm-3"><img src="<?php echo get_template_directory_uri()?>/img/logo_stopka.svg" alt=""></div>
  </div></div>

<div id="autor" class="bgc1"><div class="container"><div class="row">
   <div class="col-xs-6 col-md-3">designed by <a href="https://wizualni.pl/"><mark>wizualni.pl</mark></a></div>
   <div class="col-xs-6 col-md-3 mobihide"></div>
   <div class="col-xs-6 col-md-3 mobihide"></div>
   <div class="col-xs-6 col-md-3">developed by <a href="https://wizualni.pl/"><mark>wizualni.pl</mark></a></div>
</div></div></div>

</footer>


<?php wp_footer(); ?>
<?php if (is_page(3507) or (is_page(3509))) :?>
  <script type="text/javascript">
  // PARALLAX EFECT

  window.onscroll = function() {
    if (window.pageYOffset > 0) {
      document.getElementById("parallax").style.marginTop = (window.pageYOffset) * 2.2 + "px";
      document.getElementById("parallax2").style.marginBottom = (window.pageYOffset) * 1.9 + "px";
      document.getElementById("parallax3").style.marginTop = (window.pageYOffset) * 1.66 + "px";
      document.getElementById("parallax4").style.bottom = (window.pageYOffset) * -.45 + "px";
    }
  }
  // END PARALLAX EFFECT
  </script>
<?php endif; ?>

<?php if (is_page(3505)): ?>
  <script type="text/javascript">
  if ($(window).width() > 1279) {
  $(function() {

      $( '.gif_hover').hover(
        function() {
          var tempsrc = '<?php echo get_template_directory_uri()?>/img';
          var gifsrc = tempsrc+'/'+$(this).attr('id')+'.gif';
          $( this).children("img").attr('src', gifsrc);
        }, function() {
          var tempsrc = '<?php echo get_template_directory_uri()?>/img';
          var svgsrc = tempsrc+'/'+$(this).attr('id')+'.svg';
          $( this).children("img").attr('src', svgsrc);
        }
      );


  });
  }
  </script>
<?php endif; ?>

</body>
</html>
