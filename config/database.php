<?php 

define('DB_HOST', 'localhost');
define('DB_USER', 'elizabeth');
define('DB_PASS', 'ibna0534');
define('DB_NAME', 'wics');

// Create Connection

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }
  