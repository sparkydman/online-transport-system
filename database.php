<?php
$conn = new mysqli('localhost', 'root', '', 'gigm');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = 'tony';
$password = 'pass';
?>

