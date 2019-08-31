<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

<?php wp_head() ?>
</head>

<body>


  <nav class="navbar navbar-expand-md navbar-dark bg-primary text-center">
    <div class="container">
      <a class="navbar-brand brand-img" href="#">
        <img src="<?php echo get_template_directory_uri()?>/img/orzel-1.png" width="70" height="70" class="d-inline-block align-top" alt=""> </a>
      <a class="navbar-brand" href="<?php echo home_url() ?>"><b>Kancelaria Notarialna&nbsp;</b>
        <br>Justyna Szawul-Proniewska</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo home_url() ?>">Strona główna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo home_url() ?>/kancelaria-notarialna">Kancelaria Notarialna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo home_url() ?>/czynnosci-notarialne">Czynności notarialne</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo home_url() ?>/oplaty">Opłaty</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo home_url() ?>/kontakt">Kontakt</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
