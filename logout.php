<?php
session_start();
<<<<<<< HEAD
        session_destroy();
        header('location:login/index.php');
=======
    if(isset($_SESSION['sdt'])){
        unset($_SESSION['sdt']);
        header('location:login/index.php');
    }
    else{
        header('location:login/index.php');
    }
>>>>>>> ad481a1 (demo14-12)
