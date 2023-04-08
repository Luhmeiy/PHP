<?php
$servername = "localhost";
$username = "id14991490_root";
$password = "PN0/}bRmeQwG+\bq";
$dbname = "id14991490_tcc";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$mysqli = new mysqli("localhost", "id14991490_root", "PN0/}bRmeQwG+\bq", "id14991490_tcc");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else{
}
?>