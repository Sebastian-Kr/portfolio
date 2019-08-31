

<div id="main-header">
     <div id="main-slider" class="carousel slide" data-interval="200000" data-ride="carousel">

       <div class="container"><div class="row"><div class="col-md-12">
         <div id="fixed_caption">
           <img src="<?php echo get_template_directory_uri()?>/img/grafor-kurs-rysunku-i-malarstwa-krakow-logo_20copy.png" alt="">
           <?php echo the_field('progremo_slide-content1') ?>
           <a href="<?php echo home_url() ?>/kurs-rysunku/"> <div class="btn btn-info">ZOBACZ NASZE KURSY</div></a>

         </div>
       </div></div></div>


       <ol class="carousel-indicators">
         <li data-target="#main-slider" data-slide-to="0" class="active"></li>
         <li data-target="#main-slider" data-slide-to="1"></li>
         <li data-target="#main-slider" data-slide-to="2"></li>
       </ol>



       <div class="carousel-inner" role="listbox">
         <div class="carousel-item active">
    <div id="bg_slide1" class="bg_slide"></div>
         </div>
         <div class="carousel-item">
        <div id="bg_slide2" class="bg_slide"></div>

         </div>
         <div class="carousel-item">
        <div id="bg_slide3" class="bg_slide"></div>
         </div>
       </div>

     </div>
</div>
