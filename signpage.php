<!DOCTYPE html>

<html>
<head>
  
	<title>Event Name</title>

<?php include("link.php"); ?>

  <link rel="stylesheet" type="text/css" href="css/loginpage.css">

  <script type="text/javascript">
    
    function show_passord() {
      var x = document.getElementById("Input_pass");
      if (x.type === "password") {
        x.type = "text";
        } else {
        x.type = "password";
        }
    }

  </script>
	
</head>

<body>

    <div class="background">
    <div class="loginbox">
      <img src="photos/001-user.png" id="avatar">
     
      <h2>USER SIGNUP</h2>

      <form action="signup.php" method="post">
        <p>User Name:</p>
        <input type="text" name="username" placeholder="Enter User name"  required>
        <br><br>
        <p>Email:</p>
        <input type="text" name="useremail" placeholder="Enter Email" required>
        <br><br>
        <p>Password:</p>
        <input type="password" name="userpassword1" placeholder="Enter Password" id="Input_pass" required >
        <br><br>
        <p>Confirm Password:</p>
        <input type="password" name="userpassword2" placeholder="Enter Password">
        <br><br>
        <input type="checkbox" onclick="show_passord()"> Show Password
        <br><br>

        

        <button type="submit" name="signup-btn">SIGNUP</button><br>
        
         
      </form>
    </div>  
  </div>


</body>


</html>