<?php
require "config.php";
require "models/db.php";
require "models/product.php";
$product = new Product();
require "models/protype.php";
require "models/manufacture.php";
$protype = new ProType();
$Manufacture = new Manufacture();
$getAllManu = $Manufacture->getAllManu();
$getAllprotype = $protype->getAllProtype();

if(isset($_POST['submit'])){
    var_dump($_POST);
    $name = $_POST['name'];
    $manu_id = $_POST['manu'];
    $type_id = $_POST['type'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $feature = $_POST['feature'];
    $date = $_POST['date'];
    $image = $_FILES['image']['name'];
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $product->addProduct($name,$manu_id,$type_id,$price,$image,$desc,$feature,$date);
    header('location:products.php');
}