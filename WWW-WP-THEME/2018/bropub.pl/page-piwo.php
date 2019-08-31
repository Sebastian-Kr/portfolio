
<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<div class="interactiveItem" id="piwo"></div>
<section class=" mb0 pb0 visible-on" id="menu_piwo">
  <!-- MAIN CONTENT  -->


  <div class="container hidden-sm-down">
        <div class="row">

<div class="col-md-12">
  <!-- <div class="img_title"></div> -->
<h2 class="title-section">PIWO LANE <span>/ DRAUGHT BEER</span></h2>
</div>
<div class="col-sm-6 col-md-4">
          <?php
          $counter = 0;
          if( have_rows('menu_piwo', 174) ): ?>
          	<?php while( have_rows('menu_piwo', 174) ): the_row();
            $counter++;?>

            <?php if (($counter==7) || ($counter==13)) {
              echo '</div><div class="col-sm-6 col-md-4">';
            } ?>

                            <div class="item_menu">
                        <!-- <span class="h2" style="background-position-y: -<?php echo $position = ($counter-1) * 62 ?>px;"></span> -->
                        <span class="h2"><?php echo $counter ?></span>
              <h3>  <?php echo get_sub_field('piwo_nazwa', 174) ?></h3>
                <h4>  <?php echo get_sub_field('piwo_browar', 174) ?></h4>
                  <p <?php if(get_sub_field('piwo_kolor', 174)) echo 'class="kolor"'?>><?php echo get_sub_field('piwo_rodzaj', 174) ?>
                <span><?php echo get_sub_field('piwo_alkohol', 174) ?></span></p>
                <p></p>
              </div>
<div class="clearfix"></div>


          	<?php endwhile; ?>

          <?php endif; ?>
           </div>

        </div>
  </div>



  <div class="container  hidden-sm-up">
        <div class="row">

<div class="col-md-12">

  <!-- <div class="img_title"></div> -->
<h2 class="title-section">PIWO LANE <span>/ DRAUGHT BEER</span></h2>
</div>
<div class="col-sm-6 col-md-4">
          <?php
          $counter = 0;
          if( have_rows('menu_piwo', 174) ): ?>
            <?php while( have_rows('menu_piwo', 174) ): the_row();
            $counter++;?>

            <?php if (($counter==9)) {
              echo '</div><div class="col-sm-6 col-md-4">';
            } ?>

                            <div class="item_menu">
            <!-- <span class="h2" style="background-position-y: -<?php echo $position = ($counter-1) * 62 ?>px;"></span> -->
                              <span class="h2"><?php echo $counter ?></span>
              <h3>  <?php echo get_sub_field('piwo_nazwa', 174) ?></h3>
                <h4>  <?php echo get_sub_field('piwo_browar', 174) ?></h4>
                  <p <?php if(get_sub_field('piwo_kolor', 174)) echo 'class="kolor"'?>><?php echo get_sub_field('piwo_rodzaj', 174) ?>
                <span><?php echo get_sub_field('piwo_alkohol', 174) ?></span></p>
                <p></p>
              </div>
<div class="clearfix"></div>


            <?php endwhile; ?>

          <?php endif; ?>
           </div>

        </div>
  </div>
<div class="container">
  <div class="row">
<div class="col-lg-12 bear_bottom_text_container">
<div class="bear_bottom_text"><?php echo the_field('bear_bottom_text', 174) ?></div>

</div></div></div>
  <!-- MAIN CONTENT END  -->
<div class="separ"></div>
<div class="pattern_end_container"><div class="pattern_shape pattern_shape_inverse"></div></div>
</section>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>
