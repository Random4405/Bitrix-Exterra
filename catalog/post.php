<?php
require 'PHPMailerAutoload.php';

$form_name=$_POST['form_name'];
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$phone=$_POST['phone'];
$product=$_POST['product'];
$time=$_POST['time'];
$units=$_POST['units'];
$col=$_POST['col'];

if (mb_strlen($_POST['name']) == 0) {$name='';} else {$name='<br>Имя: '.$_POST['name'];}
if (mb_strlen($_POST['email']) == 0) {$email='';} else {$email='<br>E-mail: '.$_POST['email'];}
if (mb_strlen($_POST['message']) == 0) {$message='';} else {$message='<br>Сообщение: '.$_POST['message'];}
if (mb_strlen($_POST['phone']) == 0) {$phone='';} else {$phone='<br>Телефон: '.$_POST['phone'];}
if (mb_strlen($_POST['product']) == 0) {$product='';} else {$product='<br>Продукт: '.$_POST['product'];}
if (mb_strlen($_POST['time']) == 0) {$time='';} else {$time='<br>Время: '.$_POST['time'];}
if (mb_strlen($_POST['units']) == 0) {$units='';} else {$units='<br>Единицы: '.$_POST['units'];}
if (mb_strlen($_POST['col']) == 0) {$col='';} else {$col='<br>Количество: '.$_POST['col'];}


$path = $_FILES['uploaded_file']['tmp_name']; 
/* $path = "/upload/resize_cache/iblock/aa5/288_288_2/aa5d3a90d472e365686aeed7b60d213c.jpg"; */

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';

if ($form_name == 'call_form') {
  $mail->setFrom('from@example.com', 'Заказать обратный звонок');
  $mail->Subject = 'Заказать обратный звонок';
} else {
  $mail->setFrom('from@example.com', 'Заказ с сайта');
  $mail->Subject = 'Заказ с сайта';
}

/* $mail->addAddress('lazynick7@gmail.com', 'Joe User');     // Add a recipient */
/* $mail->addAddress('fenixitgroup@gmail.com', 'FenixIT');     // Add a recipient */
$mail->addAddress('info@exterragroup.ru', 'Exterra');     // Add a recipient
$mail->addAddress('sales@exterragroup.ru', 'Exterra');     // Add a recipient
$mail->addAddress('san@exterragroup.ru', 'Exterra');     // Add a recipient

if (isset($_FILES['uploaded_file']) &&
    $_FILES['uploaded_file']['error'] == UPLOAD_ERR_OK) {
    $mail->AddAttachment($_FILES['uploaded_file']['tmp_name'],
                         $_FILES['uploaded_file']['name']);
}

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Body    = "$name"."$email"."$message"."$phone"."$product"."$time"."$units"."$col";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo $path;
}
?>
