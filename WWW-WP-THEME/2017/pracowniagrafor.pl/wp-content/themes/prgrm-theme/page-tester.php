<?php /* Template Name: TESTER */?>
<?php get_header(); ?>
<?php get_template_part(content, header);?>


<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section class="mb0 pb0" id="kontakt-info">
<div class="container"><div class="row">
<div class="col-md-12">




                    <div id="color" class="">
                          <h3> TESTER KALENDARZ</h3>
                      <div id="kalendarz" class="date"></div>
                    </div>



</div>
</div>
</div>
</section>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>

  <?php get_footer(); ?>



<script type="text/javascript">




    var available_formatted_dates_list = ["12-11-2017"];

    function check_available_date(date) {
      var formatted_date = '',
        ret = [true, "", ""];
      if (date instanceof Date) {
        formatted_date = $.datepicker.formatDate('dd-mm-yy', date);

      } else {
        formatted_date = '' + date;

      }
      if (-1 === available_formatted_dates_list.indexOf(formatted_date)) {
        ret[0] = false;
        ret[1] = "date-disabled"; // put yopur custom csc class here for disabled dates
        ret[2] = "Data jest niedostępna"; // put your custom message <her></her>  e

      }
      return ret;
    }




    function getcalender() {
      $('.date').datepicker({
        onSelect: function(date) {
          // alert(date);
          currentDate = date;
        },
        // minDate: 0, //minimu date set
        maxDate: null, //"+10M +2D", // maksimum date set
        closeText: "Zamknij",
        dayNames: ["Niedziela", "Poniedziałek", "Wtorek", "Środa", "Czwartek", "Piątek", "Sobota"],
        dayNamesMin: ["Nd", "Pn", "Wt", "Śr", "Cz", "Pt", "So"],
        dayNamesShort: ["Nd", "Pn", "Wt", "Śr", "Cz", "Pt", "So"],
        monthNames: ["Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", "Czerwiec", "Lipiec", "Sierpień", "Wrzesień", "Październik", "Listopad", "Grudzień"],
        monthNamesShort: ["Sty", "Lut", "Mar", "Kwi", "Maj", "Cze", "Lip", "Sie", "Wrz", "Paź", "Lis", "Gru"],
        dateFormat: "yy-mm-dd",
        navigationAsDateFormat: true,
        nextText: 'M',
        prevText: 'M',
        // showOtherMonths: true,
        multidate: true,
        duration: "slow",
        firstDay: 1,
        gotoCurrent: true,
        hideIfNoPrevNext: true,
        dateFormat: 'dd-mm-yy',
        beforeShowDay: check_available_date,
        minDate: 0, //minimu date set
      });

      // return this;
    };


</script>
