<?php
include './class/dbh.php';
include './class/insert.php';
require_once ('smartyHeader.php');

if(isset($_POST['signsubmit'])){
	$first = htmlspecialchars(strip_tags($_POST['firstname']));
	$last = htmlspecialchars(strip_tags($_POST['lastname']));
	$email = htmlspecialchars(strip_tags($_POST['email']));
	$password = htmlspecialchars(strip_tags($_POST['password']));
	
	//database connection
	$conn = new Dbh();
	$db = $conn->connect();

	//insert into data
	$insert = new insert($db, $first, $last, $email, $password);
	
	$insert->insertData();
}
else{
	header('Location:sign.php?unauthorizedPage');
}

