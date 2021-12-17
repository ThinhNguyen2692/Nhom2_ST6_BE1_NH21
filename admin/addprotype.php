<?php
require "config.php";
require "models/db.php";
require "models/protypes.php";
$protype = new Protypes;
if(isset($_POST['submit'])){
        
        $type_name = $_POST['name'];
        $protype->addprotypes($type_name);
        header('location:protypes.php');
        
}
