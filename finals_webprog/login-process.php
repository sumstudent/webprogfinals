<?php
session_start();
require_once ('sql/db-config.php');
try{
  //checks if the db conn is fine
  $dbError = mysqli_connect_errno();
  if($dbError){
    throw new Exception('<b> Error Could not Connect to the Database.</br> Error Code: </b> ' .$dbError ,1);
  }

  if(isset($_POST['sign-up'])){

    $username     =           $_POST['username'];
    $password     =           $_POST['password'];

    $hashedPassword = hash('sha512', $password);

    $query = 'select * from users where username = ? and password = ?';
    $stmnt = $db->prepare($query);
    $stmnt->bind_param('ss', $username , $hashedPassword);
    $stmnt->execute();
    $result = $stmnt->get_result();
    if($result->fetch_assoc()){
      $_SESSION['username'] = $username;
      header('Location: store-page.php');
    }
    else {
      throw new Exception("Incorrect login details", 0);
    }
  }
}

catch (Exception $e){
  header('Location: login-index.php?error='.$e->getMessage());
}


 ?>
