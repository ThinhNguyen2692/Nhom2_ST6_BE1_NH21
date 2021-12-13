<?php
require "config.php";
require "models/db.php";
require "models/manufacture.php";
$manu = new Manufacture;
if(isset($_GET['id'])){
        $id = $_GET['id'];
        if($manu->checkManu($id) == true ){
            $manu->delManu($id);
            header('location:manu.php');
        }else{
            header('location:manu.php?err=false');
        }
        
}