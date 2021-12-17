<?php
require "config.php";
require "models/db.php";
require "models/protype.php";
$proty = new Protype;
if(isset($_GET['id'])){
    $type_id = $_GET['id'];
    if($proty->checkProtype($type_id) == true ){
        $proty->delProtype($type_id);
        header('location:protypes.php');
    }else{
        header('location:protypes.php?err=false');
    }
    
    
}
    