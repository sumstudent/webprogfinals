<?php
require_once ('sql/db-config.php');
try
{
  //checks if the db conn is fine
  $dbError = mysqli_connect_errno();
  if($dbError)
  {
    throw new Exception('<b> Error Could not Connect to the Database.</br> Error Code: </b> ' .$dbError ,1);
  }

  if(isset($_POST['sign-up']))
  {
    //sets the variables
    //account Details//this is just to store into db
    $username =             $_POST['username'];
    $email =                $_POST['email'];
    $password =             $_POST['password'];

    //profile Details//this is just to store into db
    $firstname =            $_POST['firstname'];
    $middlename =           $_POST['middlename'];
    $lastname =             $_POST['lastname'];
    $suffixname =           $_POST['suffixname'];

    $sql_username = "SELECT * FROM users WHERE username = '$username'";
    $res_username = mysqli_query($db, $sql_username);
    if(mysqli_num_rows($res_username)>0)
    {
      echo '<script type = "text/javascript">
        alert("Username Already Taken, please register again");
        </script>';
      echo '<a class = "btn btn-secondary" href = register-index.php> Go Back </a>';
    }
    else
    {
      $hashed = hash('sha512', $password);

      $queryUsers = "INSERT INTO users (username, email, password)
      VALUES (?,?,?)";
      $queryUserProfile = "INSERT INTO profile(firstname,middlename,lastname,suffixname)
      VALUES(?,?,?,?)";

      $stmtInsertUsers = $db->prepare($queryUsers);
      $stmtInsertUsers->bind_param("sss", $username,$email,$hashed);

      $stmtInsertUserProfile = $db->prepare($queryUserProfile);
      $stmtInsertUserProfile->bind_param("ssss", $firstname,$middlename,$lastname,$suffixname);

      $result =   $stmtInsertUsers->execute() && $stmtInsertUserProfile->execute();
      $closeStatements = $stmtInsertUserProfile->close() && $stmtInsertUsers->close();

      if($result && $closeStatements)
      {
        echo 'Account Registered Sucessfully';
      }
      else
      {
        echo 'Error in Excuting Query';
      }
    }
  }
  else
  {
    echo 'Error in Registration, please try again next time';
  }
}
catch (Exception $e)
{
  echo $e->getMessage();
  echo '<script type = "text/javascript">
    alert("Error Could not Connect to the Database; please try again later")
    </script>';
}


 ?>
