<?php

/**
 * 
 * define app constants
 * 
 */
define('root', $_SERVER['DOCUMENT_ROOT'] . '/');
define('temp','/miniproject');
define('views', root . '/miniproject/views/');
define('assets', root . '/miniproject/assets/');
$servername = "localhost";
$username = "root";
$password = "";
$databse = "mydb";
try {
    $conn = new mysqli($servername, $username, $password, $databse);
}
catch (Exception $e) {
    // echo $e;
}


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";