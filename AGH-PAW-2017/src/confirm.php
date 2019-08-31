<?php session_start(); ?>
<?php include 'header.php' ?>


<?php


if (($_SESSION['update_stock'])== 'active' ) {
  $select_post_id = (int) $_POST['post_id'];
  $_SESSION['update_stock'] = 'unactive';
}

?>

<section id="header">
  <div class="bgheader" style="background-image: url('./images/grafor-kurs-rysunku-i-malarstwa-krakow-Rectangle-6.jpg')"></div>
  <div class="container caption">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="dum fadeInLeft full-visible">Rezerwacja</h1>
        <h5 class="dum fadeInLeft full-visible">została złożona, dziękujemy!</h5>
      </div>
    </div>
  </div>
</section>

<!-- <?php print_r($_POST) //debug?> -->

<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section id="confirm_reservation">
<div class="container"><div class="row">

<div id="person_details" class="col-md-4">
<h2>Dane kursanta</h2>
<p><?php echo $firstname = $_POST['firstname'].' '.$_POST['lastname']?></p>
<p><?php echo 'tel.'.$_POST['phone']?></p>
<p><?php echo $email = $_POST['mail']?></p>
<P class="mt30"><strong>WYBRANY KURS:</strong></P>
<p ><?php echo $_POST['coursename']?></p>
<p class=""><?php echo $_POST['coursedesc']?></p>
<p>Wybrana data rozpoczęcia kursu:</p>
<p><?php echo $checkin = $_POST['data']?></p>
<p><?php  $product_id = $_POST['post_id']?></p>

</div>
<?php
$tel = $_POST['phone'];
$checkin = '2018-01-18';
$status = 'Nowa';
 ?>

<div class="col-md-4">
  <h2>Płatność PayU</h2>
<p>Potwierdzenie rezerwacji wymaga
dokonania płatności w kwocie 140zł.
Kwota ta jest traktowana jako zaliczka na
poczet kursu. Aby potwierdzić rezerwację
dokonaj płatności za pośrednictwem PayU.</p>

<div>


<form action="https://ssl.dotpay.pl/test_payment/" method="post" id="dotpay_redirection_form">
<input name="id" value="768307" type="hidden"/>
<input name="amount" value="140" type="hidden"/>
<input name="currency" value="PLN" type="hidden"/>
<input name="description" value="Zliczka na kurs GRAFOR dla <?php echo $_POST['firstname'].' '.$_POST['lastname']?>" type="hidden"/>
</form>
<p><button type="submit" form="dotpay_redirection_form" value="Submit">
  <img src="./images/dp_logo_alpha.png" alt="">
</button></p></div>


</div>


<div class="col-md-4">
  <h2>lub przelew tradycyjny</h2>
<p>Płatności na konto:</p>
<p>93 1111 2222 3333 4444 5555 6666 7777</p>
<p>Pracownia Grafor Barbara Kowalska</p>
<p>ul.Polna Kraków 2</p>
<p>30-657 Kraków</p>




</div></div>
</section>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>

<?php
$sql = 'INSERT INTO reservations (firstname, username, phone, checkin_date, status, product_id) VALUES ("'.$firstname.'","'.$email.'","'.$tel.'","'.$checkin.'","'.$status.'","'.$product_id.'")';
// $success = 'NOWA REZERWACJA ZOSTAŁA DODANA'; //debug

$insert = $pdo->query($sql);

// DEBUG

// if ($insert == TRUE) {
//   echo '<div class="list"><p><strong>'.$success.'</strong></p>';
//   echo '<p>Rezerwacja na: ' .$product_id.'</p>';
//   echo '<p>Imię nazwisko: ' .$firstname.'</p>';
//   echo '<p>Użytkownik / email: ' .$email.'</p>';
//   echo '<p>Telefon: ' .$tel.'</p>';
//   echo '<p>Data rezerwacji: ' .$checkin.'</p>';
//   echo '<p>Status rezerwacji: ' .$status.'</p></div>';
//
// } else {
//     echo "Error: " . $sql . "<br>" . $pdo->error;
// }
//




// AKTUALIZACJA STANÓW MAGAZYNOWYCH

$update_stock_sql =  'UPDATE `products` SET `product_stock`= `product_stock` -1 WHERE `product_id` ='.$product_id;
$insert = $pdo->query($update_stock_sql);

//DEBUG

// if ($insert == TRUE) {
//   echo '<br>Stan został zaktualizowany';
// }
// else
// echo "Error: " . $sql . "<br>" . $pdo->error;
//



 ?>



<?php
function phpBMailer($email, $temat, $tresc, $kopia_do=null)
{
   $naglowek    = 'From: Strona projektu PAW'."\r\n";
   if(!is_null($kopia_do)) $naglowek.='Reply-to: '.$kopia_do."\r\n";

   $naglowek   .= 'Content-type: text/html; charset=utf-8'."\r\n";
  $name = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $phone = $_POST['phone'];
  $mail = $_POST['mail'];
  $coursename = $_POST['coursename'];
  $data = $_POST['data'];

   $temat       = 'Rezerwacja kursu projekt PAW-2017';
   $tresc = '<br><h3>Rezerwacja kursu www.PAW2017.progremo.pl</h3><h4>Dane rezerwacji</h4><p>Imię: '.$name.'</p>
            <p>Nazwisko: '.$lastname.'</p>
            <p>Telefon: '.$phone.'</p>
            <p>Adres emaiL: '.$mail.'</p>
            <p>Wybrany kurs:<br><br><b> '.$coursename.'</b></p>
            <p>Wybrana data rozpoczęcia kursu: <b>'.$data.'</b><p>';
   $stopka       = '--------------<br><p>Formularz rezerwacji www.PAW2017.progremo.pl</p>';
   $tresc       = $tresc.$stopka;
   $kopia_do = $mail;
 mail('admin@progremo.pl', $temat, $tresc, $naglowek);

   if (mail($mail, $temat, $tresc, $naglowek)) {
     return true;
   }
   else {
     return false;
   }

}
//DEBUG
//
// if (phpBMailer($mail, $temat, $tresc, null)) {
//   echo ' Wiadomość została wysłana</p>';
// }
// else echo ' Błąd, wiadomość nie została wysłana</p>';


?>



  <?php include 'footer.php' ?>
