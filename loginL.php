<?php
								session_start();
								$host="localhost"; // Host name 
								$username="root"; // Mysql username 
								$password=""; // Mysql password 
								$db_name="SRMS"; // Database name 
								$tbl_name="lecture"; // Table name 

								// Connect to server and select databse.
								$conn=mysqli_connect("$host", "$username", "$password","SRMS")or die("cannot connect"); 

								$USN=$_POST['USN'];
								$_SESSION['id']=$USN;

								$pass=$_POST['Password'];
								
								
								$sql = "select * from lecture where ID='$USN' LIMIT 1";  
								//echo("Error description: " . $mysqli -> error);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./Lcss.css">
<link rel="stylesheet" type="text/css" href="./css/Lcss.css">
</head>
<body>

<h1>


<?php
								$result = mysqli_query($conn, $sql);
								if(!$result)
								{
										echo '<h1>Data Not Found</h1>';
										//header('location:./CandidateNotFound.html');
										echo '<button><a href="./createL.html">create</a></button>';
										echo '&nbsp';
										echo '<button><a href="./indexL.html">Back</a></button>';
										$conn.die();
								}

?>

</h1>

<?php

									$num_rows=mysqli_num_rows($result);
									//echo mysqli_num_rows($result);
									if(!($num_rows==1))
									{
										echo '<h1>',$USN,"\t User Not Found",'</h1>';
										//echo("Error description: " . $mysqli -> error);
										echo '<button><a href="./createL.php">create</a></button>';
										echo '&nbsp';
										echo '<button><a href="./indexL.php">Back</a></button>';
										$conn.die();
									}
									else{

										$result=mysqli_fetch_assoc($result);
										
										$passget=$result['password'];
											if($pass!=$passget)
											{
											$conn.die('<center><h1 style="color:red">Invalid Password</h1></center>');
											echo '<button><a href="./createL.php">create</a></button>';
											echo '&nbsp';
											echo '<button><a href="./indexL.php">Back</a></button>';
											}
										$user=$result['name'];
										$_SESSION['user']=$user;
										$dep=$result['department'];
										$_SESSION['dep']=$dep;
										$email=$result['email'];
										//$pass=$result['password'];
										header ('location:loginLL.php');
									}
/*
<span>
	<div class="error" style="text-align: center;">
		<?php echo $dep; ?>
	</div>
	</span>
	<div>
<h1>
  <?php 
	echo '<div style="clear: both;">
        <h3><p style="text-align: left; "float :left>',
			 $user ,
			 '<span style="float :right">'
			 ,$USN,'</span></p></h3>
		</div>';
	 ?>
<hr>
</div>


  <div>
  <button onclick="window.location.href='./test.php'">Sub Rigistration</button>
  <button onclick="window.location.href='./test.php'"  >Marks Sheet</button>
  <button  onclick="window.location.href='./test.php'" >Attendence</button>
  <button  onclick="window.location.href='./indexS.html'"style="float: right;" >Logout</button>


</div>
<center>
<div class="card">
  <img src="img.jpg" alt="John" style="width:100%">
  <h1><?php echo $user; ?></h1>
  <p class="title"><?php echo $dep; ?></p>
  <p><?php echo $email; ?></p>
 
</div>
</center>*/

								mysqli_close($conn);
?>


<style type="text/css">
	.alignleft {
	float: left;
}
.alignright {
	float: right;
}

.error { 
    width: 92%;  
    margin: 0px auto;  
    padding: 10px;  
    border: 5px solid #a94442;  
    color: #a94442;  
    background: #f2dede;  
    border-radius: 5px;  
    text-align: left; 
    font-size: 45px;
} 
.success { 
    color: #3c763d;  
    background: #dff0d8;  
    border: 1px solid #3c763d; 
    margin-bottom: 20px; 
} 

li {
  float: left;
}

a {
  display: block;
  padding: 8px;
  background-color: #dddddd;
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
 
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>

</body>
</html>