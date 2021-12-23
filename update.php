<?php
require "config.php";
require "models/db.php";
require "models/user.php";
session_start();
$user = new user;
if(isset($_POST['submit'])){
    $id = $_SESSION['idkh'];
    $name = $_POST['Name'];
    $email = $_POST['email'];
    $sdt = $_POST['sodienthoai'];
    $address = $_POST['Diachi'];
    $user->updateUser($id,$name,$address,$email,$sdt);
    $_SESSION['Name'] = $_POST['Name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['sdt'] = $_POST['sodienthoai'];
    $_SESSION['diachi'] = $_POST['Diachi'];
    header('location:updateUser.php');
}