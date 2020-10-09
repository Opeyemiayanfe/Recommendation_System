<?php
include './class/dbh.php';
include './class/loginClass.php';
require_once ('smartyHeader.php');

if(isset($_POST['sublog'])){
	$email = htmlspecialchars(strip_tags($_POST['email']));
	$password = htmlspecialchars(strip_tags($_POST['password']));
	
	//database connection
	$conn = new Dbh();
	$db = $conn->connect();

	//insert into data
	$insert = new loginPage($db,$email, $password);
	
	$insert->Login();
}
else{
	header('Location:login.php?unauthorizedPage');
}

