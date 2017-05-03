<?
// ----------------------------конфигурация-------------------------- //

$adminemail="lazynick7@gmail.com";  // e-mail админа
$date=date("d.m.y"); // число.месяц.год
$time=date("H:i"); // часы:минуты:секунды
$backurl="http://exterragroup.ru/";  // На какую страничку переходит после отправки письма

//---------------------------------------------------------------------- //


// Принимаем данные с формы
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$phone=$_POST['phone'];
$product=$_POST['product'];
$time=$_POST['time'];
$units=$_POST['units'];
$col=$_POST['col'];

if (!empty($_FILES['file']['tmp_name'])) 
  { 
    // Закачиваем файл 
    $path = $_FILES['file']['name']; 
    if (copy($_FILES['file']['tmp_name'], $path)) $picture = $path; 
  } 

if( $email != 0 ) { $email = "E-mail: $email \n"; }
if( $time != 0 ) { $time = "Время: $time \n"; }
if( $message != 0 ) { $message = "Сообщение: $message \n"; }
if( $product != 0 ) { $product = "Название продукта: $product \n"; }
if( $col != 0 ) { $col = "Количество: $col \n"; }


  $msg="Имя: $name\n"."Телефон: $phone \n".$email.$message.$product.$time.$col.$units;

	print "$msg";

// Отправляем письмо админу

if(empty($picture))  {
  mail("$adminemail", "$date $time Сообщение от $name", "$msg");
} else {
  send_mail($mail_to, $thm, $msg, $picture);
};


function send_mail($mail_to, $thema, $html, $path) { if ($path) {  
    $fp = fopen($path,"rb");   
    if (!$fp)   
    { print "Cannot open file";   
      exit();   
    }   
    $file = fread($fp, filesize($path));   
    fclose($fp);   
    }  
    $name = "file.ext"; // в этой переменной надо сформировать имя файла (без всякого пути)  
    $EOL = "\r\n"; // ограничитель строк, некоторые почтовые сервера требуют \n - подобрать опытным путём
    $boundary     = "--".md5(uniqid(time()));  // любая строка, которой не будет ниже в потоке данных.  
    $headers    = "MIME-Version: 1.0;$EOL";   
    $headers   .= "Content-Type: multipart/mixed; boundary=\"$boundary\"$EOL";  
    $headers   .= "From: address@server.com";  
      
    $multipart  = "--$boundary$EOL";   
    $multipart .= "Content-Type: text/html; charset=windows-1251$EOL";   
    $multipart .= "Content-Transfer-Encoding: base64$EOL";   
    $multipart .= $EOL; // раздел между заголовками и телом html-части 
    $multipart .= chunk_split(base64_encode($html));   

    $multipart .=  "$EOL--$boundary$EOL";   
    $multipart .= "Content-Type: application/octet-stream; name=\"$name\"$EOL";   
    $multipart .= "Content-Transfer-Encoding: base64$EOL";   
    $multipart .= "Content-Disposition: attachment; filename=\"$name\"$EOL";   
    $multipart .= $EOL; // раздел между заголовками и телом прикрепленного файла 
    $multipart .= chunk_split(base64_encode($file));   

    $multipart .= "$EOL--$boundary--$EOL";   
      
    if(!mail($adminemail, "$date $time Сообщение от $name", $multipart, $headers))   
         {return False;           //если не письмо не отправлено
      }  
    else { //// если письмо отправлено
    return True;  
    }  
  exit;  
  }
// Выводим сообщение пользователю

// print "<script language='Javascript'>
// alert('work');
// </script>";
exit;
?>
