<?php 
	session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
		header("location:homepage.php"); 
		exit(); 
	}
	else{
		
	}
?>
<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset="utf-8">
<title>LOGIN: Who Wants To Be A Millionaire!</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
	<div id = "mainarea"> 
		 
		<div id = "top"> 
			<img src = "logo.png" alt = "Logo"> 
		</div> 
		<h1>Who wants to be a Millionaire!</h1>
		<h2> Login Here</h2> 
		<div> 
			<form action="submit-login.php" method="post" name="Login_Form">
				<strong> <label for = "username"> Username: </label> </strong> 
				<input type = "text" name = "username" required=""> <br> <br>
				
				<strong> <label for = "password"> Password: </label>  </strong> 
				<input type = "text" name = "password" required = ""> <br><br> 
				
				<input type = "submit" value= "Submit" > <br><br> 
	
			</form>
		</div> 
	</div> 
</body>
</html>