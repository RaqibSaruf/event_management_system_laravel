<?php

require_once 'session.php';

if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location: index.php');
	}


?>