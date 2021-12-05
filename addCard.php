<?php
session_start();



$type_id = isset($_GET['type_id']) ? $_GET['type_id'] : '';



if (isset($_SESSION['cart'])) {
  if (isset($_SESSION['cart'][$type_id])) {
    $_SESSION['cart'][$type_id]['quantity'] += 1;
  }
  else {
    $_SESSION['cart'][$type_id]['quantity'] = 1;
  }
header('location:index.php');exit;
}
else
{
  $_SESSION['cart'][$type_id]['quantity'] = 1;
  header('location:index.php');exit;
}
?>