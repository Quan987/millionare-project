<?php
    session_start();
    require('./common.php');

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $username = $_POST['username'];
        $pass = $_POST['password'];
        if (!(isset($username) && isset($pass))) {
            $_SESSION['error'] = 'Error in Registration! <br> <br> Please fill in all fields login page!';
            header('Location: ./errorPage.php');
            exit;
        } else {
            $return_user = [$username, $pass];
            $user_found = false;
            // Check if user exist already
            $fileArr = fileGetUser();
            foreach ($fileArr as $value) {
                if ($value[2] == $return_user[0] && $value[3] == $return_user[1]) {
                    $_SESSION['user_auth'] = "$value[0] $value[1]";
                    $user_exist = true;
                    break;
                }
            }
            if (!$user_exist) {
                $_SESSION['error'] = 'User have not register! <br><br> Please registered!';
                header('Location: ./errorPage.php');
                exit();
            } else {
                header('Location: ./homepage.php');
                exit();
            }
        }
    }