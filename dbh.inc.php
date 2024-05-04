<?php

# server connection credentials
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "FYP";

# Open connection to database
$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

# terminate connection/session and present error message
if (!$conn) {
    die("Connection to database failed: " . mysqli_connect_error());
}

?>