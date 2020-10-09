<?php
/* Smarty version 3.1.36, created on 2020-10-07 14:39:46
  from 'C:\xampp\htdocs\oopYip\templates\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f7db712937ad5_71357178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd621e99b409891564b3cd28afcf8f1cf68158ed8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\oopYip\\templates\\signup.tpl',
      1 => 1602074383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7db712937ad5_71357178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11825538305f7db7128ad853_18851736';
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
	
<title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
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
        <a class="nav-link" href="#">SignUp</a>
      </li>
	  
      
    </ul>
  </div>
</nav>

<div class="container" style="margin-top:10px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align:center;"><span><h4>SignUp</h4><span></div>

                <div class="card-body">
                    <form method="POST" action="./signupaction.php">
                       
                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">
                                First Name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" 
								name="firstname" value="" 
                                required autocomplete="firstname" autofocus>
                            </div>
                        </div>
						
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname"
								value="" 
								required autocomplete="lastname" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" name="email" class="form-control" 
								value="" required autocomplete="email">
                            </div>
                        </div>                        

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-4">
                                <button type="submit" class="btn btn-primary" name="signsubmit">
                                   SignUp
                                </button>
                            </div>
                        </div>
						
						<div class="col-sm-8 offset-3" style="margin-top:10px"> 
						<a href="./login.php"><h3>Already a User Login Here!! </h3></a>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 src="./bootstrap/js/bootstrap.min.js" style="text/javascript">  <?php echo '</script'; ?>
>

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
</body>

</html><?php }
}
