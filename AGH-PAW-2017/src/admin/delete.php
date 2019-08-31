<?php include_once ('session_check.php'); ?>
<?php include_once ('db_con.php'); ?>


<?php
// echo '<br>Numer pozycji do usunięcia: '.$_GET['id'].'<br>';
if (isset($_GET['id-r'])) {
  $sql_del = 'DELETE FROM `reservations` WHERE `reservations`.`reservation_id` = '.$_GET['id-r'];

  if ($pdo->query($sql_del)) {
    echo '<h3>Usuwanie rezerwacji</h3>';
    echo '<br>Rezerwacja została usunięta. Id rezerwacji:'.$_GET['id-r'];

    echo ' <p><a class="btn btn-info" href="reservations.php">Powrót do listy rezerwacji</a></p>';
  }
  else {
      echo "<br>Błąd: " . $sql_del . "<br>" . $pdo->error;
  }
}


 if (isset($_GET['id'])) {
   $sql_del = 'DELETE FROM `products` WHERE `products`.`product_id` = '.$_GET['id'];
   if ($pdo->query($sql_del)) {
     echo '<h3>Usuwanie produktu</h3>';
     echo '<div class="border">Produkt został usunięty. Id produktu:'.$_GET['id'];
     echo '</div>';
     echo ' <p><a class="btn btn-info" href="products.php">Powrót do listy produktów</a></p>';
   }
   else {
       echo "<br>Błąd: " . $sql_del . "<br>" . $pdo->error;
   }

 }
 ?>
<br>
