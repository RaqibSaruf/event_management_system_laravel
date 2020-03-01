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
     
      <h2>USER LOGIN</h2>

      <form action="login.php" method="post">
        <p>User Name:</p>
        <input type="text" name="username" placeholder="Enter User name">
        <br><br>
        <p>Password:</p>
        <input type="password" name="userpassword" placeholder="Enter Password" id="Input_pass">
        <br><br>
        <input type="checkbox" onclick="show_passord()">Show Password
        <br><br>
        <button type="submit" name="login-btn">LOGIN</button><br>
        
        <a href="#">Forgot Password?</a><br>
        <a href="signpage.php">Create a new account?</a><br>
         
      </form>
    </div>  
  </div>


</body>


</html>