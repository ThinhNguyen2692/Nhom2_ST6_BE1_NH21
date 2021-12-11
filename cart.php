<?php
include "cart_header.php";
?>
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
                                            <a href=""><img style="width: 150px;height:150px;" src="./img/<?php echo $value['image'] ?>" alt="" width=110></a>
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
                        <!-- <div class="form-group col-md-6">
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
                        </div> -->
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
                            <a class="btn pull-right btn-default" href="bill.php">Order</a>
                            <!-- <input type="submit" name="submit" class="btn pull-right btn-default" value="Order"> -->
                            

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