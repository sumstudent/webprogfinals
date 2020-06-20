<!DOCTYPE html>
<?php
require_once 'view/header.php';
?>

<h1 class="div"> Register</h1>
  <form action="register-process.php" method="post">
    <div class="form-group my-2">
      <p>Please fill in this form to create an account.</p>
      <hr>
      <h3> Account Details </h3>
      <label for="username"><b>Username</b></label>
      <input type="text" class="form-control" placeholder="Enter Username"
      name="username" id="username" required>

      <label for="email"><b>E-mail</b></label>
      <input type="text" class="form-control" placeholder="Enter Email"
      name="email" id="email">

      <label for="password"><b>Password</b></label>
      <input type="password" class="form-control" placeholder="Enter Password"
      name="password" id="password" minlength="8" required>

      <label for="password-confirm"><b>Repeat Password</b></label>
      <input type="password" class="form-control" placeholder="Repeat Password"
      name="password-confirm" id="password-confirm" minlength="8" required>

      <hr>
      <h3> Profile Details </h3>
      <label for="first-name"><b>First Name</b></label>
      <input type="text" class="form-control" placeholder="Enter First Name"
      name="first-name" id="first-name" required>

      <label for="middle-name"><b>Middle Name (optional)</b></label>
      <input type="text" class="form-control" placeholder="Enter Middle Name"
      name="middle-name" id="middle-name" >

      <label for="last-name"><b>Last Name</b></label>
      <input type="text" class="form-control" placeholder="Enter Last Name"
      name="last-name" id="last-name" required>

      <label for="suffix-name"><b>Suffix's (optional)</b></label>
      <input type="text" class="form-control" placeholder="Enter Suffixes"
      name="suffix-name" id="suffix-name" >
      <hr>

    </div>
  <div>
    <button type="submit" name="sign-up" class="btn btn-primary">Submit</button>
  </div>
  </form>




<?php require_once 'view/footer.php';?>
