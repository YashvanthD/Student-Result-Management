<?php
session_start();

include 'connecting.php';

$USN=$_POST['USN'];
$_SESSION['USN']=$USN;
$pass=$_POST['Password'];


$sql = "select * from student where USN='$USN' and password='$pass' LIMIT 1";  
$result = mysqli_query($conn, $sql);
//echo mysqli_num_rows($result);
$Nrows=mysqli_num_rows($result);
$result=mysqli_fetch_assoc($result);

if(!$Nrows==1)
{
echo '<h1>Data Not Found</h1>';
										//header('location:./CandidateNotFound.html');
										echo '<button><a href="./createL.php">create</a></button>';
										echo '&nbsp';
										echo '<button><a href="./indexL.php">Back</a></button>';
										$conn.die();
}
else
{
	//header('loginS.php');
}
$error_msg = '';
$USN=$result['USN'];
$user=$result['NAME'];
$dob=$result['dob'];
$dep=$result['department'];
$_SESSION['user']=$user;
$email=$result['email'];
$pass=$result['password'];


mysqli_close($conn);
//header('location:./loginShome.php');

//session_start();
$_session['usn']=$USN;
$_session['USN']=$USN;
?>

<?php
/*
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


*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo $user; ?>
	</title>
	 <link rel="stylesheet" type="text/css" href="./Lcss.css">
<link rel="stylesheet" type="text/css" href="./../css/Lcss.css">
</head>
<body background="green">
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
        <input type="submit" name="button1"
                class="button" value="Button1" /> 
                       

     <button  onclick="window.location.href='./index.html'"style="float: right;" >Logout</button>

  <div>
    <form method="post"> 
        <input type="submit" name="button1"
                class="button" value="Button1" /> 
          
        <input type="submit" name="button2"
                class="button" value="Button2" /> 
    </form> 

   
</div>
 <?php
        if(array_key_exists('button1', $_POST)) { 
            button1(); 
        } 
        else if(array_key_exists('button2', $_POST)) { 
            button2(); 
        } 
        function button1() { 
            include_once('subS.php'); 
        } 
        function button2() { 
            echo "This is Button2 that is selected"; 
        } 
    ?> 
<div>

</body>
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

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}














/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

</style>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}




// Get the modal

var modal = document.getElementById("myModal");


// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


</html>