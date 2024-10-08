<?php
$servername = "sql213.infinityfree.com"; // or your server
$username = "if0_37457726"; // replace with your MySQL username
$password = "fcUAXzvYec9YaX8"; // replace with your MySQL password
$dbname = "if0_37457726_Cv_management"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
