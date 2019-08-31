<?php include_once ('session_check.php'); ?>
<?php include_once ('header.php'); ?>
<?php include_once ('menu.php'); ?>
<?php include_once ('db_con.php'); ?>



<?php
if (!isset($_GET['edit'])) {
  echo '<h2>DODAWANIE NOWEJ REZERWACJI</h2>';
}

$email = '';
$tel = '';
$checkin_date = '';

// Jesli ma być edycja a nie dodanie nowej rezerwacj
if (isset($_GET['edit'])) {

  $id = $_GET['edit'];
  echo '<h2>Edycja rezerwacji nr: '.$id.'</h2>';

  $sql = "SELECT * FROM `reservations` WHERE `reservation_id`=".$id;
  $results = $pdo->query($sql);
  foreach($results as $row) {
//DEBUG
// print_r($row);
  $firstname = $row['firstname'];
  $email = $row['username'];
  $tel = $row['phone'];
  $checkin_date = $row['checkin_date'];
  $product = $row['product_id'];
  $status = $row['status'];
  $product_id = $row['product_id'];

}
}


$sql = "SELECT * FROM `products`";
$results = $pdo->query($sql);

foreach($results as $row) {
   $options_product_name .= '<option value="'.$row["product_id"].'">'.$row["product_name"].'</option>';
}
//DEBUG
// echo $options_product_name;
?>

<!-- DODAWNIE NOWEJ REZERWACJI DO BAZY -->
<?php

//DEBUG
// print_r($_POST);

if (!($_POST["firstname"]) =='') {
  // $product_id = htmlspecialchars($_POST["product_id"]);
   $firstname = htmlspecialchars($_POST["firstname"]);
   $email = htmlspecialchars($_POST["email"]);
   $tel = htmlspecialchars($_POST["tel"]);
   $checkin = htmlspecialchars($_POST["checkin_date"]);
   $product_id = htmlspecialchars($_POST["product_id"]);
   $status = htmlspecialchars($_POST["status"]);
  $sql = 'INSERT INTO reservations (firstname, username, phone, checkin_date, status, product_id) VALUES ("'.$firstname.'","'.$email.'","'.$tel.'","'.$checkin.'","'.$status.'","'.$product_id.'")';
  $success = 'NOWA REZERWACJA ZOSTAŁA DODANA';

  if ($_POST['res_id']) {
    $sql = 'UPDATE reservations SET firstname = "'.$firstname.'", username="'.$email.'", phone="'.$tel.'", checkin_date="'.$checkin.'", status="'.$status.'", product_id="'.$product_id.'" WHERE reservation_id = '.$_POST['res_id'];
$success = 'REZERWACJA ZOSTAŁA ZAKTUALIZOWANA';
  }

  $insert = $pdo->query($sql);
  if ($insert == TRUE) {
    echo '<div class="list"><p><strong>'.$success.'</strong></p>';
    echo '<p>Rezerwacja na: ' .$product_id.'</p>';
    echo '<p>Imię nazwisko: ' .$firstname.'</p>';
    echo '<p>Użytkownik / email: ' .$email.'</p>';
    echo '<p>Telefon: ' .$tel.'</p>';
    echo '<p>Data rezerwacji: ' .$checkin.'</p>';
    echo '<p>Status rezerwacji: ' .$status.'</p></div>';

  } else {
      echo "Error: " . $sql . "<br>" . $pdo->error;
  }



// AKTUALIZACJA STANÓW MAGAZYNOWYCH

$update_stock_sql =  'UPDATE `products` SET `product_stock`= `product_stock` -1 WHERE `product_id` ='.$product_id;
$insert = $pdo->query($update_stock_sql);
if ($insert == TRUE) {
 echo '<br><p>Stan magazynowy dla wybranego produktu został zaktualizowany</p>';
}

else {
echo '<br><p>Błąd w aktualizacji stanu magazynowego.</p>';
//DEBUG
// echo "Error: " . $sql . "<br>" . $pdo->error;

}

}
// <!--//DODAWANIE NOWEJ REZERWACJI DO BAZY - KONIEC  -->
?>


