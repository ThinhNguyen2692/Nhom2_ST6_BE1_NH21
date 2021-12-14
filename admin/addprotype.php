<?php
require "config.php";
require "models/db.php";
require "models/protypes.php";
$protypes = new Protypes();
require "models/protypes.php";
require "models/manufacture.php";
$protype = new ProType();
$Manufacture = new Manufacture();
$getAllManu = $Manufacture->getAllManu();
$getAllprotypes = $protype->getAllProtypes();



if(isset($_POST['submit'])){
    var_dump($_POST);   
    $type_id = $_POST['type_id'];
    $type_name=$_POST['type_name']   
    $protype->addProtypes($type_id,$type_name); 
    header('location:products.php');
}
