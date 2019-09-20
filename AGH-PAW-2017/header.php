<?php include_once ('admin/db_con.php'); ?>

<html lang="pl">

<head>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rezerwacja – GRAFOR Krakowski kurs rysunku i malarstwa</title>
  <meta name="robots" content="index,follow">
  <link rel="stylesheet" id="bootstrap-css" href="./bootstrap-4.0.0/css/bootstrap.css" type="text/css" media="all">
  <link rel="stylesheet" id="style-css" href="./css/style.css" type="text/css" media="all">



  <style type="text/css">
    /*style dla rezerwacji*/


    <?php
    $sql = "SELECT * FROM `products` WHERE 1";
    $results = $pdo->query($sql);

    foreach($results as $row) {?>


      #color.color<?php echo $row['product_id'] ?> a.ui-state-default {
        background-color: <?php echo $row['product_color'] ?>!important;
        color: #fff;
      }

      .color<?php echo $row['product_id'] ?> a {
        background-color: <?php echo $row['product_color'] ?>!important;
      }



    <?php
    }
     ?>
  </style>


</head>

<body>

  <div id="navigation-container">
    <!-- =============MAIN MENU ============== -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?php echo " http:// " . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>">
        <img src="./images/grafor-kurs-rysunku-i-malarstwa-krakow-logo-black.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul id="menu-menu-glowne" class="nav">
          <li><a title="Główna" href="./index.php">Główna</a></li>
          <li><a title="Nasza metoda" href="./nasza-metoda.php">Nasza metoda</a></li>
          <li><a title="Galeria" href="./galeria.php">Galeria</a></li>
          <li><a title="Ceny i terminy" href="./ceny.php">Ceny i terminy</a></li>
          <li><a title="Rezerwacja" href="./rezerwacje.php">Rezerwacja</a></li>
        </ul>
      </div>
      <!-- </div></div> -->

    </nav>
  </div>

  <a href="./rezerwacje.php">
    <div id="reservation_widget">
      <p>REZERWACJA</p>
      <img src="./images/grafor-kurs-rysunku-i-malarstwa-krakow-arrow.svg" alt="">
    </div>
  </a>
