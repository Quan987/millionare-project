<?php
	session_start(); 
	session_save_path("session");
	
	$users = file("data.txt"); 
	$user = ''; 
	
	for($x = 0; $x < count($users); $x++) {
		 $user = strstr($users[$x], $_GET["username"]);
		 if ($user !== FALSE) {
			 break;
		 }
	}


?>
<!DOCTYPE html>
<html lang = "en">

	<head>
		<title>Who wants to be a Millionaire!</title>
		<link href="./style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
	<div id = "mainarea">
		<div id = "top"> 
			<img src = "logo.png" alt = "Logo"> 
		</div> 

			<h1>Who wants to be a Millionaire!</h1>
			<p> Welcome, <?= $_GET("username") ?> !</p> 
			<p> Rules: </p> 
			<p> The game is a series of multiple choice questions that each have 4 possibilities. The contestant must answer 15 
				of the questions correctly in order to win 1 million dollars. </p> 
			<br> <br> 
			<div class = "nav"> 
				<a href = "questions/question1.php" class = "box"> 
				Questions </a> 
				
				<a href = "leaderboard.php" class= "box">
				Leaderboard </a> 
				<a href = "logout.php" class = "box"> 
				Log Out </a> 
				
		</div>
	</div> 

	</body>
</html>