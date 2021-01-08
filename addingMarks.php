<?php
session_start();
$user=$_SESSION['user'];
$dep=$_SESSION['dep'];
$USN=$_SESSION['id'];



include 'connecting.php';
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title><?php echo $user;?></title>
 </head>
 	 <link rel="stylesheet" type="text/css" href="./Lcss.css">
<link rel="stylesheet" type="text/css" href="./../css/Lcss.css">
 <body>

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

<button  onclick="window.location.href='./indexL.php'"style="float: right;" >Logout</button> </div>

                   <div>


<?php 
			$addUSN=$_POST['addUSN'];
        	$addsub=$_POST['addsub'];
        	$addsubmarks=$_POST['addsubmarks'];

 ?>

</div>
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