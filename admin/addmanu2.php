<?php
require "config.php";
require "models/db.php";
require "models/manufacture.php";
$manu = new Manufacture;
if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $manu->addManu($name);
        header('location:manu.php');
}