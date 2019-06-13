<?php
require "db.php";

$data = $_POST;
if(isset($data['du_signup']))
{
	
	$errors = array(); 
	//проверка на незаполнение формы
	if(trim($data['login']) == '')
	{
		$errors[] = 'Введите логин!';
	} 
	if(trim($data['email']) == '')
	{
		$errors[] = 'Введите email!';
	} 
	if($data['password'] == '')
	{
		$errors[] = 'Введите password!';
	} 
	if($data['password2'] != $data['password'])
	{
		$errors[] = 'введено неверно';
	} 
    
	if(R::count('users', "login = ?" , array($data['login']))>0)
	{
		$errors[] = 'login занят';
	} 
	if(R::count('users', "email = ?" , array($data['email']))>0)
	{
		$errors[] = 'email занят';
	} 
	
    if(empty($errors))
	{
	// все хорошо регистрируем	
	//команды смотрим на сайте БД readben.php после введения "шорткодов" таблица в БД создается автоматически 
	$user = R::dispense('users');
	$user->login = $data['login'];
	$user->email = $data['email'];
	$user->password = password_hash($data['password'], PASSWORD_DEFAULT); //кодировка пароля
	R::store($user);
	echo'<div style = "color: green;">Успешная регистрация пройдите по ссылке авторизация </div> 
	</div></hr>';
	}else
	{//выводим первый элемент массива ошибок
		echo'<div style = "color: red;">'.array_shift($errors).'</div> 
	</div></hr>';
	}
}


?>
<a href="login.php">авторизация</a>
<html>
<head>
   <meta charset = "utf-8">
   <link rel="stylesheet" href="style.css"/>
   <title></title>
</head>
<body>
<center>
<form action="/signup.php" method = "POST">
<p>
<p><strong>Ваш логин</strong>:</p>
<input type = "text" name = "login" value ="<?php echo @$data['login']; ?>">
</p>
<p>
<p><strong>Ваш email</strong>:</p>
<input type = "email" name = "email" value ="<?php echo @$data['email']; ?>" >
</p>
<p>
<p><strong>Ваш пароль</strong>:</p>
<input type = "password" name = "password" value ="<?php echo @$data['password']; ?>">
</p>
<p>
<p><strong>подтвердите Ваш пароль</strong>:</p>
<input type = "password" name = "password2" value ="<?php echo @$data['password']; ?>">
</p>
<p>
<button type="submit" name = "du_signup">Зарегиться</button>
</p>
</form>
<center/>
<body/>
<html/>
