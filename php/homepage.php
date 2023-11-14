<?php
	session_start(); 
	$_SESSION['current'] = '0';
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home: Who Wants to be a Millionaire!</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div id = "mainarea">
		<div id = "top"> 
			<img src = "../img/logo.png" alt = "Logo"> 
		</div> 
			<h1>Who wants to be a Millionaire!</h1>
			<p> Welcome, <?= ucwords($_SESSION['user_auth']); ?> !</p> 
			<p> Rules: </p> 
			<p> The game is a series of multiple choice questions that each have 4 possibilities. The contestant must answer 15 
					of the questions correctly in order to win 1 million dollars. </p> 
			<br> <br> 
			<div class = "nav"> 
				<a href = "../php/questions.php" class = "box"> 
				Questions </a> 
				<a href = "../php/leaderboard.php" class= "box">
				Leaderboard </a> 
				<a href = "../php/logout.php" class = "box"> 
				Log Out </a> 		
		</div>
	</div> 
</body>
</html>