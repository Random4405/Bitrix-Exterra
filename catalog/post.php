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



if( $email != 0 ) { $email = "E-mail: $email \n"; }
if( $time != 0 ) { $time = "Время: $time \n"; }
if( $message != 0 ) { $message = "Сообщение: $message \n"; }
if( $product != 0 ) { $product = "Название продукта: $product \n"; }


  $msg="Имя: $name\n"."Телефон: $phone \n".$email.$message.$product.$time;

	print "$msg";

// Отправляем письмо админу

mail("$adminemail", "$date $time Сообщение
от $name", "$msg");

// Выводим сообщение пользователю

// print "<script language='Javascript'>
// alert('work');
// </script>";
exit;
?>
