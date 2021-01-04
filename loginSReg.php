<?php
session_start();
if(isset($_session['USN'] && isset($_session['Password'])))
{
  $USN=$_session['USN'];
$pass=$_session['Password'];
echo $USN;

}



//header('location test2.php');
include('test2.php');

$name=$_session['names'];


include('loginS.php');
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="SRMS"; // Database name 
$tbl_name="student"; // Table name 

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password","SRMS")or die("cannot connect"); 


//session_destroy();
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
echo $USN;
?>

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