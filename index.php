<?php
session_start();

// пользователь вышел...
if (isset($_POST['quit'])){
	unset ($_SESSION['username']);
	session_destroy();
header('Location: ./');
}

require_once 'class/class_users.php';
require_once 'class/class.php';

function get_page_number() {
		if (!empty($_GET['page'])) {
			return $_GET['page'];
		} else {
			return 1;
		}
	}

$user = new User();
require_once 'class/register.php';

$list = new Demand_Management();
 
$page = get_page_number();
$pages= $list -> page_count();
$dolist = $list->get_all($page);


require_once './html/index.php';

?>