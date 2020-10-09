<?php
/* Smarty version 3.1.36, created on 2020-10-09 02:40:39
  from 'C:\xampp\htdocs\oopYip\templates\adminDisplay.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f7fb18702fd36_35142892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aef51959d017ebb3831dbb9adf6de47e5d6d37de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\oopYip\\templates\\adminDisplay.tpl',
      1 => 1602202573,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 1,
),true)) {
function content_5f7fb18702fd36_35142892 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" style="text/css">
	
<title> Smarty </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="./index.php">Navbar</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
       <li class="nav-item">
        <a class="nav-link" href="./adminlogin.php">Admin Page</a>
      </li>
	  
	 <li class="nav-item">
       <form method="POST" action="./adminLogout.php">
		<button type="submit" name="logout" style="
		border: none;
		outline: none;
		background: none;
		padding-top:4px;
		cursor: pointer;
		font-size:20px;
		color: #0000EE
		"
		>Logout</button>
		</form>
      </li>
    </ul>
  </div>
</nav>

  <div class="container" style="margin-top:10px">
    <div class="row">
	       <div class="col-sm-4">
	   <img src="./uploads/5f7fab9b3be2e5.04068653.png" style="max-width:100%; height:300px">
	   </div>
	          <div class="col-sm-4">
	   <img src="./uploads/5f7fac64e5cbe6.37254756.png" style="max-width:100%; height:300px">
	   </div>
	          <div class="col-sm-4">
	   <img src="./uploads/5f7fad9c5a3303.04902573.png" style="max-width:100%; height:300px">
	   </div>
	          <div class="col-sm-4">
	   <img src="./uploads/5f7fae37ce1555.51672108.png" style="max-width:100%; height:300px">
	   </div>
	          <div class="col-sm-4">
	   <img src="./uploads/5f7fae937cbde3.59775609.png" style="max-width:100%; height:300px">
	   </div>
	          <div class="col-sm-4">
	   <img src="./uploads/5f7fafce862511.86026371.png" style="max-width:100%; height:300px">
	   </div>
	          <div class="col-sm-4">
	   <img src="./uploads/5f7fb1030a6c20.95433208.png" style="max-width:100%; height:300px">
	   </div>
	          <div class="col-sm-4">
	   <img src="./uploads/5f7fb1837184a9.36583836.png" style="max-width:100%; height:300px">
	   </div>
	       </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
	integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	 
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
	  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html><?php }
}
