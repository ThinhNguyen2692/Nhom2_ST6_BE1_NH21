<?php
   session_start();
<<<<<<< HEAD
   if(!isset($_SESSION['idad'])){
=======
   if(!isset($_SESSION['id'])){
>>>>>>> ad481a1 (demo14-12)
     header('location:../login/index.php');
   }
    class Db
    {
        public static $connection;
        public function __construct()
        {
            if (!self::$connection) {
            self::$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME,PORT);
            self::$connection->set_charset(DB_CHARSET);
            }   
            return self::$connection;
        }
    }

?>
