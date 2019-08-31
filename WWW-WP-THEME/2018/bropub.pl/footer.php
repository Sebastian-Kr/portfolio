

<footer id="prgrm-footer" class="">

<div class="container">
<div class="row mt40">



  <div id="col1" class="col-lg-3 col-sm-6 ">
   <?php  dynamic_sidebar('stopka_kolumna_1'); ?>
  </div>

  <div id="col2" class="col-lg-2 col-sm-6 social_icon">
   <!-- <?php  dynamic_sidebar('stopka_kolumna_2'); ?> -->
   <ul id="" class="open-menu nav">
   <li id="menu-piwo"><a title="" href="<?php  if (!(is_front_page())) {echo home_url().'/';}?>#menu_piwo">Piwo</a></li>
   <li id="menu-jedzenie"><a title="" href="<?php if (!(is_front_page())) {echo home_url().'/';} ?>#menu_jedzenie">Jedzenie</a></li>
   <li id="menu-transmisje"><a title="" href="<?php if (!(is_front_page())) {echo home_url().'/';} ?>#transmisje">Transmisje</a></li>
   </ul>
  </div>


   <div id="col3" class="col-lg-2 col-sm-6 ">
	 <?php  dynamic_sidebar( 'stopka_kolumna_3' ); ?>
	</div>


  <div id="col4" class="col-lg-2 col-sm-6 ">
   <?php  dynamic_sidebar( 'stopka_kolumna_4' ); ?>
  </div>

</div></div>

<div class="container mt50"><div id="copyright" class="row">
<div class="col-lg-12">

  <div style="float: left">© 2018 - BroPub by Brokreacja. All rights reserved.</div>
  <div style="float: right"> <a href="wizualni.pl">Design by Wizualni.pl</a></div>
</div>
</div>
</div>


</footer>





<?php
if( have_rows('kalendarz_transmisji', 180) ): ?>
  <?php while( have_rows('kalendarz_transmisji', 180) ): the_row();
  $counter++;
  $av_dates .= '"'.get_sub_field('transmisje_data', 180).'",';
 endwhile;
 endif;
substr_replace($av_dates ,"",-1);
$av_dates = rtrim($av_dates, ",");
// echo 'daty: '.$av_dates;
?>
<script type="text/javascript">
var dates ='<?php echo $av_dates ?>';
</script>

<?php wp_footer(); ?>
<script type="text/javascript">
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });


</script>

</body>
</html>
