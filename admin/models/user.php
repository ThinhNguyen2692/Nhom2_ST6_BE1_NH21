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
        
        public function register($name,$diachi,$email,$sdt,$role_id,$pass){
            $sql = self::$connection->prepare("INSERT INTO `user`(`Name`, `Diachi`, `email`, `sodienthoai`, `role_id`, `password`) VALUES ('$name','$diachi','$email','$sdt','$role_id','$pass')");
            return $sql->execute(); //return an array
        }
        public function updateUser($id,$name,$diachi,$email,$sdt,$role_id,$pass){
            $sql = self::$connection->prepare("UPDATE `user` SET`Name`='$name',`Diachi`='$diachi',`email`='$email',`sodienthoai`='$sdt',`role_id`='$role_id',`password`='$pass' WHERE `id` = '$id'");
            return $sql->execute(); //return an array
        }
    }
?>
