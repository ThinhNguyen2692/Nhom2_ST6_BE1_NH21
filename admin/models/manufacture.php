<?php
class Manufacture extends Db {
    public function getAllManu()
    {
        $sql = self::$connection->prepare("SELECT * FROM manufactures");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array

    }
    
    public function getAllSoManu()
    {
        $sql = self::$connection->prepare("SELECT count(manu_id)
        FROM manufactures ");
         $sql->execute(); //return an object
         $items = array();
         $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
         return $items; //return an array
    }
    public function addManu($name){
        
        $sql = self::$connection->prepare("INSERT INTO `manufactures`(`manu_name`) VALUES ('$name')");
        return $sql->execute(); //return an array
    }
    public function updateManu($id,$name){
        $sql = self::$connection->prepare("UPDATE `manufactures` SET `manu_name`='$name' WHERE `manu_id`='$id'");
        return $sql->execute(); //return an array
    }

    public function checkManu($id){
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `products`.`manu_id` = '$id'");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->num_rows;
            if($items == 0){
                return true;
            }
            else {
                return false;
            }
    }
    public function delManu($id){
        $sql = self::$connection->prepare("DELETE FROM `manufactures` WHERE `manu_id` = '$id'");
        return $sql->execute(); //return an array
    }
}
?>