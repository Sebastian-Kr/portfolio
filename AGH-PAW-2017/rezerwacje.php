<?php session_start(); ?>
<?php include 'header.php' ?>

  <section id="header">

    <div class="bgheader" style="background-image: url('./images/grafor-kurs-rysunku-i-malarstwa-krakow-Rectangle-6.jpg')"></div>




    <div class="container caption">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="dum fadeInLeft full-visible">
    Rezerwacja
  </h1>
          <h5 class="dum fadeInLeft full-visible">W trzech prostych krokach</h5>
        </div>
      </div>
    </div>
  </section>


  <section id="reservation">


    <div class="container">
      <div class="row">

        <div id="krok1" class="col-lg-4">
          <h2>Krok 1</h2>
          <h6>Wprowadź dane uczestnika kursu</h6>

          <form id="reservation_form" name="reservation_form" action="confirm.php" onsubmit="return validateForm()"  method="post">
            <input placeholder="Imię" name="firstname" type="text">
            <span class="error input1"></span>
            <input placeholder="Nazwisko" name="lastname" type="text">
            <span class="error input2"></span>
            <input placeholder="Numer telefonu" name="phone" type="text">
            <span class="error input3"></span>
            <input placeholder="Adres e-mail" name="mail" type="text">
            <span class="error input4"></span>

        </div>


        <div id="krok2" class="col-lg-4">
          <h2>Krok 2</h2>
          <h6>Wybierz kurs</h6>

                              <?php
                              $sql = "SELECT * FROM `products` WHERE 1";
                              $results = $pdo->query($sql);

                              foreach($results as $row) {?>
<?php if ($row['product_stock']>0) {
 $cssid = $row['product_id'];
 $cssclass = '';
}
else {
  $cssid = '';
$cssclass = 'disabled';
}
   ?>

                                            <div id="k<?php echo $cssid ?>_till" class=" <?php echo $cssclass ?> courses-tilles" style="background-color: <?php echo $row['product_color'] ?>">

                                              <div class="courses_data">
                                                <h4><?php echo $row['product_name'] ?></h4>
                                                <p><?php echo $row['product_desc'] ?></p>
                                              </div>
                                              <div class="in_stock">
                                                <div class="glass"></div>
                                                <h4><?php echo $row['product_stock'] ?></h4>
                                                <p>Wolnych
                                                  <br>miejsc</p>
                                              </div>
                                            </div>

                    <?php
                              }
                               ?>

          <p class="error"></p>




        </div>
        <div id="krok3" class="col-lg-4">

          <h2>Krok 3</h2>
          <h6>Wskaż dzień rozpoczęcia kursu</h6>

          <div id="color" class="">
            <div id="kalendarz" class="date"></div>
          </div>
          <p class="error"></p>
          <input id="submit" value="ZAREZERWUJ" type="submit">
          <!-- <inpuSt type="submit" id="submit" value="Submit"> -->

        </div>
        </form>
      </div>
    </div>
  </section>



  <?php include 'footer.php' ?>
    <?php include 'rezerwacje_js.php' ?>
    <!-- <?php $_SESSION['update_stock'] = 'active'; ?> -->
