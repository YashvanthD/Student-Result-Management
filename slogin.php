<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="SRMS"; // Database name 
$tbl_name="student"; // Table name 

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password","SRMS")or die("cannot connect"); 

$USN=$_POST['USN'];

$pass=$_POST['Password'];



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
 $error_msg = '';
$USN=$result['USN'];
$user=$result['NAME'];
$dob=$result['dob'];
$dep=$result['department'];

$email=$result['email'];
$pass=$result['password'];


mysqli_close($conn);

?>

<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="SRMS"; // Database name 
$tbl_name="student"; // Table name 

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password","SRMS")or die("cannot connect"); 

$USN=$_POST['USN'];

$pass=$_POST['Password'];



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
 $error_msg = '';
$USN=$result['USN'];
$user=$result['NAME'];
$dob=$result['dob'];
$dep=$result['department'];

$email=$result['email'];
$pass=$result['password'];


mysqli_close($conn);

?>