<?php
    // require_once "model/pdo.php";

    function updateProduct($productName,$productDescription,$price,$imageName){
      // echo $productName.' '.$productDescription.' '.$price.' '.$imageName;
      return true; // if data updating is sucessfull else return false
    }

    function getProductByID($productID){
      $sql = "SELECT * FROM PRODUCTS where productID=:productID";
      $stmt = Database::getDB()->prepare($sql);
      $stmt->execute(array(':productID'=>$productID));
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      return $row;
    }

?>