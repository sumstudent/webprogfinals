<?php
  function isActive($page)
  {
    return strpos($_SERVER['REQUEST_URI'], $page);
  }
 ?>
<html>
<head>
  <title>Deo Solo</title>
</head>
<?php
  require_once 'view/bootstrap.php';
?>
<body>
  <div class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div href="index.php" class="navbar-brand"> Deo Solo </div>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item <?php if(isActive('index.php')) echo 'active'; ?>">
          <a class = "nav-link" href="register-index.php"> Register </a>
        </li>
        <li class="nav-item <?php if(isActive('contact-us.php')) echo 'active'; ?>">
          <a class = "nav-link" href="log-in-index.php"> Log-in </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="card my-3">
      <div class="card-body">
