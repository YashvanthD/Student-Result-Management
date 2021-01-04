<?php


$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="SRMS"; // Database name 
$tbl_name="lecture"; // Table name 

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 



$USN=$_POST['ID'];
$user=$_POST['name'];
$dep=$_POST['Department'];
$email=$_POST['email'];
$pass=$_POST['password'];

//printf("%s \t%s \t%s \t%s \t%s \t",$USN,$user,$dep,$email,$pass);
$sql = "create table IF NOT EXISTS lecture(
										id varchar(15) primary key,
										name varchar(35),
										department varchar(50),
										email varchar(50),
										password varchar(50));"; 
							    $result = mysqli_query($conn, $sql);
								$error=mysqli_error($conn);
								if($error)
								{
									echo  $error;
								}
								
$sql = "select * from lecture where ID='$USN' and password='$pass' LIMIT 1";  
$result = mysqli_query($conn, $sql);
//echo "\n",mysqli_num_rows($result);
$Nrows=mysqli_num_rows($result);
//echo "\n",mysqli_error_list($conn);

if($Nrows==1)
{
	printf("Lecturer Already Existed in database\n");
}
else
{
$sql1 = "insert into lecture (ID,name,department,email,password) values ('$USN','$user','$dep','$email','$pass')";  
	$res = mysqli_query($conn, $sql1);
	//print_r(mysqli_error_list($conn));
	$sql1 = "select * from lecture where ID='$USN' and password='$pass' LIMIT 1";  
	$res = mysqli_query($conn, $sql1);

	//echo mysqli_num_rows($res);
	$rows=mysqli_num_rows($res);
	$result=mysqli_fetch_assoc($res);

	if($rows)
	{
		echo "Sucessfully added";
		$USN=$result['id'];
		$user=$result['name'];

		$dep=$result['department'];

		$email=$result['email'];
	}
	else
	{	
	printf("Error\n");

	
	}
}
mysqli_close($conn);

?>


<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="./Lcss.css">
<link rel="stylesheet" type="text/css" href="./css/Lcss.css">
	<title>registered</title>

</head>
<body>
	<h1>Welcome to <?php echo $user ?></h1>

	 <button  onclick="window.location.href='./indexL.html'" >Back</button>



</body>
</html>