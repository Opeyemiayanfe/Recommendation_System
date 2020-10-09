<?php
/* Smarty version 3.1.36, created on 2020-10-09 15:56:37
  from 'C:\xampp\htdocs\oopYip\templates\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f806c152c2fb5_68155600',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'eb6f3cacf26e5e32c6f38e65e0d5252d4b9bcc19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\oopYip\\templates\\test.tpl',
      1 => 1602246751,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 1,
),true)) {
function content_5f806c152c2fb5_68155600 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
session_start();
<?php echo '?>';?>

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
<div id="page-container" style=" position: relative;
  min-height: 100vh;">
<nav class="navbar navbar-expand-md navbar-light">
  <a class="navbar-brand" href="#"></a>
  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Wishlist</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cart</a>
      </li>

    </ul>
  </div>
</nav>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="./index.php">Online clothing store</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
				<a class="nav-link" href="./sign.php">
		SignUp/Login
		</a>
		  
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Categories
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Men</a>
        <a class="dropdown-item" href="#">Women</a>
      </div>
    </li>
      
    </ul>
  </div>
</nav>
<div id="content-wrap" style="padding-bottom: 2.5rem;">
<div class="container" style="margin-top:10px">
<div style="text-align:center; margin-top:5px">
<span style="text-decoration:underline"><h3>Available Products</h3></span>
</div>
    <div class="row" style="text-align:center">
	       <div class="col-sm-3">
	   <img src="./uploads/5f7fab9b3be2e5.04068653.png" style="max-width:100%; height:270px">
	   <div style="text-align:center">
	   <h5>Name: <span style="font-size:20px">Dress</span></h5>
	   <h5>Price: <span style="font-size:20px">10000</span></h5>
	   <form method="POST" action="./Recommendation.php">
	   <input type="hidden" name="name" value="Dress">
	   <input type="hidden" name="image" value="5f7fab9b3be2e5.04068653.png">
	   <input type="hidden" name="id" value="5">
	   <input type="hidden" name="size" value="28">
	   <input type="hidden" name="price" value="10000">
	   <input type="hidden" name="category" value="Women">
	    <input type="hidden" name="description" value="Red long gown">
	   <button type="submit" name="buy" style="
		border: none;
		outline: none;
		background: none;
		padding-top:4px;
		cursor: pointer;
		font-size:20px;
		color: #0000EE">View product</button>
	   </form>
	   </div>
	   </div>
	          <div class="col-sm-3">
	   <img src="./uploads/5f7fac64e5cbe6.37254756.png" style="max-width:100%; height:270px">
	   <div style="text-align:center">
	   <h5>Name: <span style="font-size:20px">Dress</span></h5>
	   <h5>Price: <span style="font-size:20px">12000</span></h5>
	   <form method="POST" action="./Recommendation.php">
	   <input type="hidden" name="name" value="Dress">
	   <input type="hidden" name="image" value="5f7fac64e5cbe6.37254756.png">
	   <input type="hidden" name="id" value="6">
	   <input type="hidden" name="size" value="30">
	   <input type="hidden" name="price" value="12000">
	   <input type="hidden" name="category" value="Women">
	    <input type="hidden" name="description" value="Red shoulder less Gown">
	   <button type="submit" name="buy" style="
		border: none;
		outline: none;
		background: none;
		padding-top:4px;
		cursor: pointer;
		font-size:20px;
		color: #0000EE">View product</button>
	   </form>
	   </div>
	   </div>
	          <div class="col-sm-3">
	   <img src="./uploads/5f7fad9c5a3303.04902573.png" style="max-width:100%; height:270px">
	   <div style="text-align:center">
	   <h5>Name: <span style="font-size:20px">Shirt</span></h5>
	   <h5>Price: <span style="font-size:20px">5000</span></h5>
	   <form method="POST" action="./Recommendation.php">
	   <input type="hidden" name="name" value="Shirt">
	   <input type="hidden" name="image" value="5f7fad9c5a3303.04902573.png">
	   <input type="hidden" name="id" value="7">
	   <input type="hidden" name="size" value="Medium">
	   <input type="hidden" name="price" value="5000">
	   <input type="hidden" name="category" value="Men">
	    <input type="hidden" name="description" value="Checkers Long sleeve">
	   <button type="submit" name="buy" style="
		border: none;
		outline: none;
		background: none;
		padding-top:4px;
		cursor: pointer;
		font-size:20px;
		color: #0000EE">View product</button>
	   </form>
	   </div>
	   </div>
	          <div class="col-sm-3">
	   <img src="./uploads/5f7fae37ce1555.51672108.png" style="max-width:100%; height:270px">
	   <div style="text-align:center">
	   <h5>Name: <span style="font-size:20px">Shirt</span></h5>
	   <h5>Price: <span style="font-size:20px">7000</span></h5>
	   <form method="POST" action="./Recommendation.php">
	   <input type="hidden" name="name" value="Shirt">
	   <input type="hidden" name="image" value="5f7fae37ce1555.51672108.png">
	   <input type="hidden" name="id" value="8">
	   <input type="hidden" name="size" value="Large">
	   <input type="hidden" name="price" value="7000">
	   <input type="hidden" name="category" value="Men">
	    <input type="hidden" name="description" value="Sky blue plain Long sleeve">
	   <button type="submit" name="buy" style="
		border: none;
		outline: none;
		background: none;
		padding-top:4px;
		cursor: pointer;
		font-size:20px;
		color: #0000EE">View product</button>
	   </form>
	   </div>
	   </div>
	          <div class="col-sm-3">
	   <img src="./uploads/5f7fae937cbde3.59775609.png" style="max-width:100%; height:270px">
	   <div style="text-align:center">
	   <h5>Name: <span style="font-size:20px">Coat</span></h5>
	   <h5>Price: <span style="font-size:20px">3000</span></h5>
	   <form method="POST" action="./Recommendation.php">
	   <input type="hidden" name="name" value="Coat">
	   <input type="hidden" name="image" value="5f7fae937cbde3.59775609.png">
	   <input type="hidden" name="id" value="9">
	   <input type="hidden" name="size" value="28">
	   <input type="hidden" name="price" value="3000">
	   <input type="hidden" name="category" value="Women">
	    <input type="hidden" name="description" value="Fur Female tiger skin">
	   <button type="submit" name="buy" style="
		border: none;
		outline: none;
		background: none;
		padding-top:4px;
		cursor: pointer;
		font-size:20px;
		color: #0000EE">View product</button>
	   </form>
	   </div>
	   </div>
	          <div class="col-sm-3">
	   <img src="./uploads/5f7fafce862511.86026371.png" style="max-width:100%; height:270px">
	   <div style="text-align:center">
	   <h5>Name: <span style="font-size:20px">Coat</span></h5>
	   <h5>Price: <span style="font-size:20px">4000</span></h5>
	   <form method="POST" action="./Recommendation.php">
	   <input type="hidden" name="name" value="Coat">
	   <input type="hidden" name="image" value="5f7fafce862511.86026371.png">
	   <input type="hidden" name="id" value="10">
	   <input type="hidden" name="size" value="32">
	   <input type="hidden" name="price" value="4000">
	   <input type="hidden" name="category" value="Women">
	    <input type="hidden" name="description" value="Fur brown">
	   <button type="submit" name="buy" style="
		border: none;
		outline: none;
		background: none;
		padding-top:4px;
		cursor: pointer;
		font-size:20px;
		color: #0000EE">View product</button>
	   </form>
	   </div>
	   </div>
	          <div class="col-sm-3">
	   <img src="./uploads/5f7fb1030a6c20.95433208.png" style="max-width:100%; height:270px">
	   <div style="text-align:center">
	   <h5>Name: <span style="font-size:20px">T-shirt</span></h5>
	   <h5>Price: <span style="font-size:20px">2500</span></h5>
	   <form method="POST" action="./Recommendation.php">
	   <input type="hidden" name="name" value="T-shirt">
	   <input type="hidden" name="image" value="5f7fb1030a6c20.95433208.png">
	   <input type="hidden" name="id" value="11">
	   <input type="hidden" name="size" value="Large">
	   <input type="hidden" name="price" value="2500">
	   <input type="hidden" name="category" value="Men">
	    <input type="hidden" name="description" value="Gray Polo">
	   <button type="submit" name="buy" style="
		border: none;
		outline: none;
		background: none;
		padding-top:4px;
		cursor: pointer;
		font-size:20px;
		color: #0000EE">View product</button>
	   </form>
	   </div>
	   </div>
	          <div class="col-sm-3">
	   <img src="./uploads/5f7fb1837184a9.36583836.png" style="max-width:100%; height:270px">
	   <div style="text-align:center">
	   <h5>Name: <span style="font-size:20px">T-shirt</span></h5>
	   <h5>Price: <span style="font-size:20px">3000</span></h5>
	   <form method="POST" action="./Recommendation.php">
	   <input type="hidden" name="name" value="T-shirt">
	   <input type="hidden" name="image" value="5f7fb1837184a9.36583836.png">
	   <input type="hidden" name="id" value="12">
	   <input type="hidden" name="size" value="Medium">
	   <input type="hidden" name="price" value="3000">
	   <input type="hidden" name="category" value="Men">
	    <input type="hidden" name="description" value="Light green Polo">
	   <button type="submit" name="buy" style="
		border: none;
		outline: none;
		background: none;
		padding-top:4px;
		cursor: pointer;
		font-size:20px;
		color: #0000EE">View product</button>
	   </form>
	   </div>
	   </div>
	       </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
	integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	 
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
	  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	  </div>
	   <footer id="footer" style="  position: absolute;
  bottom: 0;
  width: 100%;
  height: 2.5rem;
  text-align:center;
  font-size:22px;
  color:#0000EE;
  margin-top:20px"> Cephas@2020</footer>
	  </div>
</body>

</html><?php }
}
