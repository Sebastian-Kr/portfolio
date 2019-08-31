<?php session_start(); ?>
<?php /* Template Name: POTWIERDZENIE*/?>
<?php get_header(); ?>
<?php get_template_part(content, header);?>

<?php echo get_template_part('content', 'main') ?>
<!-- <?php echo '<br>Sesja stock '.$_SESSION['update_stock']; ?> -->

<?php

if (($_SESSION['update_stock'])== 'active' ) {
  $select_post_id = (int) $_POST['post_id'];
$stock = (int) get_field('progremo_instock', $select_post_id);
$stock2 = $stock - 1;

  $_SESSION['update_stock'] = 'unactive';
  update_field( 'progremo_instock', $stock2, $select_post_id );
}

?>

<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section id="confirm_reservation">
<div class="container"><div class="row">

<div id="person_details" class="col-md-4">
  <h2><?php echo the_field('progremo_head1') ?></h2>
<p><?php echo $_POST['firstname'].' '.$_POST['lastname']?></p>
<p><?php echo 'tel.'.$_POST['phone']?></p>
<p><?php echo $_POST['mail']?></p>
<p class="mt30"><?php echo $_POST['coursename']?></p>
<p>Wybrana data rozpoczęcia kursu:</p>
<p><?php echo $_POST['data']?></p>

</div>


<div class="col-md-4">
  <h2><?php echo the_field('progremo_head2') ?></h2>
<p><?php echo the_field('progremo_desc2') ?></p>

<div>
<form action="https://ssl.dotpay.pl/t2/" method="post" id="dotpay_redirection_form">
<!-- <input name="api_version" value="dev" type="hidden"/> -->
<input name="id" value="215839" type="hidden"/>
<input name="amount" value="<?php echo the_field('prgrm_price', 132) ?>" type="hidden"/>
<input name="currency" value="PLN" type="hidden"/>
<input name="description" value="Zliczka na kurs GRAFOR dla <?php echo $_POST['firstname'].' '.$_POST['lastname']?>" type="hidden"/>
</form>
<p><button type="submit" form="dotpay_redirection_form" value="Submit">
  <img src="<?php echo get_template_directory_uri()?>/img/dp_logo_alpha.png" alt="">
</button></p></div>


</div>


<div class="col-md-4">
  <h2><?php echo the_field('progremo_head3') ?></h2>
<p><?php echo the_field('progremo_desc3') ?></p>
</div>

</div></div>
</section>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>





<?php
function phpBMailer($email, $temat, $tresc, $kopia_do=null)
{
   $naglowek    = 'From: GRAFOR<kontakt@pracowniagrafor.pl>'."\r\n";
   if(!is_null($kopia_do)) $naglowek.='Reply-to: '.$kopia_do."\r\n";

   $naglowek   .= 'Content-type: text/html; charset=utf-8'."\r\n";
  //  $subject = 'Rezerwacja kursu Grafor';
  //  $temat       = '=?iso-8859-2?B?'.base64_encode($subject).'?=';
  $name = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $phone = $_POST['phone'];
  $mail = $_POST['mail'];
  $coursename = $_POST['coursename'];
  $data = $_POST['data'];

   $temat       = 'Rezerwacja kursu pracowniagrafor.pl';
   $tresc = '<br><h3>Rezerwacja kursu pracowniagrafor.pl</h3><h4>Dane rezerwacji</h4><p>Imię: '.$name.'</p>
            <p>Nazwisko: '.$lastname.'</p>
            <p>Telefon: '.$phone.'</p>
            <p>Adres emaiL: '.$mail.'</p>
            <p>Wybrany kurs:<br><br><b> '.$coursename.'</b></p>
            <p>Wybrana data rozpoczęcia kursu: <b>'.$data.'</b><p>';
   $stopka       = '--------------<br><p>Formularz rezerwacji www.pracowniagrafor.pl</p>';
   $tresc       = $tresc.$stopka;

   mail($email, $temat, $tresc, $naglowek);
}
phpBMailer('kontakt@pracowniagrafor.pl', $temat, $tresc, $kopia_do, null);
?>


  <?php get_footer(); ?>
<!-- <?php echo '<br>Sesja stock '.$_SESSION['update_stock']; ?> -->
