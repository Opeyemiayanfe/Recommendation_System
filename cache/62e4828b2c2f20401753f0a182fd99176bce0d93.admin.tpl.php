<?php
/* Smarty version 3.1.36, created on 2020-10-09 02:40:35
  from 'C:\xampp\htdocs\oopYip\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f7fb1837ebaa7_47898561',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'bc920da7d4d7670f4cd498ab8c4801ba1c063e49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\oopYip\\templates\\admin.tpl',
      1 => 1602102821,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 1,
),true)) {
function content_5f7fb1837ebaa7_47898561 (Smarty_Internal_Template $_smarty_tpl) {
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
        <a class="nav-link" href="./adminDisplay.php">View Product</a>
      </li>
	  
       <li class="nav-item">
        <a class="nav-link" href="./adminlogin.php">Admin Page</a>
      </li>
	  
	 <li class="nav-item">
       <form method="POST" action="./adminLogout.php">
		<button type="submit" name="logout">Logout</button>
		</form>
      </li>
    </ul>
  </div>
</nav>

  <div class="container" style="margin-top:10px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align:center">Add Product</div>

                <div class="card-body">
                    <form method="POST" action="./product.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name" class="">
                                Product Name</label>

                            <div class="">
                                <input id="name" type="text" class="form-control" name="name"
                                required autocomplete="name" autofocus>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="description" class="">
                                Description</label>

                            <div class="">
                                <input id="name" type="text" class="form-control" name="description"
                                required autocomplete="description" autofocus>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="Size" class="">
                               Size</label>

                            <div class="">
                                <input id="description" type="text" class="form-control" 
								name="size" required autocomplete="size" autofocus>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="price" class="">
                                Price</label>

                            <div class="">
                                <input id="price" type="text" class="form-control"
								name="price" 
                                required autocomplete="price" autofocus>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="listprice" class="">
                                List price</label>
                            <div class="">
                                <input id="listprice" type="text" class="form-control" name="listprice" 
                                required autocomplete="listprice" autofocus>
                            </div>
                        </div>
						
						
						 <div class="form-group">
                            <label for="category" class="">
                                Category</label>

                            <div class="">
                                <select class="form-control" name="category" >
								<option value="Men"> Men </option>
								<option value="Women"> Women </option>
								</select>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="image" class="">
                                Image</label>

                            <div class="">
                                <input id="image" type="file" class="form-control"
								name="image" required autocomplete="image" autofocus>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="" style="margin-left: 15px;">
                                <button type="submit" class="btn btn-primary" name="addProduct">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./bootstrap/js/bootstrap.min.js" style="text/javascript">  </script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
	integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	 
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
	  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html><?php }
}
