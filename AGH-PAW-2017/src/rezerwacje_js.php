<script type="text/javascript">


  var currentCourse = "none";
  var currentDate = null;
  var dates = "";
  var color = "";
  var current_post_id = "null"
  console.log("currentCourse= " + currentCourse);
  console.log("currentDate= " + currentDate);
  console.log("dates= " + dates);
</script>

<!-- the loop -->
<!-- single-post -->


<?php
$sql = "SELECT * FROM `products` WHERE 1";
$results = $pdo->query($sql);

foreach($results as $row) {
$js_dates = '';

$av_dates = explode("; ", $row['product_dates']);
echo '<br>Tablica data:';
print_r($av_dates);
echo '<br>';

foreach($av_dates as $one_date) {
  $js_dates .= '"'.$one_date.'",';
}


substr_replace($js_dates ,"",-1);
$js_dates = rtrim($js_dates, ",");
echo $js_dates;
  ?>



<script>


   var dates<?php echo $row['product_id'] ?> = [<?php echo $js_dates ?>];
   console.log(dates);
  // var data_string = "<?php echo $row['product_dates'] ?>";
  // console.log(data_string);
  // console.log('Wyczysczone data_string: ');
  // var  data_string = data_string.replace(/&quot;/g, '\"');
  // console.log(data_string);

  //  var dates<?php echo $row['product_id'] ?> = [];
// console.log('pusta tablea dates:'+ dates<?php echo $row['product_id'] ?>);
// dates.push("thurs");
  //  var dattest = "<?php echo $row['product_dates'] ?>"
   console.log(dates<?php echo $row['product_id']  ?>);



  $("#k<?php echo $row['product_id'] ?>_till").on("click", function() {
    available_formatted_dates_list = dates<?php echo $row['product_id'] ?>;
    currentCourse = $(this).children(".courses_data").children('h4').html();
    currentDesc = $(this).children(".courses_data").children('p').html();
    current_post_id = "<?php echo $row['product_id'] ?>";
    currentDate = "none";
    color = "<?php echo $row['product_color'] ?>";
    console.log(currentCourse);
    console.log(currentDesc);
    console.log('CURRENTDATE: '+currentDate);
    console.log(color);
    console.log(current_post_id);
    console.log(available_formatted_dates_list);
    $(".date").datepicker("refresh");
    $("#color").removeClass().addClass("color<?php echo $row['product_id'] ?>");
    $(this).removeClass("inactive").siblings(".courses-tilles").addClass("inactive");
    $("#krok2 .error").html("");

  });
</script>




<?php
}
 ?>


<script>


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




  function getcalender() {
    $('.date').datepicker({
      onSelect: function(date) {
        // alert(date);
$("#krok3 .error").html("");
        currentDate = date;
        console.log('CURRENTDATE: '+currentDate);
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
      // firstDay: 1,
      gotoCurrent: true,
      hideIfNoPrevNext: true,
      dateFormat: 'dd-mm-yy',
      beforeShowDay: check_available_date,
      minDate: 0, //minimu date set
    });

    // return this;
  };




    // GENERATE CALENDER ON START//
  $(document).ready(function() {

    getcalender();

  });

// FORM VALIDATION

  function validateForm() {
    var valid = true;

// Firstname validation
    var name = document.forms["reservation_form"]["firstname"].value;
    if (name == "") {
        $("#krok1 .input1").html('Pole obowiązkowe');
        valid = false;
    };

    // Lastname validation
    var lastname = document.forms["reservation_form"]["lastname"].value;
    if (lastname == "") {
        $("#krok1 .input2").html('Pole obowiązkowe');
        valid = false;
    };

// Phone validation
    var phone = document.forms["reservation_form"]["phone"].value;
    if (phone == "") {
        $("#krok1 .input3").html('Pole obowiązkowe');
        valid = false;
    }

    else {
      var phoneno = /^\d{9}$/;
      if(phone.match(phoneno))
      {
          console.log('true');
      }
      else
      {
        $("#krok1 .input3").html('Wpisz poprawny, 9cio cyfrowy numer telefonu');
        valid = false;
      }
    }

    // Mail validation
    var mail = document.forms["reservation_form"]["mail"].value;
    if (mail == "") {
        $("#krok1 .input4").html('Pole obowiązkowe');
        valid = false;
    }

    else {
      var emailpattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
      if(mail.match(emailpattern))
      {
          // console.log('true');
      }
      else
      {
$("#krok1 .input4").html('Wpisz poprawny email ');
        valid = false;
      }
    }
  //  Course validation

    if (currentCourse == "none") {
      $("#krok2 .error").html('Wybierz jeden z kursów');
      valid = false;
    };
// Calender validation
    if (currentDate == null) {
      $("#krok3 .error").html('Wybierz datę rozpoczęcia kursu');
      valid = false;
    };


      if (valid == false) {
        return false;
      }

        var input = $("<input>").attr("name", "data").attr("class", "hidden").val(currentDate);
        var input2 = $("<input>").attr("name", "coursename").attr("class", "hidden").val(currentCourse);
        var input3 = $("<input>").attr("name", "coursedesc").attr("class", "hidden").val(currentDesc);
        var input4 = $("<input>").attr("name", "post_id").attr("class", "hidden").val(current_post_id);
        $('#reservation_form').append(input).append(input2).append(input3).append(input4);


  }



</script>
<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
</body>

</html>
