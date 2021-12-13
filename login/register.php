<?php
require "../config.php";
require "../models/db.php";
require "../models/user.php";
$user = new User;
if(isset($_POST['submit'])){
    if($_POST['pass1'] != $_POST['pass2']){
        header('location:../admin/pages/examples/index.php');
    }else{
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $diachi = $_POST['diachi'];
        $pass = md5($_POST['pass1']);
        $regUser = $user->register($name,$diachi,$email,$phone,$pass);
        header('location:index.php');
    }
    
}