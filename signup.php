<?php

require_once 'db_connect.php';

$username = "";
$useremail = "";
$userpassword1= "";
$userpassword2= "";
$errors = array();

	

	if(isset($_POST['signup-btn'])){
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$useremail = mysqli_real_escape_string($db, $_POST['useremail']);
		$userpassword1 = mysqli_real_escape_string($db, $_POST['userpassword1']);
		$userpassword2 = mysqli_real_escape_string($db, $_POST['userpassword2']);

		if(empty($username)){
			array_push($errors, "Username is required");
		}
		if(empty($useremail)){
			array_push($errors, "Email is required");
		}
		if(empty($userpassword1)){
			array_push($errors, "Password is required");
		}
		if($userpassword1 != $userpassword2){
			array_push($errors, "The two Passwords do not match");
		}

		$query = "SELECT * FROM users WHERE username= '$username'";
		$result= mysqli_query($db,$query);
		if(mysqli_num_rows($result)==1){
				array_push($errors, "Username unavailable");
		}
		else{


			if(count($errors)==0){
				$password = md5($userpassword1);
				$sql = "INSERT INTO users (username, email, password, to_date) VALUES ('$username', '$useremail', '$password', now())";
				mysqli_query($db, $sql);

				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are logged in";
				header('location: dashboard.php');
			}

		}


	}


	include('error.php');








?>