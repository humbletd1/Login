<?php
$servername = "localhost";
$username = "root"; // Change this to your database username
$password = "123"; // Change this to your database password
$dbname = "user_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
