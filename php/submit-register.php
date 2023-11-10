<?php 
	session_start(); 
	
	$username = $_POST["username"]; 
	$password = $_POST["password"]; 
	$password2 = $_POST["password2"]; 
	
	$score = 0; 
	if($password != $password2) {
		$_SESSION["error"] = "Password does not match"; 
		header("location:error.php"); 
		exit(); 
	}
	$user_info = fopen("data.txt", "a"); 
	$data = $username . "," . $password . "," . $score; 
	fwrite($user_info, $data.PHP_EOL); 
	
	header("location:login.php"); 
	exit(); 

?> 