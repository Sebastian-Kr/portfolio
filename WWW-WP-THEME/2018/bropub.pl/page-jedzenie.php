
<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<div class="interactiveItem" id="jedzenie"></div>

<section class="mb0 pb80" id="menu_jedzenie">
  <!-- MAIN CONTENT  -->
<div class="pattern_end_container"><div class="pattern_shape "></div></div>

  <div class="container">
        <div class="row">

<div class="col-md-12"><h2>JEDZENIE <span>/ FOOD</span></h2></div>
<div class="col-lg-5">



  <?php
  if( have_rows('menu_jedzenie', 177) ):
  $i = 0;
  while( have_rows('menu_jedzenie', 177) ): the_row();
    if( get_sub_field('jedzenie_nazwa', 177) ) $i++;
 endwhile;
   $Countrow = $i;
endif;



          (int)$counter = 1;
          if (($Countrow%2)==0) {

             (int)$berakpoint = ($Countrow/2)+2;
          }
          else
           (int)$berakpoint = ($Countrow/2)+3;

          if( have_rows('menu_jedzenie', 177) ): ?>
          	<?php while( have_rows('menu_jedzenie', 177) ): the_row();
             $counter++;
             (int)$berakpoint;?>

            <?php if ($counter == (int)$berakpoint) {
              echo '</div><div class="col-lg-2"></div><div class="col-lg-5">';
            } ?>

                <div class="item_menu">
<h3>
                  <?php
                  if ($counter <11) {echo '0';}
                  echo $counter-1;
                  echo'. ';
                  echo get_sub_field('jedzenie_nazwa', 177);
                   ?>
  </h3>
                  <p <?php if(get_sub_field('jedzenie_kolor')) echo 'class="kolor"'?>><?php echo get_sub_field('jedzenie_opis', 177) ?></p>
                  <p class="cena"><span>CENA </span><?php echo get_sub_field('jedzenie_cena', 177) ?></p>

                </div>



          	<?php endwhile; ?>

          <?php endif; ?>
           </div>

        </div>
  </div>


  <!-- MAIN CONTENT END  -->
<div class="separ"></div>

</section>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>
