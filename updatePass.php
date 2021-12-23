<?php
require "config.php";
require "models/db.php";
require "models/user.php";
session_start();
$user = new user;

if(isset($_POST['submit'])){
    if($_POST['pass'] != $_POST['pass1']){
        header('location:updatePassWord.php');
    }else{
        $passwor = md5($_POST['pass']);
        $id = $_SESSION['idkh'];
        $user->updatePass($id, $passwor);
        header('location:index.php');
    }
}