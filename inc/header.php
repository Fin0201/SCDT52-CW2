<?php
  $filename = basename($_SERVER['PHP_SELF']);
  $default_title = substr($filename, 0, strrpos($filename, "."));
  $default_title = ucwords(str_replace('-', ' ', $default_title));
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" href="./images/favicon.ico">
    <title> <?= $title ?? $default_title ?> </title>
  </head>
  <body class="bg-primary">

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#4daf86;">
  <div class="container-fluid">
    <a href="./index.php" style="margin-right:1.5em;"><img src="./images/logo 2.png" alt="Judith Goss Florists" style="width:auto; height:8vh;"></a>
    <a class="navbar-brand" href="./index.php">Home</a>
    <a class="navbar-brand" href="./search-product.php">Search Products</a>
    <a class="navbar-brand" href="./review.php">Reviews</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

      <li class="nav-item">
          <a class="nav-link" href="./login.php"><i class="bi bi-person-circle" style="font-size: 2rem"></i></a>
      </li>
      </ul>

      
    </div>
  </div>
</nav>