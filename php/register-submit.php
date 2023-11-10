<?php
    session_start();
    require('./common.php');
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $username = $_POST['username'];
        $pass = $_POST['password'];
        if (!(isset($firstName) && isset($lastName) && isset($username) && isset($pass))) {
            $_SESSION['error'] = 'Error in Registration! <br> <br> Please fill in all fields on registration page!';
            header('Location: ./errorPage.php');
            exit;
        } else {
            $new_user = [$firstName, $lastName, $username, $pass];
            $user_exist = false;
            // Check if user exist already
            $fileArr = fileGetUser();
            foreach ($fileArr as $value) {
                if ( $value[2] == $new_user[2] && ($value[0] == $new_user[0] || $value[1] == $new_user[1])) {
                    $user_exist = true;
                }
            }
            if ($user_exist) {
                $_SESSION['error'] = 'Error in Registration! <br><br> User have already registered!';
                header('Location: ./errorPage.php');
                exit();
            } else {
                add_user($new_user);
                // Set user authentication
                $_SESSION['user_auth'] = "$firstName $lastName";
                header('Location: ./homepage.php');
                exit();
            }
        }
    }

