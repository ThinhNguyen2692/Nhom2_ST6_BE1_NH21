<?php
session_start();
require "../config.php";
require "../models/db.php";
require "../models/user.php";
$user = new User;
if(isset($_POST['submit'])){
    $sdt = $_POST['sdt'];
    $passwor = md5($_POST['password']);
    if($user->checkLogin($sdt,$passwor)){
      $getUser =  $user->checkid($sdt);
      foreach ($getUser as $value) {
        $_SESSION['id'] = $value['role_id'];
        $_SESSION['idkh'] = $value['id'];
        $_SESSION['sdt'] = $sdt;
      }
      if($_SESSION['id'] == 0){
        header('location:../admin/index.php');
      }else  header('location:../index.php');
    }else{
        header('location:index.php');
    }
}
