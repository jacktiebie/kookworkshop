<?php
// Database connectie en het starten van een session
session_start();

$dbServername = "localhost"; 
$dbUsername = "root"; 
$dbPassword = ""; 
$dbName = "localhost";

// Create connection
 $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName); 

// Check connection 
if (!$conn) { die("Connection failed: " . mysqli_connect_error()); } 

// echo "Database Connection";
?>