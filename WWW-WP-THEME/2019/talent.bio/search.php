<?php get_header(); ?>
<?php
//
// // session_start();
$_SESSION['offers_filter']['areas'] = '';
$_SESSION['offers_filter']['forms'] = '';
$_SESSION['offers_filter']['position'] = '';
$_SESSION['offers_filter']['place'] = '';

?>


<!-- DEBUG-SCTION  -->
<?php

//
//
// echo '<P>POST '.print_r($_POST).'</P>';
// echo '<P>GET '.print_r($_GET).'</P>';
// echo '<P>REQUEST '.print_r($_REQUEST).'</P>';
// // echo '<P>SESSION '.print_r($_SESSION['offers_filter']).'</P>';
//
// echo 'SEARCH PAGE TEMPLATE';
 ?>
<!-- DEBUG-SCTION END  -->

<?php if (($_GET['id'] == 90)) {
  // EMPLOYERS SEARCH
 get_template_part('content', 'employers_header');
 get_template_part('content', 'employers_search_results');
}

else {
  // OFFERS SEARCH
  get_template_part('content', 'offers_header');
  get_template_part('content', 'offers_search_results');
}

?>


  <?php get_footer(); ?>
