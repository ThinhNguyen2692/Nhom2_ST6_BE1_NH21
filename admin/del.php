<?php
require "config.php";
require "models/db.php";
require "models/product.php";
$product = new Product();
require "models/protype.php";
require "models/manufacture.php";
$protype = new ProType();
$Manufacture = new Manufacture();

if(isset($_GET['id'])){
    $product->delProduct($_GET['id']);
    header('location:products.php');
}
