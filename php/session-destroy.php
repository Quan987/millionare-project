<?php 
    session_start(); /* Starts the session */
    session_unset();
    session_destroy(); /* Destroy started session */
    header("Location: ./index.php");
    exit;
?>
