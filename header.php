<?php
require "config.php";
require "models/db.php";
require "models/product.php";
$product = new Product;
$getAllProducts = $product->getAllProducts();
require "models/protype.php";
$protype = new Protype;
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Electro - HTML Ecommerce Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	
	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
					<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
					<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
				</ul>

				<ul id="nav" class="header-links pull-right">
					<!-- CSS User and change password -->
					<style>
						#nav li a {
							text-decoration: none;

							display: block;
						}

						#nav>li:hover>a,
						#nav .subnav li:hover a {
							color: red;
						}

						#nav li:hover .subnav {
							display: block;
						}

						#nav .subnav {
							display: none;
							position: absolute;
							top: 100%;
							left: 0;
							background-color: gray;
							box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
						}

						#nav .subnav li a {
							color: black;
							padding: 0 12px;
						}

						#nav li {
							position: relative;
						}

						.user {
							color: #fff;
							text-transform: uppercase;
						}
					</style>
					<?php
					if (isset($_SESSION['Name'])) {
					?>

						<li><a class="user" href="#"><i class="fa fa-user-o"></i>Hello <?php echo $_SESSION['Name'] ?></a>
							<ul class="subnav">
								<li><a href="updateUser.php">User</a></li>
								<li><a href="updatePassWord.php">Change Password</a></li>

							</ul>
						</li> ||
						<li><a href="logout.php"> --> LogOut</a></li>

					<?php
					} else {
					?>
						<li><a href="login/index.php"><i class="fa fa-user-o"></i>LogIn</a></li>
						<li><a href="admin/pages/examples/index.php"><i class="fa fa-user-o"></i>Registration</a></li>

					<?php } ?>
				</ul>
			</div>
		</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="#" class="logo">
								<img src="./img/logo.png" alt="">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-6">
						<div class="header-search">
							<form method="get" action="result.php">
								<select class="input-select" name="searchCol">
									<option value="0">All Categories</option>
									<option value="1">Category 01</option>
									<option value="1">Category 02</option>
								</select>
								<input name="keyword" class="input" placeholder="Search here">
								<button type="submit" class="search-btn">Search</button>
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">

							<!-- Cart -->
							<div>
								<a href="order_history.php">
									<!-- <i class="fa fa-heart-o"></i> -->
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
  <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
</svg>
									
									<br>
									<span>Order history</span>
									<!-- <div class="qty">0</div> -->
								</a>
							</div>
							<div class="dropdown">
								<!-- data-toggle="dropdown" -->
								<a href="cart.php" class="dropdown-toggle" aria-expanded="true">
									<i class="fa fa-shopping-cart"></i>
									<span>Your Cart</span>
									<div class="qty">0</div>
								</a>
								<!-- Wishlist -->

								<!-- /Wishlist -->


								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->

				<ul class="main-nav nav navbar-nav">


					<li class="active"><a href="index.php">Home</a></li>
					<?php
					$getAllProtype = $protype->getAllProtype();
					foreach ($getAllProtype as $value) :
					?>
						<li><a href="products.php?type_id=<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></a></li>
					<?php endforeach; ?>

				</ul>
				<!-- /NAV -->
			</div>
			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->