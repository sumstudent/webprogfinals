<?php
try {
  $db_user ="root";
  $db_pass ="";
  $db_name ="deo_solo_eccommerce";

   // @$db = new PDO('mysql:host=localhost;dbname='.$db_name.';charset=utf8',$db_user,$db_pass);
   // $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  @ $db = new mysqli ('127.0.0.1:3306', $db_user ,$db_pass ,$db_name);

} catch (Exception $e) {
  echo $e->getMessage();
}

 ?>
