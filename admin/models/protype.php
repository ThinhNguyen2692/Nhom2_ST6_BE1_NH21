<?php
class Protype extends Db {
    public function getAllProtype()
    {
        $sql = self::$connection->prepare("SELECT * FROM protypes");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllSotype()
    {
        $sql = self::$connection->prepare("SELECT count(type_id)
        FROM protypes ");
         $sql->execute(); //return an object
         $items = array();
         $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
         return $items; //return an array
    }
    public function addProtype($type_id,$type_name)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `protypes`( `type_id`, `type_name`) 
        VALUES ($type_id,$type_name)");
        return $sql->execute(); //return an array
    }
    public function updateProtype($type_id,$type_name)
    {
       if($type_id==null){
        $sql = self::$connection->prepare("UPDATE `protypes` SET `type_id`='$type_id',`type_name`='$type_name' WHERE 1 ");     
        return $sql->execute(); //return an array
       } else {
            $sql = self::$connection->prepare("UPDATE `protypes` SET `type_id`='$type_id',`type_name`='$type_name' WHERE 1 ");
            return $sql->execute(); //return an array
       }
    }
    public function delProduct($type_id)
    {
        $sql = self::$connection->prepare("DELETE FROM `protypes` WHERE `type_id`= ?");
         $sql->bind_param('i',$type_id); //return an objec
         return $sql->execute(); //return an array
    }
}
?>