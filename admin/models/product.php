<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM products,manufactures,protypes
        WHERE products.manu_id = manufactures.manu_id
        AND products.type_id = protypes.type_id ORDER BY `id`  DESC");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllDemsanpham()
    {
        $sql = self::$connection->prepare("SELECT count(id)
        FROM products ");
         $sql->execute(); //return an object
         $items = array();
         $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
         return $items; //return an array
    }
    public function addProduct($name,$manu_id,$type_id,$price,$image,$desc,$feature,$date)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `products`(`name`, `manu_id`, `type_id`, `price`, `image`, `description`,`feature`,`created_at`) 
        VALUES ('$name',$manu_id,$type_id,$price,'$image','$desc', $feature,'$date')");
       //$sql->bind_param("siiissii",$name,$manu_id,$type_id,$price,$image,$desc,$feature,$date); 
        var_dump("INSERT 
        INTO `products`(`name`, `manu_id`, `type_id`, `price`, `image`, `description`) 
        VALUES ('$name',$manu_id,$type_id,$price,'$image','$desc', $feature,'$date')");
        return $sql->execute(); //return an array
    }

    public function updateProduct($id,$name,$price,$desc,$image,$feature,$date)
    {
       if($image == null){
        $sql = self::$connection->prepare("UPDATE `products`
        SET `name`='$name',`price`='$price', `description`='$desc',`feature`='$feature',`created_at`='$date'
        WHERE `id`='$id'");
       //$sql->bind_param("siiissii",$name,$manu_id,$type_id,$price,$image,$desc,$feature,$date); 
       
        return $sql->execute(); //return an array
       } else {
            $sql = self::$connection->prepare("UPDATE `products`
            SET `name` = '$name',`price`='$price',`image` = '$image', `description`='$desc',`feature`='$feature',`created_at`='$date'
            WHERE `id`='$id'");
           //$sql->bind_param("siiissii",$name,$manu_id,$type_id,$price,$image,$desc,$feature,$date); 
           
            return $sql->execute(); //return an array
       }
    }

    public function delProduct($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `products` WHERE `id`= ?");
         $sql->bind_param('i',$id); //return an objec
         return $sql->execute(); //return an array
    }

}