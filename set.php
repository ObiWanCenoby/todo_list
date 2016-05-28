<?php
require_once 'class/class.php';
$list = new Demand_Management();


if (isset($_POST['mode']))
{$id = $_POST['id'];

	if ($_POST['mode']=='1')
		{$mode=0;}
	else {$mode=1;}
	$list->set_exp($mode,$id);
	unset ($id, $mode, $_POST);
	$page=$_GET['page'];
	header("Location: ./?page=$page");
}

if (isset($_POST['dell'])){
	$list->delete($_POST['id']);
	header('Location: ./');
}

if (isset($_POST['add_task']) and !empty($_POST['text'])){
		$list->create($_POST['text']);
		header("Location: ./?page=$page");
}

if (isset($_POST['edit']))
{	$page=$_GET['page'];
	$list->update($_POST['id'], $_POST['text']);
	header("Location: ./?page=$page");
}
