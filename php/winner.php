<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Who Wants to be a Millionare!!</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div id = "mainarea">
		<div id = "top"> 
			<img src = "../img/logo.png" alt = "Logo"> 
		</div> 
			<div> 
				<img id = "winner" src = "../img/youWin.png" alt = "Winner"> <br>
			</div> 
			<h1>YOU WON!</h1>
			 <p> YOU ARE A MILLIONAIRE <?= ucwords($_SESSION['user_auth']); ?> !</p> 
			 
			<div class = "nav"> 
				<a href = "./homepage.php" class = "box"> 
				Play Again</a> 
				
				<a href = "./leaderboard.php" class= "box">
				Check the leaderboard</a> 
				
				<a href = "./logout.php" class = "box"> 
				Log Out </a> 
				
		</div>
			
	</div> 
</body>
</html>