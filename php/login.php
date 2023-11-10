<?php
    session_start();
    $_SESSION['user_auth'] = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login: Who Wants to be a Millionare!</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div id = "mainarea"> 

        <div id = "top"> 
            <img src = "../img/logo.png" alt = "Logo"> 
        </div> 
        <h1>Who wants to be a Millionaire!</h1>
        <h2> Login Here</h2> 
        <div> 
            <form action="./login-submit.php" method="POST">
                <strong> <label for = "username"> Username: </label> </strong> 
                <input type = "text" name = "username" required=""> <br> <br>
                
                <strong> <label for = "password"> Password: </label>  </strong> 
                <input type = "password" name = "password" required = ""> <br><br> 
                
                <input type = "submit" value= "Submit" > <br><br> 
                
            </form>
        </div> 
        <h2> <a href = "./index.php">Go to Main Page</a> </h2> 
</div> 
</body>
</html>