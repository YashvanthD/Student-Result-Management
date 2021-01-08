<?php
session_start();
$user=$_SESSION['user'];
$dep=$_SESSION['dep'];
$id=$_SESSION['id'];
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




</div>

	<div>
<h1>
  <?php 
	echo '<div style="clear: both;">
        <h3><p style="text-align: left; "float :left>',
			 $user ,
			 '<span style="float :right">'
			 ,$id,'</span></p></h3>
		</div><br>
    <hr>';

          $USN=$_POST['addUSN'];
          $_SESSION['addUSN']=$USN;
       
          $sem=$_POST['sem'];
          $_SESSION['sem']=$sem;


          /*$addsub=$_POST['addsub'];

          $addsubmarks=$_POST['addsubmarks'];
          $_SESSION['addsubmarks']=$addsubmarks;
          $_SESSION['addsub']=$addsub;
*/

?>

<button  onclick="window.location.href='./loginLL.php'"style="float: right;" >Home</button>
<button  onclick="window.location.href='./addmarks.php'"style="float: right;" >Back</button>
<button  onclick="window.location.href='./indexL.php'"style="float: right;" >Logout</button> &nbsp</div>

                   <div>
<?php
 echo '<h3>USN : '.$USN.' Sem : '.$sem.'<h3><br>';
$sql = "select * from semsub where USN='$USN' and sem='$sem' ;";  
$result = mysqli_query($conn, $sql);
$error=mysqli_error($conn);
if ($error) {
  echo "sorry subjects not loading".$error;
  # code...
}
$Nrows=mysqli_num_rows($result);

if($Nrows)
{
//echo $Nrows;
  $i=0;
  $table='
        <form method="POST" action="adding.php">
        <label style="font-size:20px;">Subject </label> 
        <select id="addsub" name="addsub" required>       
        ';

  while ($i!=$Nrows) 
  {
  $row=mysqli_fetch_assoc($result);
    $table.='<option value="'.$row['sub'].'">'.$row['sub'].'</option>';
     $i=$i+1;  
  }


  $table.='</select>  <br />
       <label style="font-size:20px;">Marks </label>
        <input type="number" pattern="^[0-9]" title="Only Number" min="0" step="1" max="100"name="addsubmarks" required>
        <input type="submit" name="submitmarks">
       </form>';
  echo $table;
}
else
{
  echo "Registration Subjects Not Updated".$error;
}


	 ?>
<hr>
 	<hr>

   
</div>



</h1>
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
