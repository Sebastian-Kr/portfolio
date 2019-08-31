

<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section id="transmisje" class="interactiveItem ">
<div class="container "><div class="row">
<div class="col-lg-12 mt100" ><h2>TRANSMISJE</h2></div>


<div class="col-lg-5 cal_container ">

<div id="kalendarz" class="date"></div>
</div>
<div class="col-lg-7">
<div class="event_container" >

  <?php
  $counter = 0;
  if( have_rows('kalendarz_transmisji', 180) ): ?>
    <?php while( have_rows('kalendarz_transmisji', 180) ): the_row();
    $counter++;
 $current_date = get_sub_field('transmisje_data', 180);
    $av_dates .= '"'.$current_date.'",';
    ?>
    <?php
    // echo '<br>aktualna data="'.date("d-m-Y");
    //
    // echo '<br>curent date='.$current_date;


    $today = date("d-m-Y");
    $left_day = (strtotime($current_date) - strtotime($today)) / (60*60*24);
    // echo "Pozostało ".$left_day." dni do ".$current_date;

    ?>

                    <div class="item_event <?php if ($left_day<0) {echo 'hidden';} ?>" id="id<?php echo get_sub_field('transmisje_data', 180) ?>">
          <!-- <?php echo $counter ?> -->

<div  class="item_event_header">

  <?php echo get_sub_field('transmisje_data', 180) ?>
  <?php echo get_sub_field('transmisje_tytul', 180) ?>

</div>

        <?php echo get_sub_field('transmisje_opis', 180) ?>
        <p></p>
      </div>



    <?php endwhile; ?>

  <?php endif;

  ?>

</div>
</div>
</div>
</div>



</section>
<div class="separ"></div>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>
