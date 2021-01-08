<!DOCTYPE html>
<html>
<head>
	<title>SRMS</title>

<link rel="stylesheet" type="text/css" href="./Lcss.css">
</head>
<body>

	<center>
		<div>
		<h1>Result Management System</h1>
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
  echo '<hr style=" background:green; border: 2px solid green;width: 25%;">';
} else {
  echo '<hr style=" background:red; border: 2px solid red;width: 25%;">' . $conn->error;
}

$conn->close();
	?>
		</div>
		
		<br/>
		<br/>
		<div>
			<h3>Select the User Mood</h3><br>
			<button  onclick="window.location.href='./indexS.php'" value="Student">Student</button>
			<button  onclick="window.location.href='./indexL.php'" value="Student">Lecture</button>
		</div>
		<p id="print"></p>

	</center>

</body>
</html>

