<?php
require "config.php";
require "models/db.php";
require "models/protype.php";
$proty = new Protype;
if(isset($_POST['submit'])){
      if($_POST['name'] == "")  {
        header('location:protypes.php');
  }else{ 
      $type_id=$_POST['id'];
      $type_name = $_POST['name'];
      $proty->updateProtype($type_id,$type_name);
        header('location:protypes.php');
  }
  
}
