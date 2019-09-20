
<?php
session_start();
include_once ('header.php');?>


    <div id="log_form">
      <h4>Panel administracyjny</h4>
      <form class="" action="zaloguj.php" method="post">
        <label>Podaj login:<br><input type="text" name="login" value=""></label>
        <label>Podaj hasło: <br><input type="password" name="pass" value=""></label>
  <input class="btn btn-info" type="submit" name="submit" value="Zaloguj">
      </form>
      <?php if ($_SESSION['error']) {
        echo $_SESSION['error'];
      } ?>
    </div>



  </body>
</html>
