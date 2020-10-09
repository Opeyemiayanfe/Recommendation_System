<?php
session_start();
require_once ('smartyHeader.php');
include './class/dbh.php';
include './class/displayClass.php';

if(isset($_SESSION['u_id'])){
	$id = $_SESSION['u_id'];
	$logout = "Logout";
	$smarty->assign('logout', $logout);
}
//display image to users
$conn = new Dbh;
$db = $conn->connect();
					
$display = new display;
$product = $display->displayProduct($db);	

$smarty->assign('product', $product);
$smarty->display('test.tpl');