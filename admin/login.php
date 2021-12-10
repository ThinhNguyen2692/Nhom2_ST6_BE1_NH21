<?php
session_start();
require "config.php";
require "models/db.php";
require "models/user.php";
$user = new User;
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $passwor = $_POST['password'];
    if($user->checkLogin($username,$passwor)){
        $_SESSION['user'] = $username;
        header('location:products.php');
    }
    
}