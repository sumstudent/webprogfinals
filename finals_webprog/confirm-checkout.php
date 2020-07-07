<!DOCTYPE html>
<?php
require_once 'view/header.php';
?>

<h1 class="div"> Payment Details </h1>
<p>Please Enter your Payment Details</p>
<hr>
<?php
@ $payment     =      $_POST['payment'];
if (isset($payment)) {
  echo '<form action=payment-success.php method=post>';
  if($payment == "cod"){
    echo '
    <div class = form-group my-2>
      <label for =complete-address> <b> Complete Address </b> </label>
      <input type="text" class="form-control" placeholder="Enter Complete Address"
      name="address" id="address" required/>
    </div>';
  }
  //get the address and put it in the db, but also update the db
  if($payment == "dcc") {
    echo '
    <div class = form-group my-2>
      <label for =complete-address> <b> Complete Address </b> </label>
      <input type="text" class="form-control" placeholder="Enter Complete Address"
      name="address" id="address" required/>
    </div>';

    echo '
    <div class = form-group my-2>
      <label for =card-number> <b> Card Number </b> </label>
      <input type="text" class="form-control" placeholder="Enter Card Number"
      name="card-number" id="card-number"/>
    </div>';

    echo '
    <div class = form-group my-2>
      <label for =cvc> <b> CVC </b> </label>
      <input type="text" class="form-control" placeholder="Enter CVC"
      name="card-cvc" id="card-cvc"/>
    </div>';

    echo '
    <div class = form-group my-2>
      <label for =date-expire> <b> Card Expiry </b> </label>
      <input type="text" class="form-control" placeholder="Enter Card Expiry"
      name="date-expire" id="date-expire"/>
    </div>';
  }
}
?>
<div>
  <button type="submit" name ="checkout-details" class="btn btn-primary">Submit Details</button>
</div>
<?php require_once 'view/footer.php';?>
