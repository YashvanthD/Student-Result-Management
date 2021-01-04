<?php



include 'connecting.php';


    //$sem=$_POST['sem'];
    //$addsub=$_POST['addsub'];
  //$addsub=$_SESSION['sub'];
  //$sem=$_SESSION['sem'];
//  echo $addsub,$sem;


//echo $addsub,$addUSN,$sem;
$sql = "create table IF NOT EXISTS semsub(
USN varchar(15),
sem int,
sub varchar(50));";  
$result = mysqli_query($conn, $sql);
$error=mysqli_error($conn);

//echo mysqli_num_rows($result);

if($error)
{
  echo $error;
}


$sql = "insert into semsub(USN,sem,sub) values('$addUSN','$sem','$addsub');";  
$result = mysqli_query($conn, $sql);
$error=mysqli_error($conn);

//echo mysqli_num_rows($result);
//$Nrows=mysqli_num_rows($result);
if($error)
{
 
  echo '<hr><h1 style="color : red">Student Not found <h2 style="color : black">enter  correct USN</h2><hr><h3>'.$error.'<h3></h1>';
  $conn.die();
}
else{
	echo '<center><h3 style="color:green">'.$addsub.' Subject Addedd Successfully to'.$addUSN.' </h3></center>';
}



mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	 <link rel="stylesheet" type="text/css" href="./Lcss.css">
<link rel="stylesheet" type="text/css" href="./../css/Lcss.css">

</head>

<body>
  <hr>
  <hr>
  <center> 
  
</center>

</body>
</html>


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
<?php 

 ?>