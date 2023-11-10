<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER: Who Wants To Be A Millionaire!</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id = "mainarea"> 
		<div id = "top"> 
			<img src = "../img/logo.png" alt = "Logo"> 
		</div> 
		<h1>Who wants to be a Millionaire!</h1> 
		<h2> Register to Play (OR) </h2> 
		<h2> <a href = "./login.php"> Already Registered? LOGIN here</a> (OR)</h2> 
		<div> 
			<form action="../php/register-submit.php" method="POST" name="Register_Form">
				<strong> <label for="fname">First Name: </label></strong>
				<input type="text" name="fname" id="fname" require> <br> <br>

				<strong> <label for="lname">Last Name: </label></strong>
				<input type="text" name="lname" id="lname" require> <br> <br>

				<strong> <label for = "username">Username: </label> </strong> 
				<input type = "text" name = "username" id="username" required> <br> <br>
				
				<strong> <label for = "password">Password: </label> </strong> 
				<input type = "password" name = "password" maxlength="8" required> <br><br> 
				
				<input type = "submit" value= "Submit" > <br><br>

			</form>
		</div> 
	</div>
</body>
</html>