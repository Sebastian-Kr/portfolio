<?php ob_start(); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Wiadomość</title>
</head>

<body>


<?php

if($_POST['imie_i_nazwisko'] != '' && $_POST['email'] != '' && $_POST['wiadomosc'] != '')
{
	
	if($_POST['code'] != '' && $_POST['code'] == $_POST['g_code'])
	{
			
				$to = "kontakt@brokreacja.pl";
				$subject = "brokreacja.pl";
				$message = 'Imię i nazwisko: ' . $_POST['imie_i_nazwisko'] . '<br>' . 
                                           'E-mail: ' . $_POST['email'] . '<br><br>' .   
                                           nl2br($_POST['wiadomosc']);
				$from = $_POST['email'];
				$headers  = "MIME-Version: 1.0\n"; 
				$headers .= "Content-type: text/html; charset=utf-8\n"; 
				$headers .= "Content-Transfer-Encoding: 8bit\n";
				$headers .= "From:" . $from;
				
				
				if(mail($to,$subject,$message,$headers))
				{
                                    header("Location: https://brokreacja.pl/?message=1");
				}
				else
				{
                                    header("Location: https://brokreacja.pl/?message=0");
				}
	}
	
	else
	{
            header("Location: https://brokreacja.pl/?message=0");
	}

	

}

else
{
    header("Location: https://brokreacja.pl/?message=0");
}
?>


</body>
</html>

<?php ob_end_flush(); ?>