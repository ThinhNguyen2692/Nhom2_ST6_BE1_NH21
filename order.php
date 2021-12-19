<?php 
session_start();
require "config.php";
require "models/db.php";
require "models/order_history.php";
$order = new Order_history;


foreach ($_SESSION['cart'] as $value) {
    $add = $order->addOrder($value['id'],$_SESSION['idkh'],$value['quantity'], $value['price']);
}
header('location:billcomfirm.php');




?>