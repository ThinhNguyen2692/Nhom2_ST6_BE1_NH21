<?php
require "config.php";
require "models/db.php";
require "models/user.php";
$user = new user;
if(isset($_POST['submit'])){
  if($_POST['id'] == "" || $_POST['name'] == "" ||$_POST['diachi'] == "" ||$_POST['email'] == "" ||$_POST['role'] == "" ||$_POST['pass'] == "" ||$_POST['phone'] == "" ){
        header('location:users.php?err=true');
        
  }else{
        $id =  $_POST['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $diachi = $_POST['diachi'];
        $role = $_POST['role'];
        $pass = md5($_POST['pass']);
        $user->updateUser($id,$name,$diachi,$email,$phone,$role,$pass);
        header('location:users.php');
      
  }
}