<?php
//session_start();

//echo '<h1>ALL is well Marks is Show</h1>';

  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>Marks Sheet</title>
  </head>
  
 <?php $host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="SRMS"; // Database name 
$tbl_name="student"; // Table name 


$conn=mysqli_connect("$host", "$username", "$password","SRMS")or die("cannot connect"); 

$USN=$_SESSION['id'];
//echo $USN;

$sql = "select * from student ";  
$result = mysqli_query($conn, $sql);
//echo mysqli_num_rows($result);

$error=mysqli_error($conn);
                if($error)
                {
                  echo  '<h1>'.$error.'</h1>';
                  $conn.die();
                }
$Nrows=mysqli_num_rows($result);

//echo $Nrows;
//if(!$Nrows==1)
$i=0;
$table='<center><table><tr><th> Name </th><th> USN </th><th>Department</th></tr>';

while ($i!=$Nrows) {
  $row=mysqli_fetch_assoc($result);
    $table.='<tr><td>'.$row['NAME'].'</td>';
    $table.='<td>'.$row['USN'].'</td>';
    $table.='<td>'.$row['department'].'</td></tr>';
    $i=$i+1;  
}


$table.='</table></center>';
echo $table;

mysqli_close($conn);
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