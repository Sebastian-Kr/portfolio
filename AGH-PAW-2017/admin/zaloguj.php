

<?php
session_start();

include_once ('db_con.php');

$login = $_POST['login'];
$haslo = $_POST['pass'];


$sql = "SELECT * FROM users WHERE user='$login' AND pass='$haslo'";
$results = $pdo->query($sql);

$num_rows = $results->rowCount();
// print_r($num_rows);
if ($num_rows>0) {

  // DEBUG
  // echo '<h3>Jesteś zalogowany</h3>';
  $row_data = $results->fetch(PDO::FETCH_ASSOC);
  $_SESSION['user'] = $row_data['user'];
  $_SESSION['inlog'] = 'true';
  // print_r($row_data);
  unset($_SESSION['error']);

header('Location: start.php');

}
else {
  $_SESSION['error']= '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
  header('Location: index.php');
// echo 'blad logowania';
}
 ?>
