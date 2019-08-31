<?php include_once ('session_check.php'); ?>
<?php include_once ('header.php'); ?>
<?php include_once ('menu.php'); ?>
<?php include_once ('db_con.php'); ?>

<h2>LISTA REZERWACJI</h2>
<!-- Informacja o wyniku ostatniej operacji: -->
<div id="info"></div>




<?php
$sql = "SELECT * FROM `reservations` WHERE 1";
$results = $pdo->query($sql);

foreach($results as $row2) {
// $product_id = $row2['product_id'];

$sql2 = "SELECT * FROM `products` WHERE `product_id`=".$row2['product_id'];
$results2 = $pdo->query($sql2);
$productname = $results2->fetchColumn(1);

    echo   '<div id="'.$row2['reservation_id'].'" class="item">';
    echo '<p>Rezerwacja nr: '.$row2['reservation_id'].' ';
    echo '<br>PRODUKT: <strong>'.$productname.' </strong>(id produktu:'.$row2['product_id'].')</p> ';
echo '<p> STATUS REZERWACJI: '.$row2['status'].'</p> ';
    echo '<p><strong>DANE KLIENTA:</strong></p> ';
    echo '<p>Imię i nazwisko: '.$row2['firstname'].'</p> ';
    echo '<p>Email: '.$row2['username'].'</p> ';
    echo '<p>Telefon:  '.$row2['phone'].'</p> ';
    echo '<p>Data:  '.$row2['checkin_date'].'</p> ';
    echo '<p><a onclick="deleteRow('.$row2['reservation_id'].')">Kasuj JS/AJAX</a>';
    echo "<a href='delete-page.php?id-r=".$row2['reservation_id']."'>Kasuj PHP</a>";
    echo '<a href="add-res.php?edit='.$row2['reservation_id'].'">Edycja</a></p></div>';
    // $sql_del = 'DELETE FROM `products` WHERE `products`.`product_id` = '.$row2['product_id'];
    // $pdo->query($sql_del);


}


 ?>

<!-- <form class="" action="index.html" method="get">
  <input type="submit" name="del" value="kasuj">
</form> -->


<br><br><a class="btn btn-info" href="add-res.php">Dodaj nową rezerwację</a>


<?php include_once ('footer.php'); ?>

<!-- DELETE SCRIPT AJAX  -->
<script>
    function deleteRow(StaffID){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {

        if (xhttp.readyState == 4 && xhttp.status == 200) {
          // Zwrot wartości dokumentu
          document.getElementById("info").innerHTML = xhttp.responseText;
                  console.log("Pozycja została usunięta");
            }
        };
        document.getElementById(StaffID).remove();
        xhttp.open("GET", "delete.php?id-r="+StaffID, true);
        // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send();
        }
</script>
<!-- END DELETE SCRIPT AJAX  -->
