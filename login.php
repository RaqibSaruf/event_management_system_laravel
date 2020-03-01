<?php 
require_once 'session.php';
require_once 'db_connect.php';


$username = "";
$userpassword= "";
$errors = array();

	if(isset($_POST['login-btn'])){
		$username = mysqli_real_escape_string($db, $_POST['username']);
		
		$userpassword = mysqli_real_escape_string($db, $_POST['userpassword']);
		

		if(empty($username)){
			array_push($errors, "Username is required");

		}
		if(empty($userpassword)){
			array_push($errors, "Password is required");
		
		}

		if(count($errors)==0){
			$password = md5($userpassword);
			$query = "SELECT * FROM users WHERE username= '$username' AND password = '$password'";
			$result= mysqli_query($db,$query);
			if(mysqli_num_rows($result)==1){
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are logged in";
				header('location: dashboard.php');
			}else{
				array_push($errors, "Wrong User name or password");
				
			}
		}
	}

 include("error.php");
 ?>