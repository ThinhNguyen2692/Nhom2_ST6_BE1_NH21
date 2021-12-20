<?php

    class Bill extends Db {
           //Lấy danh sách tất cả user:
    static function getAllBill() {
        $sql = self::$connection->prepare("SELECT `bill`.`id`, products.name,products.image, user.Name, `bill`.`total` FROM `bill`,`products`,`user` WHERE `bill`.`idsp` = `products`.`id` and `bill`.`idkh` = `user`.`id` ORDER BY `id`  DESC" );
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array.
    }
}