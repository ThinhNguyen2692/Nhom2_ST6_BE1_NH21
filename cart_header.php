<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/user.php";
$user = new User;
$product = new Product;
$getAllProducts = $product->getAllProducts();
require "models/protype.php";
$protype = new Protype;
//var_dump($getAllProducts);
session_start();
$id = "";
//var_dump($_SESSION['cart']);
if (isset($_POST['submitCart'])) {
    $id = $_SESSION['id'];
    $quantity = $_POST['quantity']; //2
    foreach ($product->getAllProducts() as $value) {
        if ($value['id'] == $id) {
            if (!isset($_SESSION['cart'][$id])) { //2 cai 2 ngan
                $_SESSION['cart'][$id] = array(
                    'id' => $id,
                    'name' => $value['name'],
                    'image' => $value['image'],
                    'description' => $value['description'],
                    'quantity' => $quantity,
                    'price' => $value['price'] * $quantity
                );
            } else {
                $quantity += $_SESSION['cart'][$id]['quantity'];
                $price = $quantity * $_SESSION['cart'][$id]['price'] / $_SESSION['cart'][$id]['quantity'];
                $_SESSION['cart'][$id]['quantity'] = $quantity;
                $_SESSION['cart'][$id]['price'] = $price;
            }
        }
    }
    header('location:detail.php?id=' . $id . '');
} else  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    foreach ($product->getAllProducts() as $value) {
        if ($value['id'] == $id) {
            if (!isset($_SESSION['cart'][$id])) { //1 cai 1 ngan
                $quantity =  1; //1
                $_SESSION['cart'][$id] = array(
                    'id' => $id,
                    'name' => $value['name'],
                    'image' => $value['image'],
                    'description' => $value['description'],
                    'quantity' => $quantity,
                    'price' => $value['price'] * $quantity
                );
            } else {
                //quantity++ = 2;price = quantity*price*
                $quantity =  $_SESSION['cart'][$id]['quantity']; //2 quantity da tang.
                $_SESSION['cart'][$id]['quantity']++;
                $price = $_SESSION['cart'][$id]['quantity'] * $_SESSION['cart'][$id]['price'] / $quantity;

                $_SESSION['cart'][$id]['price'] = $price;
            }
        }
    }
    header('location:cart.php');
}


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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mobile Shopping</title>
    <!-- doi avt tieu de -->
    <link rel="icon" href="./img/tomato.jpg" type="image/icon type">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

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
                <ul class="header-links pull-right">
						<!-- <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li> -->
						<!-- <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li> -->
                        <?php 
						if(isset($_SESSION['Name'])){
							?>
								<li><a href="#"><i></i>Xin chào <?php echo $_SESSION['Name']?></a></li>  ||
							<li><a href="logout.php"><i class="fa fa-user-o"></i> LogOut</a></li>	
						<?php
					}else{
					?>
						<li><a href="login/index.php"><i class="fa fa-user-o"></i>LogIn</a></li>
                        <li><a href="admin/pages/examples/index.php"><i class="fa fa-user-o"></i>Registration</a></li>
									
						<?php } ?>
                        
					</ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <div class="font">SHOPPING CART</div>

        <style>
            .font {
                height: 100px;
                width: 100%;
                background-color: #000;
                color: #fff;
                font-weight: bold;
                text-align: center;
                line-height: 100px;
                font-size: 30px;

            }
        </style>
        <div class="a" style="  border-bottom: 3px solid #D10024;"> </div>
