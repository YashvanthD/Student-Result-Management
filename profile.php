<?php
//session_start();

//echo '<h1>ALL is well Marks is Show</h1>';

  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>Profile</title>
  </head>
  
 <?php 
 //session_start();
 $USN=$_SESSION['USN'];
include 'connecting.php';
$sql = "select * from student where USN='$USN' limit 1";  
$result = mysqli_query($conn, $sql);
//echo 'Total Sub enrolled is :'.mysqli_num_rows($result);
$Nrows=mysqli_num_rows($result);
$error=mysqli_error($conn);
if($Nrows)
{
	$i=0;
	$table='<center><table><tr>Profile</tr>';

	while ($i!=$Nrows) 
	{
 	$row=mysqli_fetch_assoc($result);
    $table.='<tr><td>Date of Birth</td><td>'.$row['dob'].'</td></tr>';
    $table.='<tr><td>Phone</td><td>'.$row['PHONE'].'</td></tr>';
    $table.='<tr><td>Gender</td><td>'.$row['GENDER'].'</td></tr>';
     $table.='<tr><td>Department</td><td>'.$row['department'].'</td></tr>';
      $table.='<tr><td>Email</td></td><td>'.$row['email'].'</td></tr>';
    $table.='<tr><td>Password</td><td>'.$row['password'].'</td></tr>';
    $i=$i+1;  
	}


	$table.='</table></center>';
	echo $table;
}
else
{
	echo "Marks Still Not Updated".$error;
}

 ?>
  
  
  </body>

<style type="text/css">
  table,tr,th{
    border: 3px solid;
  }
    th{
    border: 2px solid;
  }
  td{
    border: 1px solid;
  }
</style>
  <script type="text/javascript">
    
  </script>
  </html>