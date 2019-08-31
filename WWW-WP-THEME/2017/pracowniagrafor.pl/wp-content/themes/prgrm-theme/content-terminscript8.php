

<script type="text/javascript">
// <!-- ////////////////////////////////////////////////////START PIERWSZEGO KALENDARZA -->
var display_month = 0;
var currentCourse = "none";
var currentDate = "none";
var dates = "";
var color = "";
var date = new Date();
var counter = 0;
var mode = 'all';
if (typeof t !== 'undefined') {
  // Now we know that foo is defined, we are good to go.
}
// var swith = 'fill';

  function check_available_date(date) {

          var year = date.getFullYear();

          var month = (1 + date.getMonth()).toString();
          month = month.length > 1 ? month : '0' + month;

          var day = date.getDate().toString();
          day = day.length > 1 ? day : '0' + day;
          // console.log(swith);

      <?php
      ////////////////// ADD ALL COURSES LOOP ///////////////////////
      $custom_args = array(
          'post_type' => 'post',
          'cat'=> 4,
          'order' => 'ASC',
        );
      $custom_query = new WP_Query( $custom_args );
      if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post();
      $count++;
      $id_post = get_the_ID();
      $color = get_field('progremo_color');

$i = 0;
      if( have_rows('calender_dates') ):

        $php_all_dates = "";
          while ( have_rows('calender_dates') ) : the_row();

              $date = get_sub_field('calender_single_dates');
              if ($i>0) $php_all_dates = $php_all_dates.',';
              $php_all_dates = $php_all_dates.'"'.$date.'"';
              $i++;
          endwhile;
      endif;
      ?>



            var dates<?php echo $id_post ?> = [<?php echo $php_all_dates ?>];
            var dates = dates<?php echo $id_post ?>;
css_class = 'color color<?php echo $id_post ?>';
                      for (i = 0; i < dates.length; i++) {
                          if($.inArray(day + '-' + month + '-' + year,dates) != -1) {
                              //return [false];
                              return [true,  css_class, ''];
                          }

                      }




      <?php endwhile;
      wp_reset_postdata();
      endif;
      ?>


      return [true];

    }


</script>


<?php
  $custom_args = array(
      'post_type' => 'post',
      'cat'=> 4,
      'order' => 'ASC',
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>


<?php
$post = get_post();
$post_id = $post->ID;
$color = get_field('progremo_color');
$all_dates = "";


if( have_rows('calender_dates') ):

  $php_all_dates = "";
    while ( have_rows('calender_dates') ) : the_row();

        $date = get_sub_field('calender_single_dates');
        if ($i>0) $all_dates = $all_dates.',';
        $all_dates = $all_dates.'"'.$date.'"';
        $i++;
    endwhile;
endif;
?>



  <script>



    var dates<?php echo $post_id ?> = [<?php echo $all_dates ?>];

        $("#k<?php echo $post_id ?>_till").on("click", function() {
          available_formatted_dates_list = dates<?php echo $post_id ?>;
          currentCourse = $(this).children('h4').html() + "<br> " + $(this).children('p').html();
          current_post_id = <?php echo $post_id ?>;
          // console.log(current_post_id);
          currentDate = "none";
          mode = "single";



          $(".date").datepicker( "destroy" );
          getcalender2();
          $(".date").datepicker("refresh");

        $("#color").removeClass().addClass("color<?php echo $post_id ?>");
          $(this).removeClass("inactive").siblings(".courses-tilles").addClass("inactive");
        });

</script>
        <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>

<script>



$(document).on('click', '.ui-datepicker-next', function () {
  display_month++
  // console.log(display_month);
})

$(document).on('click', '.ui-datepicker-prev', function () {
  display_month--;
  // console.log(display_month);
})



$("#k999_till").on("click", function() {
  $(".date").datepicker( "destroy" );
  getcalender1();
  $(".date").datepicker("refresh");
  $("#color").removeClass();
  $(this).removeClass("inactive").siblings(".courses-tilles").removeClass("inactive");
});


    function check_available_date2(date) {

      var year = date.getFullYear();

      var month = (1 + date.getMonth()).toString();
      month = month.length > 1 ? month : '0' + month;

      var day = date.getDate().toString();
      day = day.length > 1 ? day : '0' + day;
      // console.log(swith);

                            css_class = 'color color252';
                            dates = dates252;
                            // console.log(dates252);
                            for (i = 0; i < dates.length; i++) {
                                if($.inArray(day + '-' + month + '-' + year,dates) != -1) {
                                    //return [false];
                                    return [true,  css_class, ''];
                                }

                            }


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



function getcalender1() {

      $( ".date").datepicker({
          dateFormat: 'dd-mm-yy',
          maxDate: null, //"+10M +2D", // maksimum date set
          closeText: "Zamknij",
          dayNames: ["Niedziela", "Poniedziałek", "Wtorek", "Środa", "Czwartek", "Piątek", "Sobota"],
          dayNamesMin: ["Nd", "Pn", "Wt", "Śr", "Cz", "Pt", "So"],
          dayNamesShort: ["Nd", "Pn", "Wt", "Śr", "Cz", "Pt", "So"],
          monthNames: ["Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", "Czerwiec", "Lipiec", "Sierpień", "Wrzesień", "Październik", "Listopad", "Grudzień"],
          monthNamesShort: ["Sty", "Lut", "Mar", "Kwi", "Maj", "Cze", "Lip", "Sie", "Wrz", "Paź", "Lis", "Gru"],
          dateFormat: "dd-mm-yy",
          navigationAsDateFormat: true,
          nextText: 'M',
          prevText: 'M',
          duration: "slow",
          firstDay: 1,
          gotoCurrent: true,
          hideIfNoPrevNext: true,
          dateFormat: 'dd-mm-yy',
              defaultDate: display_month+'m',
          beforeShowDay: check_available_date
      });

    };

    $(document).ready(function() {
      // GENERATE CALENDER ON START//
         getcalender1();
});



function getcalender2() {
  $('.date').datepicker({
    maxDate: null, //"+10M +2D", // maksimum date set
    closeText: "Zamknij",
    dayNames: ["Niedziela", "Poniedziałek", "Wtorek", "Środa", "Czwartek", "Piątek", "Sobota"],
    dayNamesMin: ["Nd", "Pn", "Wt", "Śr", "Cz", "Pt", "So"],
    dayNamesShort: ["Nd", "Pn", "Wt", "Śr", "Cz", "Pt", "So"],
    monthNames: ["Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", "Czerwiec", "Lipiec", "Sierpień", "Wrzesień", "Październik", "Listopad", "Grudzień"],
    monthNamesShort: ["Sty", "Lut", "Mar", "Kwi", "Maj", "Cze", "Lip", "Sie", "Wrz", "Paź", "Lis", "Gru"],
    dateFormat: "dd-mm-yy",
    navigationAsDateFormat: true,
    nextText: 'M',
    prevText: 'M',
    duration: "slow",
    firstDay: 1,
    gotoCurrent: true,
    hideIfNoPrevNext: true,
    dateFormat: 'dd-mm-yy',
    beforeShowDay: check_available_date2,
    defaultDate: display_month+'m'

  });

};





    </script>
