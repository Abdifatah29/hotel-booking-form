<?php
// including user creds
include 'base.php';
    //create connection 
$conn = new mysqli($serverName,$userName,$userPassword, $dbName);

    //testing if connection is sucessful or failed
if ($conn->connect_error) {
	die("Connection not available:". $conn->connect_error);
}


