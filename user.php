
<?php 
//session_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="SRMS"; // Database name 
$tbl_name="student"; // Table name 

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password","SRMS")or die("cannot connect"); 

$USN=$_POST['USN'];
$_SESSION['USN']=$USN;
//$_session['USN']=$_POST['USN'];
$pass=$_POST['Password'];
//$_session['Password']=$_POST['Password'];
/*
include_once 'test1.php';
echo 'This is User';
$name=$_POST['name'];
$_session['names']=$name;*/

$sql = "select * from student where USN='$USN' and password='$pass' LIMIT 1";  
$result = mysqli_query($conn, $sql);
//echo mysqli_num_rows($result);
$Nrows=mysqli_num_rows($result);
$result=mysqli_fetch_assoc($result);

if(!$Nrows==1)
{
	 $error_msg = 'Invalid username and/or password.';
	$conn.die("Ivalid Password");
}
else
{

	//header('location : loginS.php');
}
	
$error_msg = '';
$USN=$result['USN'];
$user=$result['NAME'];
$dob=$result['dob'];
$dep=$result['department'];
$_SESSION['user']=$user;
$_SESSION['dep']=$dep;
$email=$result['email'];
$pass=$result['password'];
//include_once('loginS.php');

mysqli_close($conn);
//header('location:./loginShome.php');

//session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title> ERROR</title>
</head>
<body>

</body>
</html>

