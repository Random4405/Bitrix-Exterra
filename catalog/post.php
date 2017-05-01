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
$msg=$_POST['message'];
$phone=$_POST['phone'];
$product=$_POST['product'];



// Проверяем валидность e-mail

  $msg="
    <p>Имя: $name</p>
    <p>E-mail: $email</p>
    <p>Сообщение: $msg</p>
    <p>Телефон: $phone</p>
    <p>Название продукта: $product</p>
";



// Отправляем письмо админу

mail("$adminemail", "$date $time Сообщение
от $name", "$msg");

// Выводим сообщение пользователю

// print "<script language='Javascript'>
// alert('work');
// </script>";
exit;
?>
