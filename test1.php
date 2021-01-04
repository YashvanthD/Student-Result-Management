<?php
session_start();
//header('location test2.php');
include('loginS.php');

$name=$_session['usn'];


?>

<!DOCTYPE html>
<html>
<head>
	<title>get</title>
</head>
<body>
	<form method="post" action="test2.php">
		<input type="text" name="name">
		<input type="Submit" name="Submit">
	</form>
<h1>Welcome
<?php
echo $name;
?>
</h1>
</body>
</html>
