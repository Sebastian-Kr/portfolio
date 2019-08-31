<script type="text/javascript">
var currentCourse = "none";
var currentDate = "none";
var dates = "";
var color = "";
// console.log("currentCourse= "+currentCourse);
// console.log("currentDate= "+currentDate);
// console.log("dates= "+dates);




</script>

<?php
  $custom_args = array(
      'post_type' => 'post',
      'cat'=> 5,
      'order' => 'ASC',
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
    <!-- the loop -->
    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
<!-- single-post -->


<?php
$post = get_post();
$post_id = $post->ID;
// echo $post_id;
$color = get_field('progremo_color');
$all_dates = "";
for ($i=1; $i < 21; $i++) {
  $data_id = 'k-data'.$i;
  if (get_field($data_id, $post_id)) {
    $date = '"'.get_field($data_id, $post_id).'",';
    // echo $date;
    $all_dates = $all_dates.$date;
    // echo $all_dates;
  }
}
?>



  <script>
    var dates<?php echo $post_id ?> = [<?php echo $all_dates ?>];
        $("#k<?php echo $post_id ?>_till").on("click", function() {
          available_formatted_dates_list = dates<?php echo $post_id ?>;
          currentCourse = $(this).children(".courses_data").children('h4').html() + "<br> " + $(this).children(".courses_data").children('p').html();
          current_post_id = <?php echo $post_id ?>;
          currentDate = "none";
          color = "<?php echo $color ?>";
          $(".date").datepicker("refresh");
          // $(".date").datepicker("destroy");
          // getcalender();
          $("#color").removeClass().addClass("color<?php echo $post_id ?>");
          $(this).removeClass("inactive").siblings(".courses-tilles").addClass("inactive");
          $("#krok2 .error").html("");
          $("#krok2_new .disable_glass").removeClass("active", {duration:500});
          $("#krok3_new .disable_glass").addClass("active", {duration:500});
        });
</script>

    <!-- end single-post -->
        <?php endwhile; ?>
        <!-- end of the loop -->
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    <!-- END NEWS SECTION -->

    <?php
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 6; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

     ?>
<script>

var captcha_genarate = '<?php echo $randomString; ?>';
console.log(captcha_genarate);
$('#captcha_box').append(captcha_genarate);


            function validateForm() {
              var valid = true;
              if (currentDate == "none") {
                $("#krok3 .error").html('Wybierz datę rozpoczęcia kursu');
                valid = false;
              };
              if (currentCourse == "none") {
                $("#krok2 .error").html('Wybierz jeden z kursów');
                valid = false;
              };
var captcha_input = $( "input[name=captcha_field]" ).val();
              if (!(captcha_genarate === captcha_input)) {
                $(".captcha_error").html('Wpisz poprawny kod weryfikacyjny');
                valid = false;
                // alert('BŁĄD KODU: Wygenerowane: '+captcha_genarate+' Wpisane: '+captcha_input)
              };

              var checked = $("#agree:checked").length;
              if (checked == 0) {
                valid = false;
$(".agree_error").html('Przeczytaj z zaakceptuj regulamin');
              }

              if (valid == false) {
                return false;

              }

            }

    // var dates = dates1;

    var available_formatted_dates_list = dates;

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


// $('#krok2_new #kalendarz').on('click', function(){
//     console.log('zla data');
// });
//
// $("#krok2_new .ui-state-disabled").click(function(){
//       console.log('zla data');
//   })

  //
  // $( ".ui-state-disabled" ).each(function() {
  //     $( this ).on('click', function(){
  //       console.log('test');
  //     });
  //   });





    function getcalender() {
      $('.date').datepicker({
        onSelect: function(date) {
          currentDate = date;
          $("#krok3_new .disable_glass").removeClass("active", {duration:500});
          $("#kalendarz_error").css("opacity", "0");
        },
        // minDate: 0, //minimu date set
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


    $("#submit").on("click", function() {
      var currentDate = $(".date").val();
      var input = $("<input>").attr("name", "data").attr("class", "hidden").val(currentDate);
      var input2 = $("<input>").attr("name", "coursename").attr("class", "hidden").val(currentCourse);
      var input3 = $("<input>").attr("name", "post_id").attr("class", "hidden").val(current_post_id);

      $('#reservation_form').append(input).append(input2).append(input3);
    });

    $(document).ready(function() {
      // GENERATE CALENDER ON START//
         getcalender();
         console.log('kalendarz wygenerowany');


         // var elementsArray = document.querySelectorAll('.ui-state-disabled');
         // console.log(elementsArray);
         // elementsArray.forEach(function(elem) {
         //     elem.addEventListener("click", function() {
         //         console.log('test');
         //     });
         // });

        var error_box = $("#kalendarz_error");
        var error_box_active = false;
        $("#kalendarz").on('click', function(){

          if (!error_box_active) {
            error_box.animate({opacity: '1'}, 'fast');
            error_box_active = true;
          }
          else {
            console.log('error kurwa');
            error_box.css('opacity', '1');
            error_box.css('transform', 'scale(1.1)');
            setTimeout(function(){
               error_box.css('transform', 'scale(1)');
            }, 350);


            // setTimeout(function(){
            //    error_box.css('transform', 'scale(2)');
            //    error_box.css('backgroundColor', 'yellow');
            // }, 600);
            //
            // //
            // setTimeout(function(){
            //    error_box.css('transform', 'scale(2.5)');
            //    error_box.css('backgroundColor', 'pink');
            // }, 1000);
            //
            //
            // setTimeout(function(){
            //    error_box.css('transform', 'scale(3)');
            //    error_box.css('backgroundColor', '#0069B3');
            // }, 1400);
            //
            // setTimeout(function(){
            //    error_box.append('<img id="fun" style="margin: 0 auto; width: 100px" src="https://i1.memy.pl/obrazki/25af804710_co_ty_sobie_myslisz.jpg" alt="" /> ');
            // }, 1800);
            //
            //
            // setTimeout(function(){
            //    error_box.css('transform', 'scale(1)');
            //    error_box.css('backgroundColor', 'white');
            //    $("#fun").remove();
            // }, 5000);



          }



          // $("#kalendarz_error").toggleClass('bounce').css("opacity", "1");
          // error_box.animate({width: '300px', opacity: '0.8'}, "slow");
          // error_box.animate({height: '100px', opacity: '0.4'}, "slow");
          // error_box.animate({width: '100px', opacity: '0.8'}, "slow");
          //
          // var x = event.clientX + 15;     // Get the horizontal coordinate
          // var y = event.clientY + 15;     // Get the vertical coordinate
          // var coor = "X coords: " + x + ", Y coords: " + y;
          // console.log(coor);
          // $("#kalendarz_error").css({"top" : y, "left" : x, "opacity" : 1});

         });


        // $('.date-disabled').click(function(e) {
        //   console.log('cos tam');
        //    var selected = $(this).attr('class') || $(this).attr('id');
        //    alert('You clicked on div: ' + selected);
        //
        // });




    $(function validate() {
      // Initialize form validation on the registration form.
      // It has the name attribute "registration"
      $("form[name='reservation_form']").validate({
        // Specify validation rules
        rules: {
          // The key name on the left side is the name attribute
          // of an input field. Validation rules are defined
          // on the right side
          firstname: "required",
          agree: "required",
          lastname: "required",
          phone: {
            required: true,
            number: true,
            minlength: 9
          },
          subscribe: {
            required: true
          },

          mail: {
            required: true,
            email: true
          },
        },
        // Specify validation error messages
        messages: {
          firstname: "Wpisz imię kursanta",
          phone: "Wpisz poprawny numer telefonu",
          lastname: "Wpisz nazwisko kursanta",
          mail: "Wpisz poprawny adres email",
          agree: "Musisz potwierdzić regulamin",
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        // submitHandler: function(form) {
        //   form.submit();
        // }
      });
    });



  });







  </script>
