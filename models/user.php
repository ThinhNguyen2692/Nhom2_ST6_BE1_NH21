<?php

    class User extends Db {
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
        
    }
?>
