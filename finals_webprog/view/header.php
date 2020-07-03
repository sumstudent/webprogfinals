<?php
require_once 'view/bootstrap.php';
session_start();
function isActive($page)
{
  return strpos($_SERVER['REQUEST_URI'], $page);
}

if (@ $_SERVER['HTTPS'] == 'on') {
  header('Location: http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
}
 ?>
<html>
<head>
  <title>Deo Solo</title>
</head>

<body>
  <div class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="navbar-brand"><a href = "index.php"> Deo Solo </div> </a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item <?php if(isActive('index.php')) echo 'active'; ?>">
          <a class = "nav-link" href="register-index.php"> Register </a>
        </li>
        <li class="nav-item <?php if(isActive('contact-us.php')) echo 'active'; ?>">
          <a class = "nav-link" href="login-index.php"> Log-in </a>
        </li>
        <li class="nav-item">
          <a class = "nav-link">
            <?php
            if(isset($_SESSION['username'])){
              echo $_SESSION['username'] ;
            }
            if (!isset($_SESSION['username'])) {
              echo 'Welcome Guest ';
            }
            elseif(isset($_SESSION['username'])){
                echo "<a href=logout.php> Log-out </a>" ;
            }
            ?> </a>
        </li>

      </ul>
    </div>
  </div>

  <div class="container">
    <div class="card my-3">
      <div class="card-body">
