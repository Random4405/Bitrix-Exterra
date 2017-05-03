<?php
require 'PHPMailerAutoload.php';

$name=$_POST['name'];                      
$email=$_POST['email'];                    
$message=$_POST['message'];                
$phone=$_POST['phone'];                    
$product=$_POST['product'];                
$time=$_POST['time'];                      
$units=$_POST['units'];                    
$col=$_POST['col'];                        

$path = $_FILES['uploaded_file']['tmp_name']; 
/* $path = "/upload/resize_cache/iblock/aa5/288_288_2/aa5d3a90d472e365686aeed7b60d213c.jpg"; */

$mail = new PHPMailer;

$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress('lazynick7@gmail.com', 'Joe User');     // Add a recipient
$mail->addReplyTo('info@example.com', 'Information');

if (isset($_FILES['uploaded_file']) &&
    $_FILES['uploaded_file']['error'] == UPLOAD_ERR_OK) {
    $mail->AddAttachment($_FILES['uploaded_file']['tmp_name'],
                         $_FILES['uploaded_file']['name']);
}

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Subject';
$mail->Body    = "Имя: $name <br>"."Телефон: $phone <br>"."Email: ".$email." <br>Сообщение: ".$message." <br>Название продукта: ".$product." <br>Время".$time." <br>Количество: ".$col.$units;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo $path;
}
?>
