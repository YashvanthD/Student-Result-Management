
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

//echo 'cam ';
//echo mysqli_num_rows($result);

if($error)
{
  echo $error,'Cannot connect';
}


  $sql = "select *
          from semsub 
          where (USN='$addUSN') ;";  
  $result = mysqli_query($conn, $sql);

  $error=mysqli_error($conn);
  if ($error) {
    echo '<h2 style="color:red">'.$error.'</h2>';
    }
$flag=0;
$Nrows=mysqli_num_rows($result);

if($Nrows)
{
  $i=0;
    while ($i!=$Nrows) 
  {
     $row=mysqli_fetch_assoc($result);
     
      if($row['sub']==$addsub)
       {
          $flag=1;
           $sql = "select *
          from marktable 
          where USN='$addUSN' and sub='$addsub' ;";  
          $result1 = mysqli_query($conn, $sql);

          $error=mysqli_error($conn);
          if ($error) {
            echo '<h2 style="color:red">'.$error.'</h2>';
            }

            $Nrowsin=mysqli_num_rows($result1);
           // echo $Nrowsin;
            if($Nrowsin)
            {
            $rowin=mysqli_fetch_assoc($result1);
            //echo $rowin['marks'];
              if($rowin['marks']>40)
                {
                 echo '<h2 style="color:red">already Registered</h2>';
                $conn.die();
                }
          
              else if($rowin['marks']<40 && $rowin['sem']!=$sem)
                {
                  echo $sem,$rowin['sem'];
                    $sql2 = "update marktable
                            set sem='$sem',marks=NULL,grade=NULL
                            where USN='addUSN' and sub='$addsub';";  

                    $result2 = mysqli_query($conn, $sql2);
                    $error=mysqli_error($conn);

                    //echo mysqli_num_rows($result);
                    //$Nrows=mysqli_num_rows($result);
                    if($error)
                    { 
                      echo '<hr><h1 style="color : red ">'.$error.'</h1>';
                      $conn.die();
                    }
                    $sql3 = "update semsub
                            set sem='$sem'
                            where USN='addUSN' and sub='$addsub';";
                    $result3 = mysqli_query($conn, $sql3);
                    $error=mysqli_error($conn);

                    //echo mysqli_num_rows($result);
                    //$Nrows=mysqli_num_rows($result);
                    if($error)
                    { 
                      echo '<hr><h1 style="color : red ">'.$error.'</h1>';
                      mysqli_close($conn);
                      $conn.die();
                    }
                    else
                    {
                      echo '<center><h3 style="color:green"> '.$addsub.' Reregistered Successfully to '.$addUSN.' </h3></center>';
                      mysqli_close($conn);
                             $conn.die();
                    }
            }
              }

        }
       $i=$i+1;  
    }
}
else
{
  echo "Marks Still Not Updated".$error;
}




/*
  $sql = "select * from marktable where sub='$addsub' and USN='$addUSN';";  
  $result = mysqli_query($conn, $sql); 
  echo $addUSN;
  $error=mysqli_error($conn);
  if ($error) {
    echo $error,'Cannot connect';    $conn.die();
    # code...
  }
  $Nrows=mysqli_num_rows($result);
  if($Nrows )
  {
    $row=mysqli_fetch_assoc($result);
    if(40>$row['marks']){
       echo '<hr><h1 style="color : red">Subject is already Registered <h2 style="color : black"></h2><hr><h3>'.$error.'<h3></h1>';
    $conn.die();
    }
  }*/
if($flag==0){
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
  echo '<center><h3 style="color:green">'.$addsub.' Subject Addedd Successfully to '.$addUSN.' </h3></center>';
}


}
else
{
   echo '<h2 style="color:red">already Registered</h2>';

}


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
<?php 

 ?>