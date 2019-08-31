<?php
session_start();

if (!isset($_SESSION['inlog'])) {
// echo 'niezalogowany';
  header('Location: index.php');
  exit();
}
 ?>
