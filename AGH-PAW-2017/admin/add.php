
<?php include_once ('session_check.php'); ?>
<?php include_once ('header.php'); ?>
<?php include_once ('menu.php'); ?>
<?php include_once ('db_con.php'); ?>

<?php

$email = '';
$tel = '';
$checkin_date = '';
$checkout_date = '';

// Jesli ma być edycja a nie dodanie nowego produktu
if (isset($_GET['edit'])) {
 include_once ('db_con.php');
 $id = $_GET['edit'];
 echo '<h2>Edycja produktu nr: '.$id.'</h2>';

 $sql = "SELECT * FROM `products` WHERE `product_id`=".$id;
 $results = $pdo->query($sql);
 foreach($results as $row) {
// print_r($row);
 $name = $row['product_name'];
 $desc = $row['product_desc'];
 $av_dates = $row['product_dates'];
 $stock = $row['product_stock'];
 $color = $row['product_color'];

}}
?>


<?php

if ($_POST["submit"]) {
  $name = htmlspecialchars($_POST["product_name"]);
  $desc = htmlspecialchars($_POST["product_desc"]);
  $av_dates = htmlspecialchars($_POST["product_dates"]);
  $stock = htmlspecialchars($_POST["product_stock"]);
  $color = htmlspecialchars($_POST["product_color"]);

  if (isset($_GET['edit'])) {
    $sql = 'UPDATE products SET product_name = "'.$name.'", product_desc="'.$desc.'", product_dates="'.$av_dates.'", product_stock="'.$stock.'", product_color="'.$color.'" WHERE product_id = '.$id;

  }

  else {
      $sql = 'INSERT INTO products (product_name, product_desc, product_dates, product_stock, product_color) VALUES ("'.$name.'","'.$desc.'","'.$av_dates.'","'.$stock.'","'.$color.'")';

  }


  $insert = $pdo->query($sql);
  if ($insert == TRUE) {
    echo '<div class="border"><p>ZAMIANY ZOSTAŁY WPROWADZONE:</p>';
    echo '<p>Nazwa produktu: ' .$name.'</p>';
    echo '<p>Opis produktu: '.$desc.'</p>';
    echo '<p>Dostępe daty rezerwacji produktu: '.$av_dates.'</p>';
    echo '<p>Ilość dostępnych sztuk: '.$stock.'</p></div>';

  }
  else {
    echo '<P>Zmiany nie zostały wprowadzone, wprowadź poprawne wartości we wszystkich polach</P>';
//DEBUG
      // echo "Error: " . $sql . "<br>" . $pdo->error;
  };
unset($_GET['edit']);
 unset($_POST['submit']);
};
?>



<!-- DODAWNIE NOWEGO PRODUKTU DO BAZY -->
<?php

if (!isset($_GET['edit'])) {
 echo '<h2>DODAWANIE NOWEGO PRODUKTU</h2>';
};


  ?>

  <!-- POBIERANIE DANYCH DO NOWEGO PRODUKTU -->
  <form class="" action="" method="post"/>
     <p>Nazwa produktu:   <input type="text" name="product_name" value="<?php echo $name ?>"/></p>
     <p>Opis produktu:   <input type="text" name="product_desc" value="<?php echo $desc ?>"/></p>
     <p>Dostępne daty <textarea name="product_dates"><?php echo $av_dates ?></textarea></p>
     <p>Dostępna ilość: <input type="number" name="product_stock" value="<?php echo $stock ?>"></p>
     <p>Kolor: <input type="color" name="product_color" value="<?php echo $color ?>"></p>
  <input class="btn btn-info" type="submit" name="submit" value="Zapisz"/>
  </form>




<a class="btn btn-info" href="products.php">Powrót do listy produktów</a>
<?php include_once ('footer.php'); ?>
