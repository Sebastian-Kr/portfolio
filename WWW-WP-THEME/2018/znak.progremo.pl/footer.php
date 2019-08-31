
</div>
<!-- end .main_content -->
<footer id="prgrm-footer" >

<div class="container">
<div class="row">



  <div id="col1" class="col-lg-3 col-sm-6 ">
   <?php  dynamic_sidebar('stopka_kolumna_1'); ?>
  </div>

  <div id="col2" class="col-lg-3 col-sm-6 social_icon">
   <?php  dynamic_sidebar('stopka_kolumna_2'); ?>
  </div>


<div id="col3" class="col-lg-3 col-sm-6 ">
	 <div class="half1">
	   <a href="<?php echo home_url() ?>">Home</a>
	   <a href="<?php echo home_url() ?>/o-nas">About Us</a>
	   <a href="<?php echo home_url() ?>/authors">Authors</a>
	 </div>

   <div class="half2">
     <a href="<?php echo home_url() ?>/top-sales">Top Sales</a>
     <a href="<?php echo home_url() ?>/catalogues">Catalogues</a>
     <a href="<?php echo home_url() ?>/polish-bookmarket">Polish Book Market</a>
   </div>

</div>

     <div id="col4" class="col-lg-3 col-sm-6 ">
       <h6>Join our newsletter!</h6>
       <form method="post" action="https://app.freshmail.com/pl/actions/subscribe/">
  <input type="hidden" name="subscribers_list_hash" value="texxerkwz8" /><br />
  <input type="text" id="freshmail_email" placeholder="Your e-mail" name="freshmail_email"/>
  <input type="submit"  value="Subscribe!" />
  </form>
  	</div>


</div></div>

<div class="container mt20 pt10"><div id="copyright" class="row">
<div class="col-lg-12">

  <div style="float: left">© 2018 - All rights reserved.</div>
  <div style="float: right"> <a target="blank" href="https://wizualni.pl">Design by Wizualni.pl</a></div>
</div>
</div></div>



</footer>

<?php wp_footer(); ?>
<?php if (get_post_type() == 'autor'): ?>
  <script>
  $(document).ready(function(){
    $("#menu-menu-glowne>li:nth-of-type(3)").addClass('active');
    });
  </script>
<?php endif; ?>

<!-- <script type="text/javascript" src="http://localhost:35729/livereload.js"></script> -->
</body>
</html>
