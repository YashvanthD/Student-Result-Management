<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="Lcss.css">
<body>

</body>
</html>
<?php


$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="SRMS"; // Database name 
$tbl_name="student"; // Table name 

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
echo "Connected";


$USN=$_POST['USN'];
$user=$_POST['name'];
$gen=$_POST['gender'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$addr=$_POST['Address'];
$dep=$_POST['Department'];
$sem=$_POST['Sem'];
$email=$_POST['email'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];

$sql = "
create table IF NOT EXISTS student(
USN varchar(15) primary key,
NAME varchar(50),
ADDRESS varchar(50),
PHONE varchar(15),
GENDER varchar(7),
dob date,
department varchar(50),
email varchar(50),
password varchar(50));";
$result = mysqli_query($conn, $sql);
$error=mysqli_error($conn);
								if($error)
								{
									echo  $error;
								}


$sql = "select * from student where USN='$USN' and password='$pass' LIMIT 1";  
$result = mysqli_query($conn, $sql);
//print_r(mysqli_error_list($conn));
//echo mysqli_num_rows($result);
$Nrows=mysqli_num_rows($result);
//print_r(mysqli_error_list($conn));
if($Nrows==1)
{
	printf("Student Already Existed in database\n");
}
else
{
$sql1 = "insert into student(USN,NAME,ADDRESS,PHONE,GENDER,dob,department,email,password) 
			        values('$USN','$user','$addr','$phone','$gen','$dob','$dep','$email','$pass')";  
	$res = mysqli_query($conn, $sql1);
	print_r(mysqli_error_list($conn));
$sql1 = "select * from student where USN='$USN' and password='$pass' LIMIT 1";  
$res = mysqli_query($conn, $sql1);
	echo mysqli_num_rows($res);
	$rows=mysqli_num_rows($res);
	$res=mysqli_fetch_assoc($res);

	if($rows)
	{
		//$msg="Success Welcome to ";
		//$msg.append("$res['name']");
		$msg=@file_get_contents("Success Welcome to " .$res['name']);
	}
	else
	{	
	$msg="EROR ";
	
	}
}
mysqli_close($conn);

?>
<h1>
<button><a href="./indexS.php">back</a></button>
<br>
<button><a href="./createS.php">Cback</a></button>
</h1>	