<!-- POBIERANIE DANYCH DO NOWEGO PRODUKTU -->
 <form class="" action="" method="post"/>
 <?php if (isset($_GET['edit'])): ?>
   <input type="hidden" name="res_id" value="<?php echo $id ?>">
 <?php endif; ?>
<!-- <p>Czego dotyczy rezerwacja:   <input type="text" name="product_id" value=""/></p> -->
   <p>Imię i nazwisko:   <input type="text" name="firstname" value="<?php echo $firstname ?>"/></p>
   <p>Email:   <input type="text" name="email" value="<?php echo $email ?>"/></p>
   <p>Telefon:   <input type="text" name="tel" value="<?php echo $tel ?>"/></p>
   <p>Data rezerwacji:   <input type="date" name="checkin_date" value="<?php echo $checkin_date ?>"/></p>
   <p>Wybrany produkt:   <select type="text" name="product_id" value="<?php echo $product_id ?>"/></p>

<?php echo $options_product_name; ?>

</select>
   <p>Status:   <select type="text" name="status" value=""/>
     <option value="nowa">Nowa</option>
     <option value="anulowana">Anulowana</option>
     <option value="zatwierdzona">Zatwierdzona</option>
     <option value="zrealizowana">Zrealizowana</option>
     <option value="niezrealizowana">Niezrealizowana</option>
     <option value="wstrzymana">Wstrzymana</option>

</select>
<label><P>ZAZNACZ JEŚLI CHCESZ WYSŁAĆ MAILA DO KLIENTA Z POWIADOMIENIEM</label>
<input type="checkbox" name="is_mail"></P>
   </p>

<input class="btn btn-info" type="submit" name="submit" value="Zapisz"/>
 </form>




<!-- ////////////////////////////////////////////WYSYŁANIE MAILA Z POWIADOMIENIEM ////////////////////////////////////////// -->
<?php
   if (isset($_POST["is_mail"])) {


        $naglowek    = 'From: Strona projektu PAW'."\r\n";
        if(!is_null($kopia_do)) $naglowek.='Reply-to: '.$kopia_do."\r\n";

        $naglowek   .= 'Content-type: text/html; charset=utf-8'."\r\n";
       $name = $_POST['firstname'];
       $lastname = $_POST['lastname'];
       $phone = $_POST['tel'];
       $mail = $_POST['email'];
       $data = $_POST['checkin_date'];

        $temat       = 'Rezerwacja kursu projekt PAW-2017 - zmiana statusu';
        $tresc = '<br><h3>Rezerwacja kursu www.PAW2017.progremo.pl - zmiana statusu</h3><h4>Aktualne dane rezerwacji</h4><p>Imię i nazwisko: '.$name.'</p>
                 <p>Telefon: '.$phone.'</p>
                 <p>Adres emaiL: '.$mail.'</p>
                 <p>Wybrana data rozpoczęcia kursu: <b>'.$data.'</b><p>';
        $stopka       = '--------------<br><p>Powiadomienie systemowe - nie odpowiadaj nią jeśli wszystkie dane są poprawne.</p>';
        $tresc       = $tresc.$stopka;
        $kopia_do = $mail;

mail('admin@progremo.pl', $temat, $tresc, $naglowek);
     if (mail($mail, $temat, $tresc, $naglowek)) {
       echo ' Wiadomość została wysłana</p>';
     }
     else echo ' Błąd, wiadomość nie została wysłana';
   }

/////////////////////////////////////////WYSYŁANIE MAILA Z POWIADOMIENIEM - KONIEC//////////////////////////////////////////////////

//DEBUG
 // else {echo 'nie ma posta';}
 $_POST['firstname'] = '';
 ?>

 <a class="btn btn-info" href="reservations.php">Powrót do listy rezerwacji ></a>


 <?php include_once ('footer.php'); ?>
