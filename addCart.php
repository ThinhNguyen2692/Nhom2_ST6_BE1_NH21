<?php
  session_start();
  include('products.php');
  $nameProduct = "";
  $product = NULL;
  
  if(isset($_GET['products'])) {
    $nameProduct = $_GET['products'];
    $product = $products[$nameProduct];
    
    if (array_key_exists($nameProduct,$_SESSION['cart'])) {
      $_SESSION['cart'][$nameProduct] += 1;
    } else {
      $_SESSION['cart'][$nameProduct] = 1;
    }
    header('location:addCart.php');

  }

?>