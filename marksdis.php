<?php
//session_start();

echo '<h1>ALL is well Marks is Show</h1>';

  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>Marks Sheet</title>
  </head>
  <body>
  	<form method="POST"> 	<label id="sem">Select Semester: </label>       
        <select id="Sem" name="Sem" required>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
       </select>        <br/>
       <input type="submit" name="submit">
       </form>
 <?php $host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="SRMS"; // Database name 
$tbl_name="student"; // Table name 


$conn=mysqli_connect("$host", "$username", "$password","SRMS")or die("cannot connect"); 

$USN=$_SESSION['USN'];
$sem=$_POST['sem'];

//$sql = "select * from student where USN='$USN' and sem='$sem' LIMIT 1";  
//$result = mysqli_query($conn, $sql);
//echo mysqli_num_rows($result);
//$Nrows=mysqli_num_rows($result);
//$result=mysqli_fetch_assoc($result);

//if(!$Nrows==1)
{
echo "sem";
}




mysqli_close($conn);
 ?>
  	<table>
  		<tr><th> Subject </th><th> Credits </th><th>Marks Obtained</th></tr>
  		<tr><td><?php //echo '$result['sub1']'; 
  					 echo 'sub1';?></td><td>1</td><td>1</td></tr>
  		<tr><td><?php //echo '$result['sub1']'; 
  					 echo 'sub1';?></td><td>1</td><td>1</td></tr>
  		<tr><td><?php //echo '$result['sub1']'; 
  					 echo 'sub1';?></td><td>1</td><td>1</td></tr>
  		<tr><td><?php //echo '$result['sub1']'; 
  					 echo 'sub1';?></td><td>1</td><td>1</td></tr>
  		<tr><td><?php //echo '$result['sub1']'; 
  					 echo 'sub1';?></td><td>1</td><td>1</td></tr>
  	</table>
  
  </body>
  </html>