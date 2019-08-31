<?php session_start(); ?>
<?php /* Template Name: Home */?>

<?php get_header(); ?>

<!-- CHECK SET FILTERS  -->
<?php



    if (isset($_POST['areas_value'])) {

      $_SESSION['offers_filter']['areas'] = $_POST['areas_value'];
      $_SESSION['offers_filter']['forms'] = $_POST['forms_value'];
      $_SESSION['offers_filter']['position'] = $_POST['position_value'];
      $_SESSION['offers_filter']['place'] = $_POST['place_value'];


    // echo '<P>POST '.print_r($_POST).'</P>';
    // echo '<P>GET '.print_r($_GET).'</P>';
    // echo '<P>REQUEST '.print_r($_REQUEST).'</P>';
    // echo '<P>SESSION '.print_r($_SESSION['offers_filter']).'</P>';
  }


elseif (!isset($_SESSION['offers_filter']['forms'])) {
  // $_SESSION['offers_filter']['areas'] = '';
  // $_SESSION['offers_filter']['position'] = '';
  // $_SESSION['offers_filter']['areas'] = '';
  reset_session_filter();
  // echo 'reset filter ';
}

 ?>
<!-- CHECK SET FILTERS END -->





<!-- HEADERS FORMS  -->
<?php include('content-offers_header.php') ?>
<!-- HEADERS FORMS  END -->


<!-- DISPLAY RESULTS -->
<?php include('content-offers_loop.php') ?>
<!-- DISPLAY RESULTS END -->

  <?php get_footer(); ?>
