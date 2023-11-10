<?php
    session_start();
    // Prevent User from accesing this site using URL
    if (!isset($_SESSION['user_auth'])) {
        header('Location: ./session-destroy.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Out</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id = "mainarea">
		<div id = "top"> 
			<img src = "../img/logo.png" alt = "Logo"> 
		</div> 
			<h1>Who wants to be a Millionaire!</h1>
			<p> GoodBye!, <?= ucwords($_SESSION['user_auth']); ?> !</p> 
            <h2> <a href = "./session-destroy.php">Go to Main Page</a> </h2> 
	</div> 
</body>
</html>