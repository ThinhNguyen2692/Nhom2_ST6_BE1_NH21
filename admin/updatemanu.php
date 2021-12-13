<?php
require "config.php";
require "models/db.php";
require "models/manufacture.php";
$manu = new Manufacture;
if(isset($_POST['submit'])){
  if($_POST['name'] == "")  {
        header('location:manu.php?err=true');
  }else{ 
        $id = $_POST['id'];
        $name = $_POST['name'];
        $manu->updateManu($id,$name);
        header('location:manu.php');
  }
      
}