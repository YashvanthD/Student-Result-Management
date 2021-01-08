<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" type="text/css" href="./Lcss.css">
<link rel="stylesheet" type="text/css" href="./css/Lcss.css">
  <title>New Registration</title>
    </head>

<body>

  <div name="Heading">
    <center>
      <h1>Create Lecturer Information</h1>
      <br/>
      <br/> 
  </div> 
  </div>

    <form method="POST" action="./logupL.php">

      <label>Lecturer ID</label>              <input type="text" name="ID" required />
      <br />
      <label>Name</label>       <input required type="text" name="name" />
      <br />
     
      <label>Department</label>       
        <select id="Department" name="Department" required>
          <option value="Architecture">Architecture</option>
          <option value="Biotech and Engineering">Biotech and Engineering</option>
          <option value="Chemical and Engineering">Chemical and Engineering</option>
          <option value="Civil and Engineering">Civil and Engineering</option>
          <option value="Computer Science and Engineering">Computer Science and Engineering</option>
          <option value="Electrical and Engineering">Electrical and Engineering</option>
          <option value="Electronics and Engineering">Electronics and Engineering</option>
          <option value="Information Science and Engineering">Information Science and Engineering</option>
          <option value="Mechanical and Engineering">Mechanical and Engineering</option>

        </select>

      <br />
      <label>Email</label>            <input required type="email" name="email" />
      <br/>
       <label>Password</label>       <input required name="password" type="password" onChange="onChange()" required/>
      <br />
       <label>Confirm Password</label>      <input name="cpassword"  type="password" onChange="onChange()" /> </label><br />
      <span id='message'></span>
      <br />
       <input type="submit" value="Create">

    </form>
   <br>
   <button  onclick="window.location.href='./indexL.php'">Login </button>
      <button  onclick="window.location.href='./index.php'" >Home</button>



</body>



<script type="text/javascript">
function onChange() {
  const password = document.querySelector('input[name=password]');
  const confirm = document.querySelector('input[name=cpassword]');
  if (confirm.value === password.value) {
    confirm.setCustomValidity('');
  } else {
    confirm.setCustomValidity('Passwords do not match');
  }
}

</script>
</html>