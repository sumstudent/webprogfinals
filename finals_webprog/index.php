<!DOCTYPE html>
<?php
require_once 'view/header.php';
require_once 'view/bootstrap.php';
?>
<link rel="stylesheet" type="text/css" href="css/carousel-items-size.css">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 img-fluid" src="images/2080ti-founders-ed.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>The New NVDIa RTX 2080ti Founder's Edition</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img-fluid" src="images/intel-i7-9700k.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>The Intel Core i7-9700k</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img-fluid" src="images/ryzen-7-3700x.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>The Ryzen 7 3700x</h5>
        </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




<?php require_once 'view/footer.php';?>
