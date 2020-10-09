<?php
session_start();
require_once ('smartyHeader.php');
include './class/dbh.php';
include './class/displayClass.php';

if(isset($_SESSION['role'])=='admin'){
	
			$conn = new Dbh;
			$db = $conn->connect();
					
			$display = new display;
			$images = $display->displayProduct($db);
			
			$smarty->assign('images', $images);
			
			$smarty->display('adminDisplay.tpl');

		}
				

