<?php
    // require_once "model/pdo.php";

    function getAllPlacedOrders(){
      $ordersList = array("productImage"=>"tumbler.png","productName"=>"Tumbler","quantity"=>5,"unitPrice"=>11,"orderedBy"=>"customerEmail@ucmstore.com","dateOrdered"=>"2022-11-02");
      return $ordersList;
    }

?>