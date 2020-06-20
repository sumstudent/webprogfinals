<?php
//checks if redirect and passes through the first gate
if(isset($_POST['sign-up'])){
  //sets the variables
  //account Details
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['password-confirm'];

  //profile Details
  $firstname = $_POST['first-name'];
  $middlename = $_POST['middle-name'];
  $lastname = $_POST['last-name'];
  $suffixname = $_POST['suffix-name'];

}


 ?>
