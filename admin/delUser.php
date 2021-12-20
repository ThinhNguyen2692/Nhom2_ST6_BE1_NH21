<?php
require "config.php";
require "models/db.php";
require "models/user.php";
$user = new user;

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $user->delUser($id);
    header('location:users.php');
}