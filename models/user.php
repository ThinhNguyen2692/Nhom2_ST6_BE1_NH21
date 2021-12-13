<?php

    class User extends Db {
           //Lấy danh sách tất cả user:
    static function getAllUsers() {
        $sql = self::$connection->prepare("SELECT * FROM user");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
        public function checkLogin($sdt,$pass){
            $sql = self::$connection->prepare("SELECT * FROM user where `sodienthoai`=? AND `password`=?");
            $sql->bind_param("ss",$sdt, $pass);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->num_rows;
            if($items == 1){
                return true;
            }
            else {
                return false;
            }
        }
        public function checkid($sdt){
            $sql = self::$connection->prepare("SELECT * FROM user where `sodienthoai`=? ");
            $sql->bind_param("s",$sdt);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items;
        }
        public function register($name,$diachi,$email,$sdt,$pass){
            $role_id = 1;
            $sql = self::$connection->prepare("INSERT INTO `user`(`Name`, `Diachi`, `email`, `sodienthoai`, `role_id`, `password`) VALUES ('$name','$diachi','$email','$sdt','$role_id','$pass')");
            return $sql->execute(); //return an array
        }
    }
?>
