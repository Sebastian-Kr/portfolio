

<?php



$host = '192.168.101.57';
$db   = 'progremo_agh_paw2017aa';
$user = 'progremo_paw_aghAA';
$pass = '&Yhgj45$2364$$@';
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
