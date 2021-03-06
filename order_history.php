<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/order_history.php";
$product = new Product;
$getAllProducts = $product->getAllProducts();
require "models/protype.php";
$protype = new Protype;
$order = new Order_history;
//var_dump($getAllProducts);
session_start();

?>
<?php
if (isset($_SESSION['Name'])) {
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
						<li><a href="login/index.php"><i class="fa fa-user-o"></i>LOGIN</a></li>
						<li><a href="admin/pages/examples/index.php"><i class="fa fa-user-o"></i>REGISTRATION</a></li>

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
                    </ul>
                    <!-- /NAV -->

                    <table class="table table-condensed " style="width:100%">

                        <!-- Th??ng tin ng?????i ?????c -->
                        <tr>
                            <td>
                                <h3><b>User information</b></h3>
                            </td>
                        </tr>
                        <tr>
                            <td class="cart_menu">
                                Name: <?php echo $_SESSION['Name'] ?>
                                <br> Address: <?php echo $_SESSION['diachi'] ?>
                                <br> Phone: <?php echo $_SESSION['sdt'] ?>

                            </td>
                        <tr>

                            <style>
                                #cart_items .cart_info .cart_menu {
                                    background-color: #D10024;
                                    color: #fff;
                                    font-weight: bold;
                                }
                            </style>
                        </tr>
                    </table>
                </div>
                <!-- /responsive-nav -->
            </div>
            <!-- /container -->
        </nav>
        <!-- /NAVIGATION -->
        <section>
            <section id="cart_items">
                <div class="container">
                    <H3><b>History</b></H3>
                    <div class="table-responsive cart_info">
                        <table style="width:100%" class="table table-condensed">
                            <thead>

                                <tr class="cart_menu">
                                    <td class="image">Item</td>
                                    <td class="description">Name</td>
                                    <td class="price">Price</td>
                                    <td class="quantity">Quantity</td>
                                    <td class="quantity">Total</td>

                                </tr>
                            </thead>
                            <tbody>
                                <?php


                                if (isset($_SESSION['idkh'])) {
                                    $getAlllBill = $order->getAlllBill($_SESSION['idkh']);
                                    foreach ($getAlllBill as $value) {
                                ?>
                                        <tr>
                                 
                                            <td class="cart_product">
                                          
                                                <a href=""><img style="width: 150px;height:150px;" src="./img/<?php echo $value['image'] ?>" alt="" width=110></a>
                                            </td>
                                            <td class="cart_description">
                                                <h4><a href="#"><?php echo $value['name'] ?></a></h4>
                                            </td>
                                            <td class="cart_price">
                                                <p><?php echo number_format($value['price']) ?> VND</p>
                                            </td>
                                            
                                            <td class="cart_quantity">
                                                <div class="cart_quantity_button">

                                                    <p> <?php echo $value['sl'] ?> </p>
                                                    <!-- <input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $value['quantity'] ?>" autocomplete="off" size="2"> -->

                                                </div>
                                            </td>
                                            <td class="cart_quantity">
                                                <div class="cart_quantity_button">

                                                    <p><?php echo number_format($value['total']) ?> VND</p>
                                                    <!-- <input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $value['quantity'] ?>" autocomplete="off" size="2"> -->

                                                </div>
                                            </td>


                                            <td class="cart_total">
                                                <p class="cart_total_price"></p>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>


                            </tbody>
                        </table>
                        <table class="table table-condensed " style="width:100%">
                          
                            <tr>
                                <?php if (isset($total)) { ?>
                                    <td style="text-align:center" class="cart_menu">
                                        <h3 style="color: #fff"><?php echo number_format($total) ?> VND</h3>
                                    </td>
                                    <style>
                                        #cart_items .cart_info .cart_menu {
                                            background-color: #D10024;
                                            color: #fff;
                                            font-weight: bold;
                                        }
                                    </style>
                                <?php } ?>
                            </tr>

                        </table>

                    </div>
                </div>
            </section>
            <!--/#cart_items-->
            <!--features_items-->
            </div>
            </div>
        </section>


        <?php include "footer.html" ?>
    <?php
} else {
    header('location:login/index.php');
    ?>

    <?php } ?>