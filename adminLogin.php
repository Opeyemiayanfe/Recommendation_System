<?php
session_start();
require_once ('smartyHeader.php');


if(isset($_SESSION['role'])== 'admin'){
	$smarty->display('admin.tpl');
}

else{
	header("Location:index.php?unauthorizedPage");
}