<?php
/* Smarty version 3.1.36, created on 2020-10-09 14:31:53
  from 'C:\xampp\htdocs\oopYip\templates\Recommendation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f80583937cd60_50082133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e1d09f1288aa4327d2ce6585fdfda62fefd273b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\oopYip\\templates\\Recommendation.tpl',
      1 => 1602246708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f80583937cd60_50082133 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '21180892115f805838bae652_07025775';
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
<div id="page-container" style=" position: relative;
  min-height: 100vh;">
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
		<?php if ((isset($_smarty_tpl->tpl_vars['logout']->value))) {?>
		<form method="POST" action="./logout.php">
		<button type="submit" name="logout" style="
		border: none;
		outline: none;
		background: none;
		padding-top:4px;
		cursor: pointer;
		font-size:20px;
		color: #0000EE"><?php echo $_smarty_tpl->tpl_vars['logout']->value;?>
</button>
		</form>
		<?php } else { ?>
		<a class="nav-link" href="./sign.php" style="font-weight:bold">
		SignUp/Login
		</a>
		 <?php }?> 
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="font-weight:bold">
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
    <div class="row">
	<div class="col-sm-4">
	   <img src="./uploads/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" style="max-width:100%; height:300px">
	   </div>
	   <div class="col-sm-4" style="text-align:center">
	   <h4>Product Name: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h4>
	   <hr>
	     <h4>Price: <?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</h4>
	   <hr>
	   <h4>Size: <?php echo $_smarty_tpl->tpl_vars['size']->value;?>
</h4>
	   <hr>
	   <h4>Description: <?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</h4>
	   <hr>
	   </div>
    </div>
    </div>
	
<div class="container" style="margin-top:10px">
<div style="text-align:center; margin-top:5px">
<span><h4>Related Product</h4></span>
</div>
    <div class="row" style="text-align:center">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['display']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
       <div class="col-sm-4">
	   <img src="./uploads/<?php echo $_smarty_tpl->tpl_vars['image']->value['product_image'];?>
" style="max-width:100%; height:300px">
	   <div style="text-align:center">
	   <h5>Name: <span style="font-size:20px"><?php echo $_smarty_tpl->tpl_vars['image']->value['product_name'];?>
</span></h5>
	   <h5>Price: <span style="font-size:20px"><?php echo $_smarty_tpl->tpl_vars['image']->value['price'];?>
</span></h5>
	   <h5>Description: <span style="font-size:20px"><?php echo $_smarty_tpl->tpl_vars['image']->value['description'];?>
</span></h5>
	   </div>
	   </div>
	   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>

<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
	integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"><?php echo '</script'; ?>
>
	
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"><?php echo '</script'; ?>
>
	 
      <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
	  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"><?php echo '</script'; ?>
>
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
