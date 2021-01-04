<?php
session_start();
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

<button  onclick="window.location.href='./loginLL.php'"style="float: right;" >Home</button>
<button  onclick="window.location.href='./indexL.html'"style="float: right;" >Logout</button> &nbsp</div>

                   <div>
 	<hr>
 <form method="POST">
    	 <label>USN</label>   
    	 <input type="text" name="addUSN" required> <br>
       <label>Sem</label>   
       <input type="number" name="sem" pattern="^[0-9]" title="Only Number" min="0" step="1" max="8"required> <br>
    	 <label>Subject </label> 
        <select id="addsub" name="addsub" required>
          <option value="Data Communication">Data Communication</option>
          <option value="Database management System">Database Management system</option>
          <option value="Software Testing">Software Testing</option>
          <option value="JAVA">JAVA</option>          
       </select>      <br />
       <label>Marks </label>
       	<input type="number" pattern="^[0-9]" title="Only Number" min="0" step="1" max="100"name="addsubmarks" required>
       	<input type="submit" name="submitmarks">
    	 </form>
</div>
 <?php
        if(array_key_exists('submitmarks', $_POST)) { 

            button1(); 
        } 
        if(array_key_exists('addUSN', $_POST)) { 

            $addUSN=$_POST['addUSN'];
            echo $addUSN; 
        } 
 
   
        function button1() { 
             echo '<br><hr>'; 
			    $addUSN=$_POST['addUSN'];
        	$_SESSION['addUSN']=$addUSN;
        	$addsub=$_POST['addsub'];
        	$sem=$_POST['sem'];
          $_SESSION['sem']=$sem;
          
          $addsubmarks=$_POST['addsubmarks'];
        	$_SESSION['addsubmarks']=$addsubmarks;
        	$_SESSION['addsub']=$addsub;
             include('adding.php');
     
        } 

        ?>


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
