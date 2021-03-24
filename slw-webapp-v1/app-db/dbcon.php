<?php

$servername = "rdbms.strato.de";
$username   = "U3644543";
$password   = "Selectworksdatabase";
$dbname     = "DB3644543";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Verbinden mislukt: " . $conn->connect_error);
}

?>