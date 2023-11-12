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
				<img id = "loser" src = "../img/lose.png" alt = "Loser"> <br>
			</div> 
			<h1>Sorry, you lost :(</h1>
			
			<div class = "nav"> 
				<a href = "./homepage.php" class = "box"> 
				Try Again</a> 
				
				<a href = "./leaderboard.php" class= "box">
				Check the leaderboard</a> 
				
				<a href = "./logout.php" class = "box"> 
				Log Out </a> 
				
		</div>
			
	</div> 
</body>
</html>