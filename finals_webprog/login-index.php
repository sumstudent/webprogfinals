<!DOCTYPE html>
<?php
require_once 'view/header.php';
?>

<h1 class="div"> Log In</h1>
  <form action="login-process.php" method="post">
    <div class="form-group my-2">
      <p>Please enter your login credentials</p>
      <hr>
      <label for="username"><b>Username</b></label>
      <input type="text" class="form-control" placeholder="Enter Username"
      name="username" id="username" required/>

      <label for="password"><b>Password</b></label>
      <input type="password" class="form-control" placeholder="Enter Password"
      name="password" id="password" minlength="8" required/>

      <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger">
          <?php echo $_GET['error']; ?>
        </div>
      <?php } ?>

      <hr>
    </div>
  <div>
    <button type="submit" name="sign-up" class="btn btn-primary">Submit</button>
  </div>
  </form>




<?php require_once 'view/footer.php';?>
