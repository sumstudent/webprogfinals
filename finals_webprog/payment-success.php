<!DOCTYPE html>
<?php
require_once 'view/header.php';
require_once ('sql/db-config.php');
?>

<?php
try {
  $dbError = mysqli_connect_errno();
  if($dbError){
    throw new Exception('<b> Error Could not Connect to the Database.</br> Error Code: </b> ' .$dbError ,1);
  }

  if(isset($_POST['checkout-details'])){
    $address    =     $_POST['address'];

    //check is there is already an address bind to the account
    $query = "INSERT INTO addresses (address)
    VALUES (?)";

    $stmnt = $db->prepare($query);
    $stmnt->bind_param("s",$address);

    $result = $stmnt->execute();
    $closestmnt = $stmnt->close();

    if($result && $closestmnt){
      header('Location: index.php');
    }
  }

} catch (Exception $e) {
  echo $e->getMessage();
}

?>




<?php require_once 'view/footer.php';?>
