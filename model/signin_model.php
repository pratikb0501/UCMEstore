<?php
  require_once "model/pdo.php";
  function checkLogin($email,$password,$isAdmin){
    $sql = "SELECT * FROM users WHERE email=:email AND isAdmin=:isAdmin;";
    $stmt = Database::getDB()->prepare($sql);
    $checkAdmin = $isAdmin ? 'yes' : 'no';
    $stmt->execute(
      array(
        ':email' => $email,
        ':isAdmin' => $checkAdmin
      )
    );
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if($row){
      if(password_verify($password, $row['password'])){
        return true;
      }else{
        return false;
      }
    }else{
      return false;
    }
  }

  function getUserDetails($email){
    $sql = "SELECT * FROM users WHERE email=:email;";
    $stmt = Database::getDB()->prepare($sql);
    $stmt->execute(
      array(
        ':email' => $email
      )
    );
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
  }

  function getUserDetailsFromID($userID){
    $sql = "SELECT * FROM users WHERE userID=:userID;";
    $stmt = Database::getDB()->prepare($sql);
    $stmt->execute(
      array(
        ':userID' => $userID
      )
    );
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
  }
  
  
  function updateUsersCount($userDetails){
    $visitCount = $userDetails['visitCount']+1;
    $sql = "UPDATE users SET visitCount=:visitCount WHERE userID=:userID";
    $stmt = Database::getDB()->prepare($sql);
    try{
      $stmt->execute(
        array(
          ':visitCount' => $visitCount,
          ':userID'=> $userDetails['userID']
        )
      );
      return true;
    }
    catch(PDOException $e){
        // print_r($e);
        return "Failed to Update Count. Please Try Again !";
    }
  }

?>