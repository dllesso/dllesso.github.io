
<meta http-equiv='refresh' content='6; url=https://dllesso.github.io/'>
<meta charset="UTF-8" />
<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['name1'])) {$name1 = $_POST['name1']; if ($name1 == '') {unset($name1);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['phone'])) {$phone = $_POST['phone']; if ($phone == '') {unset($phone);}}
if (isset($_POST['housing'])) {$housing = $_POST['housing']; if ($housing == '') {unset($housing);}}
if (isset($_POST['body'])) {$body = $_POST['body']; if ($body == '') {unset($body);}}
 
if (isset($name) && isset($email) && isset($phone)  && isset($housing) && isset($body)){
 
$address = "dimfornys@rambler.ru";


$mes = "Имя: $name \nОтчество: $name1 \nE-mail: $email \nТелефон: $phone \nПроживание: $housing \nТекст: $body";
$send = mail ($address,$name,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");


if ($send == 'true')
{echo "Сообщение отправлено успешно, через 6 секунд Вы будете направлены на главную страницу, где сможете продолжить просмотр.";}
else {echo "Ошибка, сообщение не отправлено!";}
 
}
else
{
echo "Вы заполнили не все поля, вернитесь назад и заполните необходимые поля!";
}
?>
