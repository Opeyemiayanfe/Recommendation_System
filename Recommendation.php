<?php
session_start();
require_once ('smartyHeader.php');
include './class/dbh.php';
include './class/recommendationClass.php';

if(isset($_SESSION['u_id'])){
	$id = $_SESSION['u_id'];
	$logout = "Logout";
	$smarty->assign('logout', $logout);
}
if(isset($_POST['buy'])){
$id = htmlspecialchars($_POST['id']);	
$name = htmlspecialchars($_POST['name']);	
$image = htmlspecialchars($_POST['image']);		
$price = htmlspecialchars($_POST['price']);	
$size = htmlspecialchars($_POST['size']);	
$category = htmlspecialchars($_POST['category']);	
$description = htmlspecialchars($_POST['description']);		


$conn = new Dbh;

$db = $conn->connect();

$Recom = new Recommendation;

$display = $Recom->productRecommended($db,$name, $description);
if($display){
	foreach($display as $i=>$v){
	if($v['id']==$id){
		unset($display[$i]);
	}
}
$smarty->assign('image',$image);
$smarty->assign('name',$name);
$smarty->assign('price',$price);
$smarty->assign('size',$size);
$smarty->assign('description',$description);
$smarty->assign('display',$display);
$smarty->display('Recommendation.tpl');
}
else{
	header('Location:index.php');
}

}