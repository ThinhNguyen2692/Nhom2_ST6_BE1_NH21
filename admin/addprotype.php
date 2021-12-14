
<?php
require "config.php";
require "models/db.php";
require "models/protypes.php";
$protype = new Protypes;
if(isset($_POST['submit'])){
    
        $name = $_POST['name'];
        $protype->addprotypes($name);
        header('location:protypes.php');
}
