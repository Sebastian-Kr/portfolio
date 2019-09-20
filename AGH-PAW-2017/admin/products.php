<?php include_once ('session_check.php'); ?>
<?php include_once ('header.php'); ?>
<?php include_once ('menu.php'); ?>
<?php include_once ('db_con.php'); ?>



<h2>LISTA PRODUKTÓW</h2>
<!-- Informacja o wyniku ostatniej operacji: -->
<div id="info"></div>




<?php
$sql = "SELECT * FROM `products` WHERE 1";
$results = $pdo->query($sql);

foreach($results as $row) {

echo   '<div class="item" id="'.$row['product_id'].'" class="row">';
  echo '<p>ID:'.$row['product_id'].' ';
  echo ' NAZWA PRODUKTU: '.$row['product_name'].'</p> ';
    echo '<p>OPIS PRODUKTU: '.$row['product_desc'].'</p> ';

    echo ' <p> DOSTĘPNA ILOŚĆ: '.$row['product_stock'].' ';
    echo ' <p> KOLOR: '.$row['product_color'].' ';
        echo ' </p><p>DOSTĘPNE DO REZERWACJI DATY: '.$row['product_dates'].' </p>';
        echo ' <p> <a onclick="deleteRow('.$row['product_id'].')">Kasuj JS/AJAX</a>';
            echo '<a href="add.php?edit='.$row['product_id'].'">Edycja </a>';
          echo "<a href='delete-page.php?id=".$row['product_id']."'> Kasuj PHP</a></p>";

    echo '</p></div>';
    // $sql_del = 'DELETE FROM `products` WHERE `products`.`product_id` = '.$row2['product_id'];
    // $pdo->query($sql_del);


}
 ?>

<!-- <form class="" action="index.html" method="get">
  <input type="submit" name="del" value="kasuj">
</form> -->

<br><br><a class="btn btn-info" href="add.php">Dodaj nowy produkt</a>


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
        xhttp.open("GET", "delete.php?id="+StaffID, true);
        // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send();
        }
</script>
<!-- END DELETE SCRIPT AJAX  -->

<?php include_once ('footer.php'); ?>
