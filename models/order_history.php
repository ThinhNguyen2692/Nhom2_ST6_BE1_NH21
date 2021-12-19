<?php
class Order_history extends Db
{
    public function getAlllBill($id_kh)
    {
        $sql = self::$connection->prepare("SELECT bill.id, products.name,products.price,products.image, bill.sl,bill.total FROM `bill` INNER JOIN `products` ON `bill`.`idsp` = `products`.`id` INNER JOIN `user` ON `bill`.`idkh` = `user`.`id` WHERE `bill`.`idkh` = $id_kh");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function addOrder($idsp,$idkh,$sl,$total)
    {
        $sql = self::$connection->prepare("INSERT INTO `bill`(`idsp`, `idkh`, `sl`, `total`) VALUES ('$idsp','$idkh','$sl','$total')");  
        return $sql->execute(); //return an array
    }
    
}