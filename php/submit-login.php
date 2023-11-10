<?php
	session_start(); 
	session_save_path("session"); 
	
	$username = $_POST["username"]; 
	$password = $_POST["password"]; 
	
	$user_file = ""; 
	$password_file = ""; 
	
	$user_info = fopen("data.txt", "r"); 
	
	while(!feof($user_info)) {
		$user_array = fgetcsv($user_info); 
		
		if($user_array[0] == $username) {
			$user_file = $user_array[0]; 
			$password_file = $user_array[1]; 
			break; 
		}
	}
	if($password == $password_file) {
		$_SESSION["loggedin"] = true; 
		$_SESSION["username"] = $username; 
		$_SESSION["password"] = $password; 
		header("location:homepage.php"); 
		exit(); 
	} else {
		$_SESSION["error"] = "Username or Password is incorrect"; 
		header("location:error.php"); 
		exit(); 
	}



?>