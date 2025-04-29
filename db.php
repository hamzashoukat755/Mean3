<?php
$host = "localhost"; // usually localhost
$user = "root"; // your database username
$password = ""; // your database password
$dbname = "mean3_clone"; // your database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// You can now use $conn in your other PHP files after including db.php
?>
