<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset="utf-8">
<title>REGISTER: Who Wants To Be A Millionaire!</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
	<div id = "mainarea"> 
		<div id = "top"> 
			<img src = "logo.png" alt = "Logo"> 
		</div> 
		<h1>Who wants to be a Millionaire!</h1> 
		<h2> Register to Play (OR) </h2> 
		<h2> <a href = "login.php"> Already Registered? LOGIN here</a> </h2> 
		<div> 
			<form action="submit-register.php" method="post" name="Register_Form">
				<strong> <label for = "username"> Username: </label> </strong> 
				<input type = "text" name = "username" required=""> <br> <br>
				
				<strong> <label for = "password"> Password: </label> </strong> 
				<input type = "password" name = "password" required = ""> <br><br> 
				
				<strong> <label for = "confirmPassword"> Confirm Password: </label> </strong> 
				<input type = "password" name = "password2" required = ""> <br> <br> 
				
				<input type = "submit" value= "Submit" > <br><br>
				
	
			</form>
		</div> 
	</div> 
</body>
</html>