<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array

    }

    public function getProductById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
        $sql->bind_param("i",$id);
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    } 
    
    public function getTenProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `feature` = 1");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function getSanPhamMoi()
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `products`.`created_at` < NOW() ORDER BY ABS(DATEDIFF(`products`.`created_at`, NOW())) ASC LIMIT 10");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
//Viet phuong thuc lay ra tat ca san pham noi bat
    public function getSanPhamNoiBat()
    {
        $sql = self::$connection->prepare("SELECT * FROM product
        WHERE feature = 1 
        ORDER BY id DESC");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function search($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM products 
        WHERE `name` LIKE '%$keyword%' ");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function search3($keyword, $page, $perPage)
    {
        // T??nh s??? th??? t??? trang b???t ?????u
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM `products`
        WHERE `name` LIKE ? LIMIT ?, ?");
        $keyword="%$keyword%";
        $sql->bind_param("sss", $keyword, $firstLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
  
    public function getProductsByType($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function get3ProductsByType($type_id, $page, $perPage)
    {
        // T??nh s??? th??? t??? trang b???t ?????u
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM products
        WHERE type_id = ? LIMIT ?, ?");
        $sql->bind_param("iii", $type_id, $firstLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    
    

    function paginate($url, $total, $perPage,$page)
    {
    $totalLinks = ceil($total/$perPage);
 	$link ="";
    	for($j=1; $j <= $totalLinks ; $j++)
     	{
             if ($page == $j) {
                $link = $link."<li class='active' > $j </li>";
             }else {
                $link = $link."<li><a href='$url&page=$j'> $j </a></li>";
             }
     	}
     	return $link;
    }
    public function getChitietsp($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id ='$id'");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    
    }
    public function getSanPhamLienQuan($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE manu_id = '$manu_id' LIMIT 0,4");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    
    }
  

}
