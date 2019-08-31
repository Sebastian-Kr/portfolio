

<?php

// 
// $host = '127.0.0.1';
// $db   = 'pawdb2';
// $user = 'pawuser';
// $pass = '123';
// $charset = 'utf8';


$host = 'localhost';
$db   = 'progremo_paw_agh';
$user = 'progremo_paw2017';
$pass = 'EABvad23';
$charset = 'utf8';



$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    // PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // PDO::ATTR_EMULATE_PREPARES   => false,
];
// $pdo = new PDO($dsn, $user, $pass, $opt);



 try {
     $pdo = new PDO($dsn, $user, $pass);
    //  echo 'Połączono z bazą danych';
 } catch (PDOException $e) {
     print "Error!: " . $e->getMessage() . "<br/>";
     die();
 }
 ?>
