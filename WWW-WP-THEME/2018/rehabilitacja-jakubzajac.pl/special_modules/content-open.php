

   <?php
   // MODUŁ GODZIN OTWARCIA
       date_default_timezone_set('Europe/Warsaw'); // timezone
       $weekday = date(l); // today
      //  print $weekday; // Debug
      //  print date("H:i"); // debug
if (get_field('close_now', 18)==true) {
    $hours_info = "TERAZ ZAMKNIĘTE";
}

else {



         if ($weekday == "Monday") {
           $hours = get_field('open-cz', 18);
           $open_from = $hours['od'];
           $open_to = $hours['do'];
           if ($open_to < "05:00") { $nex_day = true ;}
         }
         elseif ($weekday == "Tuesday") {
           $hours = get_field('open-cz', 18);
           $open_from = $hours['od'];
           $open_to = $hours['do'];
           if ($open_to < "05:00") { $nex_day = true; }
         }

         elseif ($weekday == "Wednesday") {
           $hours = get_field('open-cz', 18);
           $open_from = $hours['od'];
           $open_to = $hours['do'];
           if ($open_to < "05:00") { $nex_day = true ;}
         }

         elseif ($weekday == "Thursday") {
           $hours = get_field('open-cz', 18);

           $open_from = $hours['od'];
           $open_to = $hours['do'];
           if ($open_to < "05:00") { $nex_day = true ;}
         }
         elseif ($weekday == "Friday") {
           $hours = get_field('open-pt', 18);
           $open_from = $hours['od'];
           $open_to = $hours['do'];
           if ($open_to < "05:00") { $nex_day = true ;}
         }
         elseif ($weekday == "Saturday") {
           $hours = get_field('open-sb', 18);
           $open_from = $hours['od'];
           $open_to = $hours['do'];
           if ($open_to < "05:00") { $nex_day = true ;}
         }
         elseif ($weekday == "Sunday") {
           $hours = get_field('open-nd', 18);
           $open_from = $hours['od'];
           $open_to = $hours['do'];
           if ($open_to < "05:00") { $nex_day = true; }
         }


  if ($nex_day == true) {
  // ECHO 'NEXT DAY'; // DEBUG
    // now check if the current time is before or after opening hours
    if (date("H:i") > "05:00" && date("H:i") > $open_from) {
       //  print "TERAZ ZAMKNIĘTE";
        $hours_info = "TERAZ OTWARTE";
    }

    elseif (date("H:i") < "05:00" && date("H:i") < $open_to) {
       //  print "TERAZ ZAMKNIĘTE";
        $hours_info = "TERAZ OTWARTE";
    }


    // show the checkout button
    else {
        $hours_info = "TERAZ ZAMKNIĘTE";
    }


  }

  else {
    // now check if the current time is before or after opening hours
    if (date("H:i") < $open_from || date("H:i") > $open_to ) {
       //  print "TERAZ ZAMKNIĘTE";
        $hours_info = "TERAZ ZAMKNIĘTE";
    }

    // show the checkout button
    else {
        $hours_info = "TERAZ OTWARTE";
    }

  }

}

       // MODUŁ GODZIN OTWARCIA KONIEC
   ?>


   <button type="button" name="button"><?php echo $hours_info ?></button>