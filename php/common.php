<?php

function fileGetUser() {
    // get existing database list
    $file = ('../database/db.txt');
    // store database as array for easy access
    $fileArr = json_decode(file_get_contents($file), true);
    return $fileArr;
}

function add_user($user) { 
    $file = ('../database/db.txt');
    $fileArr = fileGetUser();
    // add user to existing database list
    array_push($fileArr, $user);
    // encode the database file with new user registered
    file_put_contents($file, json_encode($fileArr));
}