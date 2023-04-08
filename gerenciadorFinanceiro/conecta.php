<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$mysqli = new mysqli("localhost", "root", "", "mydb");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else{
}
?>