<meta http-equiv='refresh' content='3; url=https://dllesso.github.io/'>
<meta charset="UTF-8" />
<?php

if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['mail'])) {$mail = $_POST['mail']; if ($mail == '') {unset($mail);}}
if (isset($_POST['body'])) {$body = $_POST['body']; if ($body == '') {unset($body);}}
 
if (isset($name) && isset($mail)&& isset($body)){
 
$address = "dimfornys@rambler.ru";



$mes = "Имя: $name \email: $mail \nТекст: $body";
$send = mail ($address,$name,$mes);


if ($send == 'true')
{echo "Заказ сделан, через 3 секунды Вы будете направлены на главную страницу, где сможете продолжить просмотр.";

 
 echo $post;
}
	
else {echo "Ошибка, сообщение не отправлено!";}
 
}
else
{
echo "Вы заполнили не все поля, вернитесь назад и заполните необходимые поля!";
}
?>
