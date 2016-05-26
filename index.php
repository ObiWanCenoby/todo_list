<?php
function get_page_number() {
		if (!empty($_GET['page'])) {
			return $_GET['page'];
		} else {
			return 1;
		}
	}

require_once 'class/class.php';


$list = new Demand_Management();
 
$page = get_page_number();
$pages= $list -> page_count();
$dolist = $list->get_all($page);

require_once 'html/index.php';



?>
