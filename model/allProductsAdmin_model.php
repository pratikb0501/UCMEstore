<?php
    // require_once "model/pdo.php";

    function getAllProducts(){
      // get all products
    }


    function deleteProduct($productID){
      $query = "DELETE from products WHERE productId = :productID";  // change table name and key
      // delete from table;
    }
?>