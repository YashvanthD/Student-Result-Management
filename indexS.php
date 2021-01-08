<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./css/Lcss.css">
<link rel="stylesheet" type="text/css" href="Lcss.css">
</head>
<body>

	<center>
		<div>
		<h1>Student Login Page</h1>
		</div>

		<div>
		<form method="POST" action="./LoginSS.php" >

      		<label>USN</label>              <input type="text" name="USN" required />
      		<br />
			<label>Password</label>       <input type="Password" name="Password" required />
			<br/>
			<input type="submit" value="Login">
			
    	</form>
    	<button type="submit" style="a: left;"><a href="createS.php">New User </a></button>
    	<button  onclick="window.location.href='./index.php'" >Home</button>
      	</div>

    	
	</center>

	
      
</body>
</html>