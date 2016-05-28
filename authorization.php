<?php

// показываем форму авторизации
if (!isset($_SESSION['username']) and !isset($_POST['login_in']) and !isset($_POST['new_user']) and !isset($begin_register)){
	require_once './html/log_pass.php';
}

// событие новый пользователь.
if (isset($_POST['new_user']) or isset($begin_register)){
	require_once './html/register_user.php';
}

// пользователь залогинен
if (isset($_SESSION['username'])){
	require_once 'html/login_ok.php';
}

// авторизируем пользователя.
if (isset($_POST['username']) && isset($_POST['password']) and isset($_POST['login_in'])) {
		$res = $user->get($_POST['username'], $_POST['password']);
		if ($res['username']){
			$_SESSION['username'] = $res['username'];
			require_once 'html/login_ok.php';
		}
		else {
			require_once './html/log_pass.php';
		}
	} 

// пользователь вышел...
if (isset($_POST['quit'])){
	unset ($_SESSION['username']);
	session_destroy();
	require_once './html/log_pass.php';
}