<?php
// Replace these credentials with your actual database information
$hostname = "localhost";
$username = "root";
$password = "";
$database = "intern";

// Step 1: Create a database connection
$connection = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>