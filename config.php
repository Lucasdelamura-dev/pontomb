<?php
// Define your database connection parameters
$dbHost = 'monorail.proxy.rlwy.net';
$dbUser = 'root';  // MySQL username
$dbPassword = 'ebA1gb5DAdbhc14afdbCcgdCFdg4G1gE';  // MySQL password
$dbName = 'railway';  // Name of the database

// Create a connection to the database
$mysqli = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

// Check for connection errors
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}
?>
