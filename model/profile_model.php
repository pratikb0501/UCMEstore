<?php
    require_once "model/pdo.php";
    function updateUser($email,$password,$firstName,$lastName,$contactNo,$address,$city,$state,$zipCode,$userID){
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
      $sql = "UPDATE USERS SET email=:email,password=:password,firstname=:firstName,lastName=:lastName,phone=:phone,address=:address,city=:city,state=:state,zipcode=:zipcode,isAdmin=:isAdmin WHERE userID=:userID";
      $stmt = Database::getDB()->prepare($sql);
      try{
        $stmt->execute(
          array(
            ':email' => $email,
            ':password' => $hashedPassword,
            ':firstName' => $firstName,
            ':lastName' => $lastName,
            ':phone' => $contactNo,
            ':address' => $address,
            ':city' => $city,
            ':state' => $state,
            ':zipcode' => $zipCode,
            ':isAdmin'=> "no",
            ':userID'=> $userID
          )
        );
        return "Details Updated Sucessfully !";
      }
      catch(PDOException $e){
          print_r($e);
          return "Failed to Update Details. Please Try Again !";
      }
    }
?>



