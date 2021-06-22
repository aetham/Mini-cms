<?php
# Change the connection parameters to your mysqli connection.
$hostname = "localhost";
$username = "root";
$password = "";
$database = "cms";

$conn= new mysqli($hostname, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
return $conn;