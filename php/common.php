<?php

function fileGetUser() {
    // get existing database list and store each line as a array
    $file = file('../database/db.txt', FILE_USE_INCLUDE_PATH);
    // store database as array for easy access
    $fileArr = [];
    // $file = current array file, $key = index of current array in file
    foreach ($file as $key => $value) {
            // Store each individual line value into an sub-array
            $fileArr[$key] = explode(':', $value);
    }
    return $fileArr;
}

function add_user($user) { 
    $file = '../database/db.txt';
    $user = implode(":", $user) . "\n";
    file_put_contents($file, $user, FILE_APPEND);
}

