<?php
require "config.php";
require "models/db.php";
require "models/product.php";
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
    header('location:index.php');
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
                    <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
                    <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
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

        <body>

    </header>
    <!--/header-->
    <section>
        <section id="cart_items">
            <div class="container">
                <H3><b>Your shopping cart</b></H3>
                <div class="table-responsive cart_info">
                    <table style="width:100%" class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">Item</td>
                                <td class="description">Name</td>
                                <td class="price">Price</td>
                                <td class="quantity">Quantity</td>
                                <td>Delete</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            if (isset($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $value) {
                                    $total += $value['price'];
                            ?>
                                    <tr>

                                        <td class="cart_product">
                                            <a href=""><img style="width: 200px;height:200px;" src="./img/<?php echo $value['image'] ?>" alt="" width=110></a>
                                        </td>
                                        <td class="cart_description">
                                            <h4><a href="detail.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></h4>
                                        </td>
                                        <td class="cart_price">
                                            <p><?php echo number_format($value['price']) ?> VND</p>
                                        </td>
                                        <td class="cart_quantity">
                                            <div class="cart_quantity_button">
                                                <a class="cart_quantity_up" href="changeQuantity.php?truQuantity=<?php echo $value['id'] ?>"> - </a>
                                                <input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $value['quantity'] ?>" autocomplete="off" size="2">
                                                <a class="cart_quantity_down" href="changeQuantity.php?congQuantity=<?php echo $value['id'] ?>"> + </a>
                                            </div>
                                        </td>
                                        <td class="cart_delete">
                                            <a class="cart_quantity_delete" href="deleteCart.php?id=<?php echo $value['id'] ?>"><i class="fa fa-times"></i></a>
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
                            <td>
                                <h3><b>Total</b></h3>
                            </td>
                        </tr>
                        <tr>
                            <?php if (isset($total)) { ?>
                                <td style="text-align:center" class="cart_menu">
                                    <h3><?php echo number_format($total) ?> VND</h3>
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
                    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="?order=ordered">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" name="subject" class="form-control" placeholder="Phone number">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="message" id="message" class="form-control" rows="3" placeholder="Your Message Here"></textarea>
                        </div>
                        <style>
                            .btn-default {
                                background-color: #D10024;
                                color: #fff;
                                font-weight: bold;
                            }

                            .btn-default:hover {
                                background-color: #fff;
                                color: red;
                                font-weight: bold;
                            }
                        </style>
                       
                        <div class="form-group col-md-12">
                            <a class="btn btn-default update" href="index.php">Continue Buying</a>
                            <a class="btn btn-default check_out" href="#">Delete All</a>
                             <!-- btn-primary // viền màu blue-->
                            <!-- <a class="btn btn-default pull-right" href="a.html">Order</a> -->
                            <input type="submit" name="submit" class="btn pull-right btn-default" value="Order">
                            

                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--/#cart_items-->
        <!--features_items-->
        </div>
        </div>
    </section>
    <?php
    include "footer.html"
    ?>