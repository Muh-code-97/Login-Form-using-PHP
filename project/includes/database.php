<?php
    $dbHost="localhost";
    $dbUser="root";
    $dbPass="";
    $dbName="data";

    $conn= mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if (!$conn) {
        die("Database Connection Failed");
    }

?>