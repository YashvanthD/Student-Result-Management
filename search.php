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

$searching=$_SESSION['searching'];
//echo $USN;

$sql = "select * from student where NAME='$searching' OR USN='$searching' limit 1";  
$result = mysqli_query($conn, $sql);
$error=mysqli_error($conn);
$error=mysqli_error($conn);
                if($error)
                {
                  echo  '<h1>'.$error.'</h1>';
                  $conn.die();
                }
//echo mysqli_num_rows($result);
$Nrows=mysqli_num_rows($result);
if(!$Nrows)
{
 

  echo '<hr><h1 style="color : red">Student Not found <h2 style="color : black">enter full name or correct USN</h2><hr><h3>'.$error.'<h3></h1>';
  $conn.die();
}
//echo $Nrows;
//if(!$Nrows==1)
else
{
$table='<center><table><tr><th> Name </th><th> USN </th><th>sem</th></tr>';


  $row=mysqli_fetch_assoc($result);
  $USN=$row['USN'];
  $name=$row['NAME'];
    $table.='<tr><td>'.$row['NAME'].'</td>';
    $table.='<td>'.$row['USN'].'</td>';
    $table.='<td>'.$row['department'].'</td></tr>';
   // $i=$i+1;  
$table.='</table></center>';
echo $table;
  include 'Smarks.php';
}
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