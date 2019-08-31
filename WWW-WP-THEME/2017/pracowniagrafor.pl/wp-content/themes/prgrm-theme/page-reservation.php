<?php session_start(); ?>
<?php /* Template Name: REZERWACJA */?>


  <?php get_header(); ?>
    <?php get_template_part(content, header);?>

      <?php echo get_template_part('content', 'main') ?>




        <?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
          <section id="reservation">


            <div class="container">
              <div class="row">


                <!-- <div id="krok2" class="col-lg-4"> -->
                <div id="krok1_new" class="col-lg-4">
                  <h2>Krok 1</h2>
                  <h6>Wybierz kurs</h6>
                  <?php get_template_part('content', 'colortiles') ?>
                    <p class="error"></p>
                </div>

                <!-- <div id="krok3" class="col-lg-4"> -->
                <div id="krok2_new" class="col-lg-4">
                  <div class="disable_glass active"></div>
                  <h2>Krok 2</h2>
                  <h6>Wskaż dzień rozpoczęcia kursu</h6>
                  <div id="color" class="">
                    <div id="kalendarz" class="date"></div>
                    <div id="kalendarz_error">
                      <p>Można wybrać tylko zakolorowane pola. Jeśli nie widzisz dostępnych terminów, sprawdź w kolejnych miesiącach</p>
                    </div>
                  </div>

                </div>


                <!-- <div id="krok1" class="col-lg-4"> -->
                <div id="krok3_new" class="col-lg-4">
                  <div class="disable_glass active "></div>
                  <h2>Krok 3</h2>
                  <h6>Wprowadź dane uczestnika kursu</h6>

                  <form id="reservation_form" name="reservation_form" onsubmit="return validateForm()" class="" action="<?php echo get_permalink(132) ?>" method="post">
                    <input placeholder="Imię" type="text" name="firstname">
                    <input placeholder="Nazwisko" type="text" name="lastname">
                    <input placeholder="Numer telefonu" type="text" name="phone">
                    <input placeholder="Adres e-mail" type="text" name="mail">

                    <p class="error"></p>
                    <div id="captcha_box"></div>
                    <input id="captcha_field" placeholder="Przepisz kod" type="text" name="captcha_field">
  <div class="clearfix">
  </div>
                    <p class="captcha_error error"></p>
                    <input type="checkbox" id="agree"  name="agree" />
                        <label class="float-left" for="subscribeNews">Potwierdzam, że zapoznałem(am) się z treścią
                          <a target="blank" href="<?php echo home_url() ?>/regulamin-rezerwacji/">
                          Regulaminu rezerwacji</a> i akceptuję jego warunki.</label>
                            <p class="agree_error error"></p>
                    <input class="btn btn-info" id="submit" type="submit" value="ZAREZERWUJ">
                    </form>


                </div>





              </div>
            </div>
          </section>
          <?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>



            <?php get_footer(); ?>
            <?php get_template_part('content', 'reservationscript') ?>
<?php $_SESSION['update_stock'] = 'active'; ?>
