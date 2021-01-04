<?php
session_start();

 $dep=$_SESSION['dep'];
$name=$_SESSION['user'];
$USN=$_SESSION['USN'];


?>
<!DOCTYPE html>
<html>
  <link rel="stylesheet" type="text/css" href="./Lcss.css">
<link rel="stylesheet" type="text/css" href="./css/Lcss.css">
<head>
<title><?php echo $name; ?></title>

</head>
<body>
<body background="green">
	<span>
	<div class="error" style="text-align: center;">
		<?php 
     
    echo $dep;?>
	</div>
	</span>
	<div>

<h1>
  <?php 
	echo '<div style="clear: both;">
        <h3><p style="text-align: left; "float :left>',
			 $name ,
			 '<span style="float :right">'
			 ,$USN,'</span></p></h3>
		</div>';

	 ?>
	</h1>
<hr>


  <div>
    <form method="post"> 
        <input type="submit" name="button1"
                class="button" value="Profile" /> 
        
        <input type="submit" name="button2"
                class="button" value="Sub Registration" /> 

        <input type="submit" name="button3"
                class="button" value="Marks Sheet" /> 
		  <input type="submit" name="button4"
                class="button" value="Subjects" /> 


        <button  style="float: right;" ><a href="indexS.html">Logout</a></button>
    </form> </div>
 <?php
   
        if(array_key_exists('button1', $_POST)) { 
            button1(); 
        } 
        else if(array_key_exists('button2', $_POST)) { 
            button2(); 
        } 
        else if(array_key_exists('button3', $_POST)) { 
            button3(); 
        } 
         else if(array_key_exists('button4', $_POST)) { 
            button4(); 
        } 

        function button1() { 

            include 'profile.php'; 
        } 
        function button2() { 
           header('location:subReg.php'); 
          
        }
      	function button3() { 

            include 'Smarks.php';
        }
          function button4() { 

            include 'Listsub.php';
        }   
    ?> 
<div>
<center>
<form>
	

</form>
</center>
</div>



</body>

<style type="text/css">
	

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

</style>
</html>