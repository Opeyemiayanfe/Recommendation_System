<?php
session_start();
require_once ('smartyHeader.php');
include './class/dbh.php';
include './class/productClass.php';

if(isset($_SESSION['role'])== 'admin'){
	if (isset($_POST['addProduct'])){
	
		$name = htmlspecialchars($_POST['name']);
		$description = htmlspecialchars($_POST['description']);
		$size = htmlspecialchars($_POST['size']);
		$price = htmlspecialchars($_POST['price']);
		$listprice = htmlspecialchars($_POST['listprice']);
		$category = htmlspecialchars($_POST['category']);
 
        $file = $_FILES['image'];

        $fileName = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileType = $_FILES['image']['type'];
        $fileError = $_FILES['image']['error'];
        $fileSize = $_FILES['image']['size'];
        
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = array('jpg', 'jpeg', 'png');
        
        if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
        if($fileSize < 1000000){
        //give unique name to file
        $fileNewName = uniqid('',true).".".$fileActualExt;

        //destination we want the file to upload to
        $fileDesination = 'uploads/'.$fileNewName;
        //move from file from temporary location to destination created
        move_uploaded_file($fileTmpName, $fileDesination);
		//database connection
		$conn = new Dbh;
		$db = $conn->connect();
          //insert product into database
		  $product = new Product($db,$name, $description, $size, $price, $listprice, $category, $fileNewName);
		  $product->addProduct();
        }
        else
        {
		header('Location:adminLogin.php?imagesizelarge');
        }
        }
        else
        {
			header('Location:adminLogin.php?errorIploadingFile');
        }
        }
        else
        {
          header('Location:adminLogin.php?Filetoolarge');
        }
    }
    else{
        header('Location:adminLogin.php?unauthorizedPage');
    }
	
	
	$smarty->assign('logout', $logout);
	$smarty->display('admin.tpl');
}

else{
	header("Location:index.php?unauthorizedPage");
}