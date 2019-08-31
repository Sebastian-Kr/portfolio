
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>

<div id="header-post">

<section id="header-normal" style="background-image: url('<?php echo get_the_post_thumbnail_url(3505,'full') ?>')">
  <div class="container"><div class="row"><div class="col-xs-12">
    <h4><?php echo the_field('prog_subtitle') ?></h4>
    <h1><?php the_title()?></h1>
    <hr>
     <div class="icon_cont">
     <?php if (is_single(3513)): ?><img class="icon" src="<?php echo get_template_directory_uri()?>/img/etykiety.svg" alt=""><?php endif;?>
     <?php if (is_single(3515)): ?><img class="icon" src="<?php echo get_template_directory_uri()?>/img/ksiazki_albumy.svg" alt=""><?php endif;?>
     <?php if (is_single(3517)): ?><img class="icon" src="<?php echo get_template_directory_uri()?>/img/katalogi.svg" alt=""><?php endif;?>

     <?php if (is_single(3519)): ?><img class="icon" src="<?php echo get_template_directory_uri()?>/img/opakowania.svg" alt=""><?php endif;?>
     <?php if (is_single(3521)): ?><img class="icon" src="<?php echo get_template_directory_uri()?>/img/ulotki_gazetki.svg" alt=""><?php endif;?>
     <?php if (is_single(3523)): ?><img class="icon" src="<?php echo get_template_directory_uri()?>/img/identyfikacja_wizualna.svg" alt=""><?php endif;?>

     <?php if (is_single(3525)): ?><img class="icon" src="<?php echo get_template_directory_uri()?>/img/kalendarze.svg" alt=""><?php endif;?>
     <?php if (is_single(3527)): ?><img class="icon" src="<?php echo get_template_directory_uri()?>/img/czasopisma_gazety.svg" alt=""><?php endif;?>
     <?php if (is_single(3529)): ?><img class="icon" src="<?php echo get_template_directory_uri()?>/img/materialy_pos.svg" alt=""><?php endif;?>

     <?php if (is_single(3531)): ?><img class="icon" src="<?php echo get_template_directory_uri()?>/img/zdrapki_kupony.svg" alt=""><?php endif;?>
     <?php if (is_single(3533)): ?><img class="icon" src="<?php echo get_template_directory_uri()?>/img/druki_personalizowane.svg" alt=""><?php endif;?>
     <?php if (is_single(3535)): ?><img class="icon" src="<?php echo get_template_directory_uri()?>/img/uszlachetnienia.svg" alt=""><?php endif;?>
</div>

  </div></div></div>
</section>

<?php get_template_part( 'content', 'main' );?>

<div id="return" class="container"><div class="row"><div class="col-xs-12">
  <a href="javascript:history.back()"><div class="return prgrm-pp">

    <img  src="<?php echo get_template_directory_uri()?>/img/powrot.png" alt="">
    <h5 >POWRÓT</h5>
  </div></a>
</div></div></div>
</div>

<!--  ===========================================================-->


<div id="slider">
     <div id="main-slider" class="carousel slide" data-ride="carousel" data-interval="false">

       <div class="carousel-inner" role="listbox">

         <?php
         $img = 'pcf-s-f1';
         $i = 1;
         do {
           $i++;
           $img = 'pcf-s-f'.$i;
         }
         while (get_field($img));
         $all=$i - 1;
         $i = 1;
       
     
         
        
         do {
          $img = 'pcf-s-f'.$i;
          $titleID = 'pcf-s-n'.$i;
          $klientID = 'pcf-s-k'.$i;
          $textID = 'pcf-s-h'.$i;
          
          if (get_field($titleID)) {$title = get_field($titleID);} else {$title = get_field('pcf-title-def');}
          if (get_field($textID)) {$text = get_field($textID);} else {$text = get_field('pcf-desc-def');}

          ?>


               <!-- single item -->
                    <div class="item <?php if ($i == 1) echo 'active' ?>">
               <div class="container post-slider"><div class="row">
                 <div class="col-sm-8 slider_img">
                   <img src="<?php echo the_field($img) ?>" alt="">
                    <div id="counter"><?php echo $i.'/'.$all ?></div>
                 </div>
                 <div class="col-sm-4 slider_text">
                   <h2><?php echo $title ?></h2>
                   <hr class="prgrm_shrt">
                   <!-- <p class="mb">KLIENT: <mark><?php echo the_field($klient) ?></mark></p> -->
                   <?php echo $text ?>
                 </div>
               </div>

             </div></div>

               <!-- single item end-->


         <?php
            $i++;
            $img = 'pcf-s-f'.$i;
            // $img = 'pcf-s-f'.$i;
            // $titleID = 'pcf-s-n'.$i;
            // $klientID = 'pcf-s-k'.$i;
            // $textID = 'pcf-s-h'.$i;
          } while (get_field($img));?>


<!-- CONTROLS -->
<div id="controls-cont">
       <div id="controls" class="container"><div class="row">
          <div class="col-sm-8 ">
            <div class="slider_controls">
                     			<a class="left carousel-control" href="#main-slider" data-slide="prev">
                     	<span class="change_slide slide-prev"></span>
                     </a>
                     <a class="right carousel-control" href="#main-slider" data-slide="next">
                     	<span class="change_slide slide-next"></span>

                     </a>
            <!-- glyphicon glyphicon-chevron-right -->
            <!-- glyphicon glyphicon-chevron-left -->

          </div></div>
           <div class="col-md-4">
         </div> <!-- end column-->
       </div> <!-- end row-->
     </div> <!-- end container-->
</div>

       </div>

     </div>
</div>


</div>
<!-- end post -->

<!--  ===========================================================-->



<?php get_footer(); ?>
