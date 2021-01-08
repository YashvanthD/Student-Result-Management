
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
      <h1>Create Student Information</h1>
      <br/>
      <br/>
    </center>
  </div> 

  <div class="card">
    <form method="POST" action="./logupS.php">
      <label>USN</label>        <input type="text" name="USN" required />      <br />
      <label>Name</label>       <input type="text" name="name" required/>      <br />
      <label>Date of Birth</label>       <input type="date" name="dob" required placeholder="yyyy-mm-dd"min="1980-01-01" max="2020-12-31" />      <br />
      <label>Gender</label>       
      
          <input type="radio" name="gender" value="male"> Male
          <input type="radio" name="gender" value="female"> Female
          <input type="radio" name="gender" value="other"> Other
<br>
      <label>Adrress</label>       <input type="text" name="Address" required/>      <br />
      <label>Phone</label>       <input type="Phone" name="phone" required/>      <br />
      <label>Department</label>       
        <select id="country" name="Department" required>
          <option value="Architecture">Architecture</option>
          <option value="Biotech and Engineering">Biotech and Engineering</option>
          <option value="Chemical and Engineering">Chemical and Engineering</option>
          <option value="Civil and Engineering">Civil and Engineering</option>
          <option value="Computer Science and Engineering">Computer Science and Engineering</option>
          <option value="Electrical and Engineering">Electrical and Engineering</option>
          <option value="Electronics and Engineering">Electronics and Engineering</option>
          <option value="Information Science and Engineering">Information Science and Engineering</option>
          <option value="Mechanical and Engineering">Mechanical and Engineering</option>
        </select>      <br />
      <label id="sem">Semester</label>       
        <select id="Sem" name="Sem" required>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
       </select>        <br/>
     

      <label>Email</label>            <input type="email" name="email" />      <br/>
       <label>Password</label>       <input name="password" type="password" onChange="onChange()" required/>      <br />
       <label>Confirm Password</label>      <input name="cpassword"  type="password" onChange="onChange()" /> </label>  <br />
      <span id='message'></span>      <br />
       <input type="submit" value="Create">
    </form>    <br>
        
        <button  onclick="window.location.href='./indexS.php'">Login </button>
        <button  onclick="window.location.href='./index.php'" >Home</button>

    </div>

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

