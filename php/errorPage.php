<?php 
    session_start(); /* Starts the session */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page: Who Wants To Be A Millionaire!</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id = "mainarea"> 
		<div id = "top"> 
			<img src = "../img/logo.png" alt = "Logo"> 
		</div> 
		<h1>Who wants to be a Millionaire!</h1> 
        <h2> <?= $_SESSION['error']; ?></h2>

        <h2> <a href = "./session-destroy.php">Go to Main Page</a> </h2> 
	</div>
</body>
</html>