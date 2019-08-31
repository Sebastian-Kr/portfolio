

<div class="bg-dark text-white" id="footer">
   <div class="container">
     <div class="row">
       <div class="p-4 col-md-4">
         <h2 class="mb-4 text-secondary">Kontakt</h2>

        <?php echo the_field('progremo_kolumna1', 206) ?>
         <br> </div>
       <div class="p-4 col-md-4">
         <h2 class="mb-4 text-secondary">Godziny otwarcia:</h2>
         <?php echo the_field('progremo_kolumna2', 206) ?>
</div>
       <div class="col-md-4">
         <div id="lex" class=" col-md-12 my-4 h-25">
<img src="<?php echo get_template_directory_uri()?>/img/lex2.png" alt="">
           <h2 class="mb-4 text-secondary">Lex est quod notamus</h2>


       </div>
     </div></div>
     <div  class="row border-top-1">
       <div  class="col-md-12 mt-3">
         <p id="copyright" class="text-center text-secondary">© Copyright <?php echo the_time(Y) ?> Kancelaria Notarialna Justyna Szawul-Proniewska.</p>

            <div id="autor">
              <a href="http://progremo.pl" target="blank"><b><h2>progremo.pl</h2><b/></a> - <a href="http://progremo.pl" target="blank"><h2>tworzenie stron internetowych</h2></a>
           </div>
       </div>
     </div>
   </div>
 </div>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

 <?php wp_footer(); ?>
   <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   -->

 <!-- <script src="http://localhost:36492/livereload.js"></script> -->
</body>
</html>
