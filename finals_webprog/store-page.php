<!DOCTYPE html>
<?php
require_once 'view/header.php';
?>

<div class="container">
  <div class="store-card">
    <h4>Intel Processors</h4>
    <hr>
    <div class="store-items">
      <div class="store-item">
         <h6> Intel Core i7-9700k</h6>
         <a href="item-page.php?item=intel" name="intel">
          <img class="store-item-image" src="images-assets/intel-core-i7-9700k.jpg">
        </a>
      </div>
      <div class="store-item-details">
        <span class="store-item-price">$855.99</span>
      </div>
    </div>
  </div>
  <hr>

  <div class="store-card">
    <h4>AMD Processors</h4>
    <hr>
    <div class="store-items">
      <div class="store-item">
         <h6> Ryzen 7 3700x </h6>
         <a href="item-page.php?item=ryzen" name ="ryzen">
           <img class="store-item-image" src="images-assets/amd-ryzen-7-3700x.jpg">
         </a>
      </div>
      <div class="store-item-details">
        <span class="store-item-price">$855.99</span>
      </div>
    </div>
  </div>
  <hr>

  <div class="store-card">
    <h4>NVIDIA Graphics Cards</h4>
    <hr>
    <div class="store-items">
      <div class="store-item">
         <h6> NVIDIA RTX 2080ti Founder's Edition </h6>
         <a href="item-page.php?item=nvidia" name="nvidia">
           <img class="store-item-image" src="images-assets/2080ti-founders-nvidia-ed.jpg">
         </a>
      </div>
      <div class="store-item-details">
        <span class="store-item-price">$855.99</span>
      </div>
    </div>
  </div>

</div>


<?php require_once 'view/footer.php';?>
