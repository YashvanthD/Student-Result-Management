<?php 
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS hsm";
if ($conn->query($sql) === TRUE) {
  echo '<hr style="  border: 1px solid green;width: 20%;">';
} else {
  echo '<hr style="  border: 1px solid red;width: 20%;">' . $conn->error;
}

$conn->close();
 ?>