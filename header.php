<?php session_start(); ?>
<?php include 'config/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Women In Computer Science</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="index.css"/>
    <link rel="stylesheet" href="main.css" />
    <!-- This is important to Load in the nav bar-->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  </head>
  <body>
    <!-- Hero Section -->
<section class=" text-center">
    <!--Navigation bar-->
    <div id="nav-placeholder">

    </div>

    <nav>
        <div class="container">
            <h1>Wics</h1>
            <div class="menu">
                <a href="#" class="is-active">Home</a>
                <a href="#">About</a>
                <a href="#">Projects</a>
                <a href="#">Contact</a>
                <?php
                if(isset($_SESSION['username'])){
                  echo '<a href="#">Welcome' . $_SESSION["username"]. '</a>';
                }
                ?>
            </div>
        </div>
    </nav>
    <!--end of Navigation bar-->

    <div class="placeHolder">
      <!-- this to hold place for the nav bar to not cover the main content-->
    </div>
    <div>