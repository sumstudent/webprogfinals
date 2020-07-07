<!DOCTYPE html>
<?php
require_once 'view/header.php';
?>

<h1 class="div"> Checkout Details </h1>
  <form action="confirm-checkout.php" method="post">
    <div class="form-group my-2">
      <p>Please Choose a Payment Method</p>
      <hr>
      <label for="payment"><b>Payment Option</b></label>
      <div id ="radioBtnDiv">
        <input type="radio" name="payment" value="cod"> Cash on Delivery
        <input type="radio" name="payment" value="dcc"> Debit/Credit Card
      </div>

      <?php
        @ $payment     =      $_POST['payment'];
        if (isset($_POST['payment-mode'])) {
          echo '<form action=confirm-checkout.php method=post>';

          if($payment == "cod") {
            echo 'cod';
          }

          if($payment == "dcc") {
            echo 'dcc';
          }
        }

       ?>

      <hr>
    </div>
    <div>
      <button type = submit  name = payment-mode class= btn btn-primary>Submit</button>
    </div>
  </form>



<?php require_once 'view/footer.php';?>
