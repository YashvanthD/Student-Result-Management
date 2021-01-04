<?php
session_start();
 
$USN=$_SESSION['USN'];

echo '<h1>'.$USN.'</h1>';
  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>Registration</title>
  </head>
  <body>
  <link rel="stylesheet" type="text/css" href="./Lcss.css">
<link rel="stylesheet" type="text/css" href="./css/Lcss.css">

<form method="POST"  >
	<label>Semester</label>
	<input type="number" name="sem" max="8" min="1" required><br>
	<label>Subject</label>
        <select id="addsub" name="addsub" required>
          <option value="Data Communication">Data Communication</option>
          <option value="Database management System">Database Management system</option>
          <option value="Software Testing">Software Testing</option>
          <option value="Operating System">Operating System</option> 
          <option value="Chemistry">Chemistry</option>
          <option value="Physics">Physics</option>         
          <option value="English">English</option>
          <option value="Computer Organization">Computer Organization</option>
          <option value="Data Structure">Data Structure</option>
          <option value="python">python</option>
          <option value="C Programming">C Programming</option>
          <option value="SAM">SAM</option>
          <option value="CAM">CAM</option>
          <option value="CAID">CAID</option>
          <option value="Object Oriented Programming">Object Oriented Programming</option>
		  <option value="Sensor and IOT">Sensor and IOT</option>
		  <option value="JAVA">JAVA</option>
       </select>      <br />
	<input type="submit" name="submitsub">
<button  onclick="window.location.href='subS.php'"style="float: right;" >Home</button>
</form>  


 <?php
        if(array_key_exists('submitsub', $_POST)) { 

           submitbtn(); 
        } 
 
   
        function submitbtn() { 
             echo '<br><hr>'; 
            //session_start();
		      $addUSN=$_SESSION['USN'];
			    $sem=$_POST['sem'];
        	$addsub=$_POST['addsub'];
        //  echo "incl";
         // echo $addsub,$addUSN,$sem;
         include 'addingS.php';
        
        } 

        ?>

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