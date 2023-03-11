<?php

include "core.php";

// Establish new SQL connection variable
function db() {
    static $conn;

    // MySQL login information
    $servername = "localhost";
    $username = "imesh";
    $password = "pass";
    $dbname = "reachit";

    if ($conn === NULL){
        $conn = new mysqli($servername, $username, $password, $dbname);
    }

    // If unable to connect
        if($conn->connect_error){
            die("Could not connect to database: " . $conn->connect_error);
        }
    // Connection is successful!
        clog("Connected to database.");

    return $conn;
}
