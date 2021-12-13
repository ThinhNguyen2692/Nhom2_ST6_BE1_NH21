<?php
require "config.php";
require "models/db.php";
require "models/user.php";
$user = new user;
if(isset($_POST['submit'])){
   
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $diachi = $_POST['diachi'];
        $role = $_POST['role'];
        $pass = md5($_POST['pass']);
        $regUser = $user->register($name,$diachi,$email,$phone,$role,$pass);
        header('location:users.php');
}