<?php
// событие регистрируем нового пользователя.
if (isset($_POST['register_user']) and !empty($_POST['username']) and !empty($_POST['password'])){
$resault=$user -> create($_POST['username'], $_POST['password']);
if ($resault){
	$_SESSION['username']=$_POST['username'];
}
else{
	$begin_register="1";
	Echo "<p align=center>Пользователь с логином <strong>".$_POST['username']."</strong> уже существует.</p>";
}
header('Location: ./');
}
