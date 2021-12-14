
<?php
require "config.php";
require "models/db.php";
require "models/protypes.php";
$protype = new Protypes;
if(isset($_POST['submit'])){
<<<<<<< HEAD
    var_dump($_POST);   
    $type_id = $_POST['type_id'];
    $type_name=$_POST['type_name'];
    $protype->addProtypes($type_id,$type_name); 
    header('location:products.php');
}
=======
    
        $name = $_POST['name'];
        $protype->addprotypes($name);
        header('location:protypes.php');
}
>>>>>>> 497fdf0 (demo14.6)
