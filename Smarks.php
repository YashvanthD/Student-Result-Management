<?php
//session_start();

//echo '<h1>ALL is well Marks is Show</h1>';
 $USN=$_SESSION['USN'];
  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>Marks Sheet</title>
  </head>
  
 <?php 

include 'connecting.php';
$sql = "select * from marktable where USN='$USN';";  
$result = mysqli_query($conn, $sql);
$error=mysqli_error($conn);
if ($error) {
  echo 'No table';
  $conn.die();
  # code...
}
echo 'Total Sub enrolled is :'.mysqli_num_rows($result);

$Nrows=mysqli_num_rows($result);

if($Nrows)
{
	$i=0;
	$table='<center><table><tr><th>sem</th><th>Subject</th><th>Marks Obtained</th><th>Grade</th></tr>';

	while ($i!=$Nrows) 
	{
 	$row=mysqli_fetch_assoc($result);
    $table.='<tr><td>'.$row['sem'].'</td>';
    $table.='<td>'.$row['sub'].'</td>';
    $table.='<td>'.$row['marks'].'</td>';
    
    if($row['marks']>40 )
    {
    $table.='<td ><label>'.$row['grade'].'</label></td></tr>';
    }
    else{
    $table.='<td><label style="color:red;text-decoration-color:red;">'.$row['grade'].'</label></td></tr>';
    }
    
    $i=$i+1;  
	}


	$table.='</table></center>';
	echo $table;
}
else
{
	echo "<br>Marks Still Not Updated".$error;
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