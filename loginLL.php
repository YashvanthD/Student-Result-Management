<?php
session_start();

    if(!isset($_SESSSION['user']))
{
  echo '<h1 style="color:red">ERORR 404</h1><button  onclick="window.location.href=\'indexL.php\'" style="float: right;" >HOME</button>';
  die();
}

$user=$_SESSION['user'];
$dep=$_SESSION['dep'];
$USN=$_SESSION['id'];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title><?php echo $user;?></title>
 </head>
 	 <link rel="stylesheet" type="text/css" href="./Lcss.css">
<link rel="stylesheet" type="text/css" href="./../css/Lcss.css">
 <body>



<span><h1>
	<div class="error" style="text-align: center;">
		<?php echo $dep; ?>
	</div></h1>
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
                          

    
  <div>
    <form method="post"> 
        <input type="submit" name="button1"
                class="button" value="Student List" /> 
          
        <input type="submit" name="addmarks"
                class="button" value="Add Marks" /> 
       
         <div style="float: right;"><form method="post">

        <input type="text" placeholder="Enter USN to search Marks" name="searchname" />

        <input type="submit"  name="search"
                 value="search"/> &nbsp
    	</form>

    </form>
    <button  onclick="window.location.href='indexL.html'"style="float: right;" ><a style="color: white;background: black;"href="indexL.html">Logout</a></button> </div>


 
</div>
 <?php
        if(array_key_exists('button1', $_POST)) { 
            button1(); 
        } 
        else if(array_key_exists('addmarks', $_POST)) { 
            button2(); 
        } 
        else if(array_key_exists('search', $_POST)) { 
            button3(); 
        }  else if(array_key_exists('marksd', $_POST)) { 
            button5(); 
        }  

   
        function button1() { 
             //echo "Student Details"; 
             include('marksdisL.php');
        } 
                function button5() { 
             //echo "Student Details"; 
             include('Smarks.php');
        } 
        function button2() { 
            header('location:addmarks.php');

        } 
       function button3() { 
            //echo "Searching for student.....  ";
            //echo $_POST['searchname']; 
            $_SESSION['searching']=$_POST['searchname'];
            include ('search.php');
        }
      function resulted(){
                      	include ('addmarks.php');
                      }
    ?> 
<div>

 
 </body>
 <style type="text/css">
 	
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
 </html>