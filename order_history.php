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

                <ul class="header-links pull-right">
                    <!-- <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li> -->
                    <!-- <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li> -->

                    <?php
                    if (isset($_SESSION['Name'])) {
                    ?>
                      	<li><a href="#"><i></i>Xin chào <?php echo $_SESSION['Name']?></a></li>  ||
							<li><a href="logout.php"><i class="fa fa-user-o"></i> LogOut</a></li>	
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
                    <li class="active"><a href="index.php">Trang chủ</a></li>
                </ul>
                <!-- /NAV -->
             
                <table class="table table-condensed " style="width:100%">
               
                        <!-- Thông tin người đặc -->
                        <tr>
                        <td>
                            <h3><b>Thông tin người đặt hàng</b></h3>
                        </td>
                    </tr>
                    <tr>
                        <td class="cart_menu">
                        Tên khách hàng: <?php echo $_SESSION['Name']?>
                         <br> Địa chỉ nhận hàng: <?php echo $_SESSION['diachi'] ?>
                         <br> Số điện thoại: <?php echo $_SESSION['sdt'] ?>
                     
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
                <H3><b>Thông tin giỏ hàng</b></H3>
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
                            <td>
                                <h3><b>Total</b></h3>
                            </td>
                        </tr>
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